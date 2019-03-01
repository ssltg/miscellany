@if (!isset($relations))
    <li class="{{ (!empty($active) && $active == 'relations' ? ' active' : '') }}">
        <a href="{{ route($name . '.relations.index', $model) }}" title="{{ trans('crud.tabs.relations') }}">
            <span class="label label-default pull-right">{{$model->entity->relationships()->count() }}</span>
            {{ trans('crud.tabs.relations') }}
        </a>
    </li>
@endif

@if (!isset($calendars) && $campaign->enabled('calendars'))
    <li class="{{ (!empty($active) && $active == 'calendars' ? ' active' : '') }}">
        <a href="{{ route($name . '.reminders', $model) }}" title="{{ trans('crud.tabs.calendars') }}">
            <span class="label label-default pull-right">{{$model->entity->events()->count() }}</span>
            {{ trans('crud.tabs.calendars') }}
        </a>
    </li>
@endif

<li class="{{ (!empty($active) && $active == 'notes' ? ' active' : '') }}">
    <a href="{{ route($name . '.notes', $model) }}" title="{{ trans('crud.tabs.notes') }}">
        <span class="label label-default pull-right">{{$model->entity->notes()->count() }}</span>
        {{ trans('crud.tabs.notes') }}
    </a>
</li>

<li class="{{ (!empty($active) && $active == 'attribute' ? ' active' : '') }}">
    <a href="{{ route($name . '.attributes', $model) }}" title="{{ trans('crud.tabs.attributes') }}">
        <span class="label label-default pull-right">{{$model->entity->attributes()->count() }}</span>
        {{ trans('crud.tabs.attributes') }}
    </a>
</li>