<?php

namespace App\Models;

use App\Facades\CampaignLocalization;
use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use App\Traits\VisibleTrait;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Location
 * @package App\Models
 * @var string $name
 * @var string $type
 * @var string $entry
 * @var string $image
 * @var string $map
 * @var boolean $is_private
 * @var boolean $is_map_private
 * @var integer $parent_location_id
 */
class Location extends MiscModel
{
    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns  = ['name', 'entry', 'type'];


    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'type',
        'image',
        'map',
        'entry',
        'parent_location_id',
        'campaign_id',
        'is_private',
        'is_map_private',
    ];

    /**
     * Fields that can be filtered on
     * @var array
     */
    protected $filterableColumns = [
        'name',
        'type',
        'parent_location_id',
        'tag_id',
        'is_private',
    ];

    /**
     * Fields that can be sorted on
     * @var array
     */
    protected $sortableColumns = [
        'map',
        'parentLocation.name',
    ];

    /**
     * Entity type
     * @var string
     */
    protected $entityType = 'location';

    /**
     * Nullable values (foreign keys)
     * @var array
     */
    public $nullableForeignKeys = [
        'parent_location_id',
    ];

    public $cachedImageFields = ['map'];

    /**
     * Traits
     */
    use CampaignTrait;
    use VisibleTrait;
    use NodeTrait;
    use ExportableTrait;

    /**
     * @return string
     */
    public function getParentIdName()
    {
        return 'parent_location_id';
    }

    /**
     * Performance with for datagrids
     * @param $query
     * @return mixed
     */
    public function scopePreparedWith($query)
    {
        return $query->with([
            'entity',
            'parentLocation',
            'parentLocation.entity',
            'locations',
            'characters'
        ]);
    }

    /**
     *
     */
    public function parentLocation()
    {
        return $this->belongsTo('App\Models\Location', 'parent_location_id', 'id');
    }

    /**
     * Parent Location
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'parent_location_id', 'id');
    }

    /**
     *
     */
    public function characters()
    {
        return $this->hasMany('App\Models\Character', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locationAttributes()
    {
        return $this->hasMany('App\Models\LocationAttribute', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\Models\Item', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany('App\Models\Location', 'parent_location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Models\Event', 'location_id', 'id');
    }

    /**
     * Get all characters in the location and descendants
     */
    public function allCharacters()
    {
        $locationIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $locationIds[] = $descendant->id;
        };

        return Character::whereIn('location_id', $locationIds)->with('location');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function families()
    {
        return $this->hasMany('App\Models\Family', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function journals()
    {
        return $this->hasMany('App\Models\Journal', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function organisations()
    {
        return $this->hasMany('App\Models\Organisation', 'location_id', 'id');
    }

    /**
     * Get all characters in the location and descendants
     */
    public function allOrganisations()
    {
        $locationIds = [$this->id];
        foreach ($this->descendants as $descendant) {
            $locationIds[] = $descendant->id;
        };

        return Organisation::whereIn('location_id', $locationIds)->with('location');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mapPoints()
    {
        return $this->hasMany('App\Models\MapPoint', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function quests()
    {
        return $this->belongsToMany('App\Models\Quest', 'quest_locations')
            ->using('App\Models\Pivots\QuestLocation')
            ->withPivot('role', 'is_private');
    }

    /**
     * @return mixed
     */
    public function relatedQuests()
    {
        $query = $this->quests()
            ->orderBy('name', 'ASC')
            ->with(['characters', 'locations', 'quests']);

        if (!auth()->check() || !auth()->user()->isAdmin()) {
            $query->where('quest_locations.is_private', false);
        }

        return $query;
    }

    /**
     * Specify parent id attribute mutator
     * @param $value
     */
    public function setParentLocationIdAttribute($value)
    {
        $this->setParentIdAttribute($value);
    }

    /**
     * Detach children when moving this entity from one campaign to another
     */
    public function detach()
    {
        foreach ($this->characters as $child) {
            $child->location_id = null;
            $child->save();
        }

        foreach ($this->locations as $child) {
            $child->parent_location_id = null;
            $child->save();
        }

        foreach ($this->organisations as $child) {
            $child->location_id = null;
            $child->save();
        }

        foreach ($this->families as $child) {
            $child->location_id = null;
            $child->save();
        }

        foreach ($this->items as $child) {
            $child->location_id = null;
            $child->save();
        }

        // Remove all the map points as they wouldn't make any sense in the new campaign
        foreach ($this->mapPoints as $child) {
            $child->delete();
        }

        return parent::detach();
    }

    /**
     * Quick check to see if the image might be an svg
     * @return bool
     */
    public function isMapSvg()
    {
        return (substr(strtolower($this->map), -4) == '.svg');
    }

    /**
     * @return array
     */
    public function menuItems($items = [])
    {
        $campaign = CampaignLocalization::getCampaign();

        if (!empty($this->map)) {
            if (!$this->is_map_private || (auth()->check() && auth()->user()->can('map', $this))) {
                $items['map'] = [
                    'name' => 'locations.show.tabs.map',
                    'route' => 'locations.map',
                ];
            }
        }

        $count = $this->descendants()->has('location')->count();
        if ($count > 0) {
            $items['locations'] = [
                'name' => 'locations.show.tabs.locations',
                'route' => 'locations.locations',
                'count' => $count
            ];
        }
        $count = $this->allCharacters()->count();
        if ($campaign->enabled('characters') && $count > 0) {
            $items['characters'] = [
                'name' => 'locations.show.tabs.characters',
                'route' => 'locations.characters',
                'count' => $count
            ];
        }
        $count = $this->events()->count();
        if ($campaign->enabled('events') && $count > 0) {
            $items['events'] = [
                'name' => 'locations.show.tabs.events',
                'route' => 'locations.events',
                'count' => $count
            ];
        }
        $count = $this->items()->count();
        if ($campaign->enabled('items') && $count > 0) {
            $items['items'] = [
                'name' => 'locations.show.tabs.items',
                'route' => 'locations.items',
                'count' => $count
            ];
        }
        $count = $this->organisations()->count();
        if ($campaign->enabled('organisations') && $count > 0) {
            $items['organisations'] = [
                'name' => 'locations.show.tabs.organisations',
                'route' => 'locations.organisations',
                'count' => $count
            ];
        }
        $count = $this->relatedQuests()->with('quest')->count();
        if ($campaign->enabled('quests') && $count > 0) {
            $items['quests'] = [
                'name' => 'locations.show.tabs.quests',
                'route' => 'locations.quests',
                'count' => $count
            ];
        }
        $count = $this->journals()->count();
        if ($campaign->enabled('journals') && $count > 0) {
            $items['journals'] = [
                'name' => 'locations.show.tabs.journals',
                'route' => 'locations.journals',
                'count' => $count
            ];
        }
        return parent::menuItems($items);
    }

    /**
     * @return array
     */
    public function legend()
    {
        $sortedPoints = [];
        /** @var MapPoint $point */
        $points = $this->mapPoints()->with(['targetEntity', 'location'])->get();
        foreach ($points as $point) {
            if ($point->visible()) {
                $sortedPoints[] = $point;
            }
        }
        usort($sortedPoints, function($a, $b) {
            return strcmp($a->label(), $b->label());
        });
        return $sortedPoints;
    }

    /**
     * Get the entity_type id from the entity_types table
     * @return int
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.location');
    }
}
