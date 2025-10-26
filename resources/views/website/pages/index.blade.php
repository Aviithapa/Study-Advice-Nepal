@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner"
        style="background: url({{ $banner->getFirstMediaUrl('banner_image') }}) center center no-repeat;
            background-size: cover;
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-11">
                    <div class="banner-txt">
                        <!-- Your text here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner end -->


    @include('website.pages.component.feature')

    @include('website.pages.component.destination')

    {{-- @include('website.pages.component.service') --}}

    @include('website.pages.component.about')






    {{-- @include('website.pages.component.team') --}}




    {{-- @include('website.pages.component.testimonial') --}}


    @include('website.pages.component.blog')

    @include('website.pages.component.partner')
@endsection
