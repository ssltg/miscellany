@extends('layouts.front', [
    'menus' => [
        'features',
        'contact'
    ]
])
@section('content')
    @include('front.master')

    <section class="download bg-primary text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">{{ trans('front.first_block.title') }}</h2>
                    <p>{{ trans('front.first_block.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>{{ trans('front.features.title') }}</h2>
                <p class="text-muted">{{ trans('front.features.description') }}</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="/images/front/home-image.png" class="img-fluid" alt="{{ config('app.name') }} dashboard">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-layers text-primary"></i>
                                    <h3>{{ trans('front.features.layers.title') }}</h3>
                                    <p class="text-muted">{{ trans('front.features.layers.description') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-notebook text-primary"></i>
                                    <h3>{{ trans('front.features.notebook.title') }}</h3>
                                    <p class="text-muted">{{ trans('front.features.notebook.description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-present text-primary"></i>
                                    <h3>{{ trans('front.features.free.title') }}</h3>
                                    <p class="text-muted">{{ trans('front.features.free.description') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-people text-primary"></i>
                                    <h3>{{ trans('front.features.collaborative.title') }}</h3>
                                    <p class="text-muted">{{ trans('front.features.collaborative.description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h4>
                    <a href="{{ route('features') }}">{{ trans('front.features.learn_more') }}</a>
                </h4>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>{!! trans('front.second_block.title') !!}</h2>
                <a href="{{ route('register') }}" class="btn btn-outline btn-xl js-scroll-trigger">
                    {{ trans('front.second_block.call_to_action') }}
                </a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
        <div class="container">
            <h2>{!! trans('front.contact.title', ['icon' => '<i class="fa fa-heart"></i>']) !!}</h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-google-plus">
                    <a href="{{config('services.reddit.account.url')}}" title="Reddit" rel="noreferrer" target="_blank">
                        <i class="fab fa-reddit"></i>
                    </a>
                </li>
                <li class="list-inline-item social-twitter">
                    <a href="{{config('services.twitter.account.url')}}" title="Twitter" rel="noreferrer" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item social-facebook">
                    <a href="{{config('services.facebook.account.url')}}" title="Facebook" rel="noreferrer" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item social-discord">
                    <a href="{{ config('discord.url') }}" title="Discord">
                        <img src="/images/thirdparty/discord-logo-white.png" alt="Discord" rel="noreferrer" target="_blank">
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection