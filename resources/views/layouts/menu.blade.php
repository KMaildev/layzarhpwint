<header class="main-header header-style-one">
    <div class="header-top header-top-one">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <div class="top-text">
                        We are one of the best overseas employment agency in myanmar.
                    </div>
                </div>

                <div class="top-right clearfix">
                    <div class="info">
                        <ul class="clearfix">
                            <li class="phone">
                                <a href="tel:500.369.2580">
                                    <span class="icon sl-icon-call-in"></span>
                                    Phone
                                    <strong>500.369.2580</strong>
                                </a>
                            </li>
                            <li class="email">
                                <a href="mailto:info@zentec.com">
                                    <span class="icon sl-icon-envelope-open">
                                    </span>
                                    info@zentec.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-upper" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{ route('home') }}" title="Zentec - Business and Consulting HTML Template">
                            <img src="{{ asset('data/company/logo.jpg') }}"
                                alt="Zentec - Business and Consulting HTML Template"
                                title="Zentec - Business and Consulting HTML Template">
                        </a>
                    </div>
                </div>
                <div class="right-nav clearfix">
                    <div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li class="current">
                                        <a href="{{ route('home') }}"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Home
                                        </a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript::void(0)"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            About Us
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    Our Company
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('ceo_message') }}">
                                                    President's Message
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team') }}">
                                                    Professional Team
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="dropdown">
                                        <a href="#"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Manpower Services
                                        </a>
                                        <ul>
                                            @foreach ($countries as $country)
                                                <li>
                                                    <a href="{{ route('job.show', $country->id) }}">
                                                        {{ $country->country ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Gallery & Activities
                                        </a>
                                        <ul>
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="{{ route('activities.show', $category->id) }}">
                                                        {{ $category->title ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('cv.index') }}"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Job Application
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('employer.index') }}"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Employers
                                        </a>
                                    </li>

                                    <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('home') }}" title="">
                    <img src="{{ asset('assets/images/sticky-logo.png') }}" alt="" title="">
                </a>
            </div>
            <div class="pull-right">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/nav-logo.png') }}" alt="" title="">
                </a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
