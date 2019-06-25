<?php
/**
 * @var \App\Models\Organisation $model
 * @var \App\Models\OrganisationMember $relation
 */
$filters = [];
if (request()->has('organisation_id')) {
    $filters['organisation_id'] = request()->get('organisation_id');
}
$hasOrg = request()->has('organisation_id');
?>
<div class="box box-flat">
    <div class="box-body">
        <h2 class="page-header with-border">
            {{ __('organisations.fields.members') }}
        </h2>

        <p class="help-block">
            @if ($hasOrg)
                <a href="{{ route('organisations.members', $model) }}" class="btn btn-default btn-sm pull-right">
                    <i class="fa fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->allMembers()->has('character')->count() }})
                </a>
            @else
                <a href="{{ route('organisations.members', [$model, 'organisation_id' => $model->id]) }}" class="btn btn-default btn-sm pull-right">
                    <i class="fa fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->members()->has('character')->count() }})
                </a>
            @endif
            {{ __('organisations.members.helpers.members') }}
        </p>

        <table id="organisation-characters" class="table table-hover">
            <tbody><tr>
                <th class="avatar"><br></th>
                <th>{{ __('characters.fields.name') }}</th>
                @if ($campaign->enabled('locations'))
                <th class="hidden-sm hidden-xs">{{ __('characters.fields.location') }}</th>
                @endif
                @if (!$hasOrg)<th>{{ __('organisations.members.fields.organisation') }}</th>@endif
                <th>{{ __('organisations.members.fields.role') }}</th>
                @if ($campaign->enabled('races'))
                <th class="hidden-sm hidden-xs">{{ __('characters.fields.race') }}</th>
                @endif
                <th>{{ __('characters.fields.is_dead') }}</th>
                <th></th>
                <th class="text-right">
                    @can('member', $model)
                        <a href="{{ route('organisations.organisation_members.create', ['organisation' => $model->id]) }}" class="btn btn-primary btn-sm"
                           data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('organisations.organisation_members.create', $model->id) }}">
                            <i class="fa fa-plus"></i> <span class="hidden-sm hidden-xs">{{ __('organisations.members.actions.add') }}</span>
                        </a>
                    @endcan
                </th>
            </tr>
            <?php $r = $model->allMembers()
                ->filter($filters)
                ->has('character')
                ->with([
                    'character', 'character.race', 'character.location', 'character.family', 'organisation',
                    'character.entity', 'character.entity.tags'
                ])
                ->paginate();?>
            @foreach ($r->sortBy('character.name') as $relation)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $relation->character->getImageUrl(true) }}');" title="{{ $relation->character->name }}" href="{{ route('characters.show', $relation->character->id) }}"></a>
                    </td>
                    <td>
                        <a href="{{ route('characters.show', $relation->character->id) }}" data-toggle="tooltip" title="{{ $relation->character->tooltipWithName() }}" data-html="true">
                            {{ $relation->character->name }}
                        </a>
                    </td>
                    @if ($campaign->enabled('locations'))
                    <td class="hidden-sm hidden-xs">
                        @if ($relation->character->location)
                            <a href="{{ route('locations.show', $relation->character->location_id) }}" data-toggle="tooltip" title="{{ $relation->character->location->tooltipWithName() }}" data-html="true">{{ $relation->character->location->name }}</a>
                        @endif
                    </td>
                    @endif
                    @if (!$hasOrg)
                    <td>
                        <a href="{{ $relation->organisation->getLink() }}" data-toggle="tooltip" title="{{ $relation->organisation->tooltipWithName() }}" data-html="true">
                            {{ $relation->organisation->name}}
                        </a>
                    </td>
                    @endif
                    <td>{{ $relation->role }}</td>
                    @if ($campaign->enabled('races'))
                        <td class="hidden-sm hidden-xs">
                            @if ($relation->character->race)
                                <a href="{{ route('races.show', $relation->character->race_id) }}" data-toggle="tooltip" title="{{ $relation->character->race->tooltipWithName() }}" data-html="true">{{ $relation->character->race->name }}</a>
                            @endif
                        </td>
                    @endif
                    <td>@if ($relation->character->is_dead)<span class="ra ra-skull"></span>@endif</td>
                    <td>
                        @if (Auth::check() && Auth::user()->isAdmin())
                            @if ($relation->is_private == true)
                                <i class="fas fa-lock" title="{{ __('crud.is_private') }}"></i>
                            @endif
                        @endif
                    </td>
                    <td class="text-right">
                        @can('member', $model)
                            <a href="{{ route('organisations.organisation_members.edit', ['organisation' => $model, 'organisationMember' => $relation]) }}"
                               class="btn btn-xs btn-primary" data-toggle="ajax-modal" data-target="#entity-modal" 
                               data-url="{{ route('organisations.organisation_members.edit', ['organisation' => $model, 'organisationMember' => $relation]) }}"
                               title=" {{ __('crud.edit') }}"
                            >
                                <i class="fa fa-edit"></i>
                            </a>

                            <button class="btn btn-xs btn-danger delete-confirm" data-toggle="modal" data-name="{{ $relation->character->name }}"
                                    data-target="#delete-confirm" data-delete-target="delete-form-{{ $relation->id }}"
                                    title="{{ __('crud.remove') }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['organisations.organisation_members.destroy', $model->id, $relation->id], 'style' => 'display:inline', 'id' => 'delete-form-' . $relation->id]) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $r->fragment('tab_member')->links() }}
    </div>
</div>