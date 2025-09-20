@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner breadcrumb-banner pt-190 pb-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-txt">
                        <h1 class="breadcrumb-title">About Kidba</h1>
                        <div class="breadcrumb-txt">
                            <a href="index.html">Home</a>
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
                        <h2 class="section-title mt--8 mb-15">Welcome to Our Kidba</h2>
                        <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a
                            Handy professional. Download the app to share further cleaning details and instructions!</p>
                    </div>
                </div>
            </div>
            <div class="row has-gradient-service">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-card px-20 d-flex flex-column align-items-center mb-40">
                        <div
                            class="feature-icon bg-gradient-1 shadow-1 rounded-pill d-flex justify-content-center align-items-center mb-30">
                            <img src="assets/images/feat-icon-8.png" alt="Icon">
                        </div>
                        <div class="feature-txt-2 text-center">
                            <h3 class="feature-sub-title mt--7"><a href="class-details.html">Active Learning</a></h3>
                            <div class="divider bg-gradient-1 rounded-pill mx-auto mb-20"></div>
                            <p class="feature-txt-2 mt--6 mb--8">Since have been visonary relable sofware engnern partne
                                have been and visionary</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-card px-20 d-flex flex-column align-items-center mb-40">
                        <div
                            class="feature-icon bg-gradient-2 shadow-2 rounded-pill d-flex justify-content-center align-items-center mb-30">
                            <img src="assets/images/feat-icon-10.png" alt="Icon">
                        </div>
                        <div class="feature-txt-2 text-center">
                            <h3 class="feature-sub-title mt--7"><a href="staff.html">Parents Day</a></h3>
                            <div class="divider bg-gradient-2 rounded-pill mx-auto mt--3 mb-20"></div>
                            <p class="feature-txt-2 mt--6 mb--8">Since have been visonary relable sofware engnern partne
                                have been and visionary</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-card px-20 d-flex flex-column align-items-center mb-40">
                        <div
                            class="feature-icon bg-gradient-3 shadow-3 rounded-pill d-flex justify-content-center align-items-center mb-30">
                            <img src="assets/images/feat-icon-9.png" alt="Icon">
                        </div>
                        <div class="feature-txt-2 text-center">
                            <h3 class="feature-sub-title mt--7"><a href="staff.html">Expert Teachers</a></h3>
                            <div class="divider bg-gradient-3 rounded-pill mx-auto mt--3 mb-20"></div>
                            <p class="feature-txt-2 mt--6 mb--8">Since have been visonary relable sofware engnern partne
                                have been and visionary</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature-card px-20 d-flex flex-column align-items-center mb-40">
                        <div
                            class="feature-icon bg-gradient-4 shadow-4 rounded-pill d-flex justify-content-center align-items-center mb-30">
                            <img src="assets/images/feat-icon-11.png" alt="Icon">
                        </div>
                        <div class="feature-txt-2 text-center">
                            <h3 class="feature-sub-title mt--7"><a href="class-details.html">Music Lessons</a></h3>
                            <div class="divider bg-gradient-4 rounded-pill mx-auto mt--3 mb-20"></div>
                            <p class="feature-txt-2 mt--6 mb--8">Since have been visonary relable sofware engnern partne
                                have been and visionary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature end -->

    @include('website.pages.component.about')

    @include('website.pages.component.team')

    <!-- counter begin -->
    <div class="counter-inner pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center mb-40">
                        <div class="counter-img-2 mb-40">
                            <img src="assets/images/counter-icon-5.png" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-15" data-count="2500">0</h2>
                            <p class="counter-sub-txt mb-0">Students Enrolled</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center mb-40">
                        <div class="counter-img-2 mb-40">
                            <img src="assets/images/counter-icon-6.png" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-15" data-count="912">0</h2>
                            <p class="counter-sub-txt mb-0">Best Awards Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center mb-40">
                        <div class="counter-img-2 mb-40">
                            <img src="assets/images/counter-icon-7.png" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-15" data-count="370">0</h2>
                            <p class="counter-sub-txt mb-0">Classes Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter-box d-flex flex-column align-items-center mb-40">
                        <div class="counter-img-2 mb-40">
                            <img src="assets/images/counter-icon-8.png" alt="Icon">
                        </div>
                        <div class="counter-part-txt text-center p-relative">
                            <h2 class="counter-txt odometer mb-15" data-count="648">0</h2>
                            <p class="counter-sub-txt mb-0">Our Total Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->

    @include('website.pages.component.partner')
@endsection
