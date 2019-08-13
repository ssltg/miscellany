<?php

namespace App\Observers;

use App\Models\Character;
use App\Models\CharacterTrait;
use App\Models\MiscModel;
use App\Models\OrganisationMember;
use Illuminate\Support\Collection;

class CharacterObserver extends MiscObserver
{
    /**
     * @param MiscModel $model
     */
    public function crudSaved(MiscModel $model)
    {
        parent::crudSaved($model);
        $this->saveTraits($model, 'personality');
        $this->saveTraits($model, 'appearance');
        $this->saveOrganisations($model);
    }

    /**
     * @param MiscModel $model
     */
    protected function saveTraits(MiscModel $character, $trait = 'personality')
    {
        // Users who can edit the character but can't access personality traits shouldn't be allowed to
        // change those traitrs.
        if ($trait == 'personality' && !auth()->user()->can('personality', $character)) {
            return;
        }

        $existing = [];
        foreach ($character->characterTraits()->{$trait}()->get() as $pers) {
            $existing[$pers->id] = $pers;
        }

        $traitCount = $traitOrder = 0;
        $traitNames = request()->post($trait . '_name', []);
        $traitEntry = request()->post($trait . '_entry', []);

        foreach ($traitNames as $id => $name) {
            if (empty($name)) {
                continue;
            }

            if (!empty($existing[$id])) {
                $model = $existing[$id];
                unset($existing[$id]);
            } else {
                $model = new CharacterTrait();
                $model->character_id = $character->id;
                $model->section = $trait;
            }
            $model->name = $name;
            $model->entry = $traitEntry[$id];
            $model->default_order = $traitOrder;
            $model->save();
            $traitCount++;
            $traitOrder++;
        }

        foreach ($existing as $id => $model) {
            $model->delete();
        }
    }

    /**
     * Save a character's organisations
     * @param MiscModel $character
     * @throws \Exception
     */
    protected function saveOrganisations(MiscModel $character)
    {
        /** @var OrganisationMember $org */
        $existing = [];
        foreach ($character->organisations as $org) {
            $existing[$org->id] = $org;
        }

        $orgCount = 0;
        $organisations = request()->post('organisations', []);
        $roles = new Collection(request()->post('organisation_roles', []));

        foreach ($organisations as $id) {
            if (empty($id)) {
                continue;
            }

            if (!empty($existing[$id])) {
                $model = $existing[$id];
                unset($existing[$id]);
            } else {
                $model = new OrganisationMember();
                $model->character_id = $character->id;
            }
            $model->organisation_id = $id;
            $model->role = $roles->shift();
            $model->is_private = false;
            if ($model->save()) {
                $orgCount++;
            }
        }

        foreach ($existing as $id => $model) {
            $model->delete();
        }
    }
}
