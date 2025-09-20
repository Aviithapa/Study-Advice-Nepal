@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner breadcrumb-banner pt-190 pb-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-txt">
                        <h1 class="breadcrumb-title">Destination - {{ $destination->title }}</h1>
                        <div class="breadcrumb-txt">
                            <a href="/">Home</a>
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>{{ $destination->title }}</span>
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
                                <div class="single-blog-info d-flex flex-wrap align-items-center">
                                    {{-- <span class="d-flex align-items-center lh-0 mb-20"><span class="fz-14 mr-10"><i
                                                class="icofont-calendar"></i></span>27 December 2020</span>
                                    <span class="d-flex align-items-center lh-0 mb-20"><a href="#"><span
                                                class="fz-14 mr-10"><i
                                                    class="icofont-user-alt-7"></i></span>Kinter</a></span>
                                    <span class="d-flex align-items-center lh-0 mb-20"><span class="fz-14 mr-10"><i
                                                class="icofont-speech-comments"></i></span>24 Comments</span> --}}
                                </div>
                                <h3 class="blog-page-blog-single-title mb-20">{{ $destination->title }}</h3>

                                {!! $destination->content !!}

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- counter end -->
@endsection
