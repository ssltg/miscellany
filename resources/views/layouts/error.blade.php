<!doctype html>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ trans('front.meta.description') }}">
    <meta name="author" content="{{ config('app.name') }}">

    <meta property="og:title" content="{{ $title ?? __('front.meta.title') }} - {{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />

    <title>{{ $error }} - {{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="icon" type="image/png" href="/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top">
<!-- Custom styles for this template -->
<link href="/css/front/new-age.min.css" rel="stylesheet">
<link href="{{ mix('css/front.css') }}" rel="stylesheet">
<noscript id="deferred-styles">
</noscript>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            {{ trans('front.menu.title') }}
            <i class="fa fa-bars"></i>
        </button>
    </div>
</nav>

<header class="masthead reduced-masthead" id="about">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5" id="{{ $error }}">{{ trans('errors.' . $error . '.title') }}</h1>
                    @if (is_array(trans('errors.' . $error . '.body')))
                        @foreach (trans('errors.' . $error . '.body') as $text)
                            <p class="mb-5">{{ $text }}</p>
                        @endforeach
                    @else
                    <p class="mb-5">{{ trans('errors.' . $error . '.body') }}</p>
                    @endif

                    <p>{!! trans('errors.footer', ['discord' => link_to(config('discord.url'), 'Discord')]) !!}</p>

                    <p><a href="/">{{ __('dashboard.setup.actions.back_to_dashboard') }}</a>.</p>
                </div>
            </div>
            <div class="col-lg-3 my-auto text-right">
                @if (!Auth::check())
                    <p>
                        <a href="/login" class="btn btn-outline btn-xl">{{ __('front.menu.login') }}</a>
                    </p>
                    <p>
                        <a href="/register" class="btn btn-outline btn-xl">{{ __('front.menu.register') }}</a>
                    </p>
                @endif

                    <p>
                        <a href="/" class="btn btn-outline btn-xl">{{ __('front.menu.home') }}</a>
                    </p>
            </div>
        </div>
    </div>
</header>
@yield('content')


<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendor/jquery-easing/jquery.easing.min.js" async></script>

<!-- Custom scripts for this template -->
<script src="/js/front/new-age.min.js" async></script>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Lato', 'Catamaran:100,200,300,400,500,600,700,800,900', 'Muli']
        }
    });
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#0E2231"
                },
                "button": {
                    "background": "#2e8893"
                }
            },
            "theme": "classic",
            "content": {
                "message": "{{ trans('front.cookie.message') }}",
                "dismiss": "{{ trans('front.cookie.dismiss') }}",
                "link": "{{ trans('front.cookie.link') }}"
            }
        })});
</script>
</body>
</html>
