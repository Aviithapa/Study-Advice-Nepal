<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="dashboard">
                <img class="max-w-full h-[50px] for-light" src="{{ asset('assets/images/logo/logo.jpeg') }}" alt=""
                    style="height: 50px;" />
                <img class="max-w-full h-auto for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                    alt="" /></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="#"><img class="max-w-full h-auto" src="{{ asset('assets/images/logo/logo-icon.png') }}"
                    alt="" /></a>
        </div>
        <nav class="sidebar-main" style="border-top: 1px solid #fff;">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="#"><img class="max-w-full h-auto"
                                src="{{ asset('assets/images/logo/logo.jpeg') }}" alt="" /></a>
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            <i data-feather="settings" class="w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('setting.*') ? 'active' : '' }}"
                            href="{{ route('setting.index') }}">
                            <i data-feather="settings" class="w-5 h-5 mr-3"></i>
                            <span>Site Setting</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('banner.*') ? 'active' : '' }}"
                            href="{{ route('banner.index') }}">
                            <i data-feather="image" class="w-5 h-5 mr-3"></i>

                            <span>Banner Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('posts.*') ? 'active' : '' }}"
                            href="{{ route('posts.index') }}">
                            <i data-feather="file-text" class="w-5 h-5 mr-3"></i>
                            <span>Post Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('services.*') ? 'active' : '' }}"
                            href="{{ route('services.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg>
                            <span>Services Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('destinations.*') ? 'active' : '' }}"
                            href="{{ route('destinations.index') }}">
                            <i data-feather="map-pin" class="w-5 h-5 mr-3"></i>

                            <span>Destination Management</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('testimonials.*') ? 'active' : '' }}"
                            href="{{ route('testimonials.index') }}">
                            <i data-feather="message-circle" class="w-5 h-5 mr-3"></i>

                            <span>Testimonials Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('features.*') ? 'active' : '' }}"
                            href="{{ route('features.index') }}">
                            <i data-feather="star" class="w-5 h-5 mr-3"></i>
                            <span>Features Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('teams.*') ? 'active' : '' }}"
                            href="{{ route('teams.index') }}">
                            <i data-feather="users" class="w-5 h-5 mr-3"></i>
                            <span>Teams Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('partners.*') ? 'active' : '' }}"
                            href="{{ route('partners.index') }}">
                            <i data-feather="users" class="w-5 h-5 mr-3"></i>
                            <span>Partners Management</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('blogs.*') ? 'active' : '' }}"
                            href="{{ route('blogs.index') }}">
                            <i data-feather="users" class="w-5 h-5 mr-3"></i>
                            <span>Blog Management</span>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>
