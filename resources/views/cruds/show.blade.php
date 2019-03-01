<?php /** @var \App\Models\MiscModel $model */

// If the user activated nested views by default, go back to it.
$entityIndexRoute = route($name . '.index');
if (auth()->check() && auth()->user()->defaultNested) {
    if (\Illuminate\Support\Facades\Route::has($name . '.tree')) {
        $entityIndexRoute = route($name . '.tree');
    }
}
?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => trans($name . '.show.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => false
])
@inject('campaign', 'App\Services\CampaignService')

@section('og')
    <meta property="og:description" content="{{ $model->tooltip() ?: trans($name . '.show.title', ['name' => $model->name]) }}" />
    @if ($model->image)<meta property="og:image" content="{{ Storage::url($model->image)  }}" />@endif

    <meta property="og:url" content="{{ $model->getLink()  }}" />
@endsection

@section('entity-header')
    <div class="entity-header">

        <a class="parent" href="{{ $model->indexUrl() }}">{{ __('entities.' . $model->getEntityType(true)) }}</a> >
        <span class="entity">{{ $model->name }}</span>

        <div class="tags">
        @foreach ($model->entity->tags()->acl()->get() as $tag)
            <a href="{{ $tag->url() }}" class="tag">{{ $tag->name }}</a>
        @endforeach
        </div>

        <div class="actions">
            @if (config('entities.file_upload'))
                <div class="btn-group">
                    @can('update', $model)
                        <button type="button" class="btn btn btn-default" data-url="{{ route('entities.entity_files.index', $model->entity) }}" data-toggle="ajax-modal" data-target="#entity-modal" title="{{ __('crud.files.actions.manage') }}">
                            @else
                                <button type="button" class="btn btn btn-default">
                                    @endif
                                    <i class="fa fa-cloud-upload-alt"></i> <span class="hidden-xs">{{ trans('crud.fields.files') }}</span>
                                </button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $model->entity->files->count() }}
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach ($model->entity->files as $file)
                                        <li>
                                            <a href="{{ Storage::url($file->path) }}" target="_blank" class="entity-file">
                                                {{ $file->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if ($model->entity->files->count() == 0)
                                        <li>
                                            <a href="#">{{ __('crud.files.none') }}</a>
                                        </li>
                                    @endif
                                </ul>
                </div>
            @endif

            @can('permission', $model)
                <div class="btn-group">
                    <a href="{{ route('entities.permissions', $model->entity) }}" data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('entities.permissions', $model->entity) }}" class="btn btn-default">
                        <i class="fa fa-cog"></i> <span class="hidden-xs">{{ __('crud.tabs.permissions') }}</span>
                    </a>
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-{{ ($model->is_private ? 'lock' : 'unlock') }}" title="{{ trans('crud.is_private') }}"></i>
                    </button>
                </div>
            @endcan

            @include('cruds._actions_v2')
        </div>
        <div class="clearfix"></div>

    </div>
@endsection

@section('content')
    @include($name . '.show')

    @if ($model->entity)
    @admin
    <div class="panel panel-default hidden">
        <div class="panel-heading">
            <h4>Admin</h4>
        </div>
        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>Entity ID</dt>
                <dd>{{ $model->entity->id }}</dd>
                <dt>Entity Type</dt>
                <dd>{{ $model->entity->type }}</dd>
            </dl>
        </div>
    </div>
    @endadmin
    @endif
@endsection


@section('scripts')
    <script src="{{ mix('js/entity.js') }}" defer></script>
    <script src="{{ mix('js/jquery.fileupload.js') }}" defer></script>
    <script src="{{ mix('js/jquery.iframe-transport.js') }}" defer></script>
    <script src="{{ mix('js/vendor/jquery.ui.widget.js') }}" defer></script>
@endsection
