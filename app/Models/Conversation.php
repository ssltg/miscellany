<?php

namespace App\Models;

use App\Traits\CampaignTrait;
use App\Traits\ExportableTrait;
use App\Traits\VisibleTrait;
use Illuminate\Database\Eloquent\Model;

class Conversation extends MiscModel
{
    //
    protected $fillable = [
        'name',
        'image',
        'slug',
        'type',
        'campaign_id',
        'target',
        'is_private',
    ];

    const TARGET_USERS = 'users';
    const TARGET_CHARACTERS = 'characters';

    /**
     * Entity type
     * @var string
     */
    protected $entityType = 'conversation';

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns  = ['name'];

    /**
     * Fields that can be filtered on
     * @var array
     */
    protected $filterableColumns = [
        'name',
        'type',
        'target',
        'tag_id',
        'is_private',
    ];

    /**
     * Fields that can be sorted on
     * @var array
     */
    protected $sortableColumns = [
        'target',
        'colour',
    ];

    /**
     * Set to false if this entity type doesn't have relations
     * @var bool
     */
    public $hasRelations = false;

    /**
     * Traits
     */
    use CampaignTrait, VisibleTrait, ExportableTrait;

    /**
     * Field used for tooltips
     * @var string
     */
    protected $tooltipField = 'name';

    /**
     * Foreign relations to add to export
     * @var array
     */
    protected $foreignExport = [
        'participants', 'messages'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\ConversationMessage', 'conversation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participants()
    {
        return $this->hasMany('App\Models\ConversationParticipant', 'conversation_id');
    }

    /**
     * Get a list of participants
     * @return array
     */
    public function participantsList($withNames = true)
    {
        $participants = [];
        foreach ($this->participants as $participant) {
            if (auth()->user()->can('update', $participant->character)) {
                $participants[$participant->id()] = $participant->name();
            }
        }


        if (!$withNames) {
            return array_keys($participants);
        }
        return $participants;
    }

    /**
     * Get the entity_type id from the entity_types table
     * @return int
     */
    public function entityTypeId(): int
    {
        return (int) config('entities.ids.conversation');
    }

    /**
     * @return mixed
     */
    public function entry()
    {
        return '';
    }
}
