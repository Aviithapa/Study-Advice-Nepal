@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner breadcrumb-banner pt-190 pb-200"
        style="background: url({{ $serviceBanner->getFirstMediaUrl('post_image') }}) bottom center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-txt">
                        <h1 class="breadcrumb-title">Facility - {{ $facility->title }}</h1>
                        <div class="breadcrumb-txt">
                            <a href="/">Home</a>
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>{{ $facility->title }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- counter begin -->
    <div class="blog pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-content-wrapper mr-30">
                        <div class="single-blog mb-90">
                            <div class="single-blog-txt">
                                <h3 class="blog-page-blog-single-title mb-20">{{ $facility->title }}</h3>

                                {!! $facility->content !!}

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- counter end -->
@endsection
