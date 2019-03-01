<div class="row">
    <div class="col-md-2">
        @include('locations._menu')
    </div>

    <div class="col-md-10">
        <div class="box box-flat">
            <div class="box-body">
                <h2 class="page-header with-border">
                    {{ trans('crud.panels.entry') }}
                </h2>
                <p>{!! $model->entry !!}</p>
            </div>
        </div>
        <!-- actions -->
        @include('cruds.boxes.history')
    </div>
</div>

@if (isset($exporting))
    @include('locations.panels.locations')
    @if ($campaign->enabled('characters'))
        @include('locations.panels.characters')
    @endif
    @if ($campaign->enabled('events'))
        @include('locations.panels.events')
    @endif
    @if ($campaign->enabled('items'))
        @include('locations.panels.items')
    @endif
@endif