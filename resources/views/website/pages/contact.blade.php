@extends('website.layout.app')

@section('content')
    <!-- banner begin -->
    <div class="banner breadcrumb-banner pt-190 pb-200"
        style="background: url({{ $contactBanner->getFirstMediaUrl('post_image') }}) bottom center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-txt">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                        <div class="breadcrumb-txt">
                            <a href="/">Home</a>
                            <span class="dvdr"><i class="icofont-simple-right"></i></span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- contact begin -->
    <div class="contact-3 pb-50 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-form-wrapper mb-70">
                        <span class="contact-subtext">Get In Touch</span>
                        <h4 class="contact-titletext mb-40">Have Any Query?</h4>
                        <form>
                            <div class="contact-form">
                                <div class="contact-col-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="contact-col-6">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="contact-col">
                                    <input type="text" placeholder="Message Subject">
                                </div>
                                <div class="contact-col">
                                    <textarea placeholder="Leave Messege"></textarea>
                                </div>
                                <div class="contact-col">
                                    <button class="def-btn">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-wrapper ml-60 mb-70">
                        <ul>
                            <li>
                                <i class="icofont-google-map"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Visit Office</span>
                                    New Elefent Road, Dhaka
                                </div>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Call Anytime</span>
                                    <a href="tel:+880123456789">+880 123 456 789</a>
                                </div>

                            </li>
                            <li>
                                <i class="icofont-envelope-open"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Send Email</span>
                                    <a href="mailto:contact@yourmail.com">contact@yourmail.com</a>
                                </div>

                            </li>
                            <li>
                                <i class="icofont-globe"></i>
                                <div class="contact-info-content">
                                    <span class="contact-info-content-text">Visit Us</span>
                                    <a href="#" target="_blank">www.yoursite.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->

    <!-- map begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12677670.27170986!2d26.611266975183028!3d49.282320776259766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1646059574165!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- map end -->
@endsection
