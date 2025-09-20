@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner pt-185 pb-190"
        style="background: url({{ $banner->getFirstMediaUrl('banner_image') }}) bottom center no-repeat;     background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-11">
                    <div class="banner-txt">
                        <h3 class="banner-subtitle mt--9 mb-10">{{ $banner->title }}</h3>
                        <h1 class="banner-title mb-20 cd-headline push">
                            {!! $banner->excerpt !!}
                        </h1>
                        <p class="banner-paragraph mb-11" style="max-width:500px;">
                            {!! $banner->content !!}
                        </p>
                        <div class="btn-box sm-padd-btn pt-35">
                            <a href="contact" class="def-btn btn-1">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->


    @include('website.pages.component.feature')

    @include('website.pages.component.about')

    @include('website.pages.component.service')


    @include('website.pages.component.destination')


    @include('website.pages.component.team')




    @include('website.pages.component.testimonial')


    @include('website.pages.component.blog')

    @include('website.pages.component.partner')
@endsection
