<?php /** @var \App\Models\Family $model */?>
<div class="box box-solid">
    <div class="box-body">
        <h2 class="page-header with-border">
            {{ trans('families.show.tabs.members') }}
        </h2>

        <p class="help-block">{{ trans('families.members.helpers.direct_members') }}</p>

        <table id="family-characters" class="table table-hover">
            <thead><tr>
                <th class="avatar"><br></th>
                <th>{{ trans('characters.fields.name') }}</th>
                @if ($campaign->enabled('locations'))
                <th>{{ trans('characters.fields.location') }}</th>
                @endif
                <th>{{ trans('characters.fields.age') }}</th>
                @if ($campaign->enabled('races'))
                <th>{{ trans('characters.fields.race') }}</th>
                @endif
                <th>{{ trans('characters.fields.sex') }}</th>
                <th>{{ trans('characters.fields.is_dead') }}</th>
            </tr></thead>
            <tbody>
            <?php $r = $model->members()->with(['race', 'location'])->paginate();?>
            @foreach ($r->sortBy('character.name') as $member)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $member->getImageUrl(true) }}');" title="{{ $member->name }}" href="{{ route('characters.show', $member->id) }}"></a>
                    </td>
                    <td>
                        {!! $member->tooltipedLink() !!}
                    </td>
                    @if ($campaign->enabled('locations'))
                    <td>
                        @if ($member->location)
                            {!! $member->location->tooltipedLink() !!}
                        @endif
                    </td>
                    @endif
                    <td>{{ $member->age }}</td>
                    @if ($campaign->enabled('races'))
                        <td>
                            @if ($member->race)
                                {!! $member->race->tooltipedLink() !!}
                            @endif
                        </td>
                    @endif
                    <td>{{ $member->sex }}</td>
                    <td>@if ($member->is_dead)<span class="ra ra-skull"></span>@endif</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $r->links() }}
    </div>
</div>