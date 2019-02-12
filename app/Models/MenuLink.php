<?php

namespace App\Models;

use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use App\Traits\VisibleTrait;
use Illuminate\Support\Facades\Route;

/**
 * Class MenuLink
 * @package App\Models
 *
 * @property integer $campaign_id
 * @property string $name
 * @property string $tab
 * @property string $menu
 * @property string $type
 * @property string $filters
 * @property Entity $target
 * @property boolean $is_private
 */
class MenuLink extends MiscModel
{
    /**
     * @var string
     */
    public $table = 'menu_links';

    /**
     * @var array
     */
    protected $fillable = [
        'campaign_id',
        'entity_id',
        'name',
        'icon',
        'tab',
        'filters',
        'is_private',
        'menu',
        'type',
    ];

    /**
     *
     */
    use VisibleTrait;
    use CampaignTrait;

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns  = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign', 'campaign_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function target()
    {
        return $this->belongsTo('App\Models\Entity', 'entity_id');
    }

    /**
     * @return array
     */
    public function getRouteParams()
    {
        $parameters = [
            $this->target->child,
        ];

        if (!empty($this->tab)) {
            $prefix = 'tab_';
            // remove tab_ from the beginning of the string, if it's present
            $tab = '#tab_' . trim((substr($this->tab, 0, strlen($prefix)) == $prefix ?
                    substr($this->tab, strlen($prefix)) : $this->tab), '#');
            $parameters[] = $tab;
        }
        return $parameters;
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return !empty($this->entity_id) ? $this->getEntityRoute() : $this->getIndexRoute();
    }

    /**
     * @return string
     */
    protected function getEntityRoute()
    {
        $route = $this->target->pluralType() . '.show';
        if (!empty($this->menu)) {
            $menuRoute = $this->target->pluralType() . '.' . $this->menu;
            if (Route::has($menuRoute)) {
                $route = $menuRoute;
            }
        }
        return route($route, $this->getRouteParams());
    }

    /**
     * @return string
     */
    protected function getIndexRoute()
    {
        return route(str_plural($this->type) . '.index', $this->filters);
    }

    /**
     * Override the get link
     * @param string $route
     * @return string
     */
    public function getLink($route = 'show')
    {
        return route('menu_links.' . $route, $this->id);
    }
}
