@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner breadcrumb-banner pt-190 pb-200"
        style="background: url({{ $aboutBanner->getFirstMediaUrl('post_image') }}) bottom center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-txt">
                        <h1 class="breadcrumb-title">About</h1>
                        <div class="breadcrumb-txt">
                            <a href="/">Home</a>
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- feature begin -->
    <div class="feature pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-heading text-center mb-70">
                        <h2 class="section-title mt--8 mb-15">{{ $welcome->title }}</h2>
                        <p class="heading-sub-txt mt--1 mb--8">{!! $welcome->content !!}</p>
                    </div>
                </div>
            </div>
            <div class="row has-gradient-service">
                @foreach ($features as $feature)
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-card px-20 d-flex flex-column align-items-center mb-40">
                            <div
                                class="feature-icon bg-gradient-1 shadow-1 rounded-pill d-flex justify-content-center align-items-center mb-30">
                                <img src="{{ $feature->getFirstMediaUrl('feature_image') }}" alt="Icon">
                            </div>
                            <div class="feature-txt-2 text-center">
                                <h3 class="feature-sub-title mt--7"><a href="class-details.html">{{ $feature->title }}</a>
                                </h3>
                                <div class="divider bg-gradient-1 rounded-pill mx-auto mb-20"></div>
                                <p class="feature-txt-2 mt--6 mb--8">{{ $feature->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- feature end -->

    @include('website.pages.component.about')

    @include('website.pages.component.team')

    <!-- app download begin -->
    <div class="app-download-2 p-120"
        style="background: url({{ $joinUs->getFirstMediaUrl('post_image') }})  center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6 col-sm-8">
                    <h2 class="section-title mt--8 mb-25 text-white cd-headline rotate-1">
                        {{ $joinUs->title }}
                    </h2>
                    <p class="app-download-txt text-white mt--2 mb-50">{!! $joinUs->content !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- app download end -->

    @include('website.pages.component.partner')
@endsection
