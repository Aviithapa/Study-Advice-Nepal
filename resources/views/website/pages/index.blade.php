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
                        <p class="banner-paragraph mb-11">
                            {!! $banner->content !!}
                        </p>
                        <div class="btn-box sm-padd-btn pt-35">
                            <a href="contact.html" class="def-btn btn-2">admission now</a>
                            <a href="class.html" class="def-btn btn-3">Our Classes</a>
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


    <!-- counter begin -->
    <div class="counter pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-heading text-center mb-70">
                        <h2 class="section-title text-white mt--8 mb-25">Unique learning Environment</h2>
                        <p class="heading-sub-txt text-white mt--1 mb--8">Here is what you can expect from a house cleaning
                            from a Handy professional. Download the app to share further cleaning details and instructions!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-img mb--60">
                            <img src="assets/images/counter-icon-1.png" class="filter-shadow-1" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-20" data-count="2500">0</h2>
                            <p class="counter-sub-txt mt--1 mb--8">Students Enrolled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center pt-120">
                        <div class="counter-img mb--60">
                            <img src="assets/images/counter-icon-2.png" class="filter-shadow-3" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-20" data-count="912">0</h2>
                            <p class="counter-sub-txt mt--1 mb--8">Best Awards Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-img mb--60">
                            <img src="assets/images/counter-icon-3.png" class="filter-shadow-2" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-20" data-count="370">0</h2>
                            <p class="counter-sub-txt mt--1 mb--8">Classes Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center pt-120">
                        <div class="counter-img mb--60">
                            <img src="assets/images/counter-icon-4.png" class="filter-shadow-4" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-20" data-count="648">0</h2>
                            <p class="counter-sub-txt mt--1 mb--8">Our Total Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->

    @include('website.pages.component.team')


    @include('website.pages.component.destination')



    <!-- gallery begin -->
    <div class="gallery p-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-heading text-center mb-70">
                        <h2 class="section-title mt--8 mb-25">Our School Gallery</h2>
                        <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a
                            Handy professional. <br>Download the app to share further cleaning details and instructions!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="control-panel d-flex justify-content-center mb-50 mt--1">
                        <div class="controls d-inline-flex" id="controls">
                            <button class="gallery-filter-btn active color-4 mr-20 pb-17" data-filter="*">Show
                                all</button>
                            <button class="gallery-filter-btn color-5 mx-20 pb-17" data-filter=".painting">Painting</button>
                            <button class="gallery-filter-btn color-6 mx-20 pb-17" data-filter=".study">Study</button>
                            <button class="gallery-filter-btn color-7 mx-20 pb-17"
                                data-filter=".photography">Photography</button>
                            <button class="gallery-filter-btn color-8 ml-20 pb-17" data-filter=".writing">Writing</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 gallery-images">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Tiny Treasures</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-2.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-2.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Kiddle Place</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-3.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-3.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Toys And Tots </a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-4.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-4.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Perfect Playtime </a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-5.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-5.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Cuddles n’ Chuckles</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-6.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-6.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Cuddles n’ Chuckles</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image study">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_7.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_7.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Enjoy Freely</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting ">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_8.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_8.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Confident Kid</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography ">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_9.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_9.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Globe Info</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_10.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_10.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Writing Practice</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_11.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_11.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Search Something</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting study">
                    <div class="img w_100">
                        <img src="assets/images/gallery-img-1_12.jpg" alt="image">
                    </div>
                    <div
                        class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="assets/images/gallery-img-1_12.jpg">
                            <img src="assets/images/expand.png" alt="View">
                        </a>
                        <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Awesome Reading</a></h3>
                        <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="gallery-btn text-center mt-70" id="load-photos">
                        <button class="def-btn">View All Photos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->

    @include('website.pages.component.testimonial')


    <!-- blog begin -->
    <div class="latest-news pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-heading text-center mb-70">
                        <h2 class="section-title mt--9 mb-25">Our Latest News</h2>
                        <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a
                            Handy professional. Download the app to share further cleaning details and instructions!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card mb-40">
                        <div class="part-img w_100">
                            <a href="blog-details.html"><img src="assets/images/blog-img-1.jpg" alt="Image"></a>
                            <span class="lv-part-blog-calendar-date">
                                <i class="icofont-calendar"></i> 23.01.2022
                            </span>
                        </div>
                        <div class="blog-card-txt p-40 px-30">
                            <h3 class="blog-title mt--2 mb-20"><a href="blog-details.html">Funny lessons for kids...</a>
                            </h3>
                            <p class="mb--8">Comptely actuaze cent centric coloraton and shang without ainstalled base kid
                            </p>
                        </div>
                        <div class="blog-bottom-part px-30 d-flex justify-content-between align-items-center">
                            <span class="blog-single-stat py-20"><img src="assets/images/heart-icon.png" class="mr-10"
                                    alt="Heart">23 Like</span>
                            <span class="blog-single-stat py-20"><img src="assets/images/comment-icon.png" class="mr-10"
                                    alt="Comment">22 Comment</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card mb-40">
                        <div class="part-img w_100">
                            <a href="blog-details.html"><img src="assets/images/blog-img-2.jpg" alt="Image"></a>
                            <span class="lv-part-blog-calendar-date">
                                <i class="icofont-calendar"></i> 22.04.2020
                            </span>
                        </div>
                        <div class="blog-card-txt p-40 px-30">
                            <h3 class="blog-title mt--2 mb-20"><a href="blog-details.html">Growing Kids with edu...</a>
                            </h3>
                            <p class="mb--8">Comptely actuaze cent centric coloraton and shang without ainstalled base kid
                            </p>
                        </div>
                        <div class="blog-bottom-part px-30 d-flex justify-content-between align-items-center">
                            <span class="blog-single-stat py-20"><img src="assets/images/heart-icon.png" class="mr-10"
                                    alt="Heart">24 Like</span>
                            <span class="blog-single-stat py-20"><img src="assets/images/comment-icon.png" class="mr-10"
                                    alt="Comment">24 Comment</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card mb-40">
                        <div class="part-img w_100">
                            <a href="blog-details.html"><img src="assets/images/blog-img-3.jpg" alt="Image"></a>
                            <span class="lv-part-blog-calendar-date">
                                <i class="icofont-calendar"></i> 21.05.2022
                            </span>
                        </div>
                        <div class="blog-card-txt p-40 px-30">
                            <h3 class="blog-title mt--2 mb-20"><a href="blog-details.html">San without anta base...</a>
                            </h3>
                            <p class="mb--8">Comptely actuaze cent centric coloraton and shang without ainstalled base kid
                            </p>
                        </div>
                        <div class="blog-bottom-part px-30 d-flex justify-content-between align-items-center">
                            <span class="blog-single-stat py-20"><img src="assets/images/heart-icon.png" class="mr-10"
                                    alt="Heart">24 Like</span>
                            <span class="blog-single-stat py-20"><img src="assets/images/comment-icon.png" class="mr-10"
                                    alt="Comment">24 Comment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

    @include('website.pages.component.partner')
@endsection
