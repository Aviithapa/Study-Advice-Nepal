<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Study Advice Nepal') }}</title>

    @include('website.layout.style')
</head>

<body>
    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="{{ site_logo('logo_image') }}" alt="Study Advice Nepal">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="{{ asset('frontend-assets/images/logo/logo-icon.png') }}"
                            alt="Pen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- mouse-cursor-start -->
    <div class="mouse-cursor-invisible">
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
    </div>
    <!-- mouse-cursor-end -->
    @include('website.layout.header')
    @yield('content')
    @include('website.layout.footer')

    @include('website.layout.script')

</body>

</html>
