<?php $campaign = CampaignLocalization::getCampaign(); ?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109130951-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109130951-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta property="og:title" content="{{ $title ?? '' }} - {{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />
@yield('og')
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link rel="icon" type="image/png" href="/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    @if (auth()->check() && !empty(auth()->user()->theme))
        <link href="{{ mix('css/' . auth()->user()->theme . '.css') }}" rel="stylesheet">
    @endif
</head>
{{-- Hide the sidebar if the there is no current campaign --}}
<body class="skin-black sidebar-mini @if (!empty($campaign) || (auth()->check() && auth()->user()->hasCampaigns())) @else layout-top-nav @endif">
    <div id="app" class="wrapper">
        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        @yield('fullpage-form')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @if (!isset($breadcrumbs) || $breadcrumbs !== false)
                <ol class="breadcrumb">
                    @if ($campaign)
                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-globe"></i> {{ $campaign->name }}</a></li>
                    @else
                        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ trans('dashboard.title') }}</a></li>
                    @endif
                    @if (isset($breadcrumbs))
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li>
                                @if (!empty($breadcrumb['url']))
                                    <a href="{{ $breadcrumb['url'] }}" title="{{ $breadcrumb['label'] }}">
                                        @if (strlen($breadcrumb['label']) > 22)
                                            {{ substr($breadcrumb['label'], 0, 20) . '...' }}
                                        @else
                                            {{ $breadcrumb['label'] }}
                                        @endif
                                    </a>
                                @else
                                    @if (strlen($breadcrumb) > 22)
                                        <span title="{{ $breadcrumb }}">{{ substr($breadcrumb, 0, 20) . '...' }}</span>
                                    @else
                                        {{ $breadcrumb }}
                                    @endif
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ol>
                @endif
                <h1>
                    @yield('header-extra')
                    {{ $title ?? "Page Title" }}
                    <small class="hidden-xs hidden-sm">{{ $description ?? null }}</small>
                    @if (!empty($headerExtra))
                        {!! $headerExtra !!}
                    @endif
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @if (auth()->check() && \App\Facades\Identity::isImpersonating())
                    <div class="alert alert-warning">
                        <h4>
                            <i class="icon fa fa-exclamation-triangle"></i>
                            {{ __('campaigns.members.impersonating.title', ['name' => auth()->user()->name]) }}
                        </h4>
                        <p>{{ __('campaigns.members.impersonating.message') }}</p>
                    </div>
                @endif
                @include('partials.success')
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @yield('fullpage-form-end')

        <!-- Footer -->
        @include('layouts.footer')

    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ trans('crud.delete_modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p id="delete-confirm-text">
                        {!! trans('crud.delete_modal.description', ['tag' => '<b><span id="delete-confirm-name"></span></b>']) !!}
                    </p>
                    <div id="delete-confirm-mirror" class="form-group" style="display: none">
                        <label>
                            <input type="checkbox" id="delete-confirm-mirror-chexkbox" name="delete-mirror">
                            {{ __('crud.delete_modal.mirrored') }}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('crud.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="delete-confirm-submit"><span class="fa fa-trash"></span> {{ trans('crud.delete_modal.delete') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="click-confirm" tabindex="-1" role="dialog" aria-labelledby="clickConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.click_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="clickModalLabel">{{ trans('crud.click_modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p id="click-confirm-text"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('crud.delete_modal.close') }}</button>
                    <a href="" type="button" class="btn btn-danger" id="click-confirm-url">{{ trans('crud.click_modal.confirm') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- new foreign model -->
    <div class="modal fade" id="new-entity-modal" tabindex="-1" role="dialog" aria-labelledby="newEntityModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.click_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="newEntityModalLabel">{{ trans('crud.new_entity.title') }}</h4>
                </div>
                {!! Form::open(['url' => route('entities.create'), 'method' => 'POST', 'id' => 'new-entity-form']) !!}
                <div class="modal-body">
                    <div class="form-group required">
                        <label>{{ trans('crud.new_entity.fields.name') }}</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'new-entity-name']) !!}
                    </div>
                    <p class="text-red" id="new-entity-errors" style="display:none">{{ trans('crud.new_entity.error') }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="new-entity-save" data-text="{{ trans('crud.save') }}">{{ trans('crud.save') }}</button>
                </div>
                {{ csrf_field() }}
                {!! Form::hidden('target', null, ['id' => 'new-entity-type']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-- Standard Sized Modal -->
    <div class="modal fade" id="entity-modal" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content"></div>
        </div>
    </div>

    <!-- Large Sized Modal -->
    <div class="modal fade" id="large-modal" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"></div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="/js/select2/i18n/{{ LaravelLocalization::getCurrentLocale() == 'en-US' ? 'en' : LaravelLocalization::getCurrentLocale() }}.js" defer></script>
    @yield('scripts')
</body>
</html>
