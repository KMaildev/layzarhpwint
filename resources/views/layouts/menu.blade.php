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
                                <a href="tel:09-976982458">
                                    <span class="icon sl-icon-call-in"></span>
                                    Phone
                                    <strong>
                                        09-976982458
                                    </strong>
                                </a>
                            </li>
                            <li class="email">
                                <a href="mailto:layzarpwintfamily@gmail.com">
                                    <span class="icon sl-icon-envelope-open">
                                    </span>
                                    layzarpwintfamily@gmail.com
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
                <div class="">
                    <div class="">
                        <a href="{{ route('home') }}" title="Lay Zar Pwint Family Co.,Ltd">
                            <img src="{{ asset('data/company/weblogo.png') }}" alt="Lay Zar Pwint Family Co.,Ltd"
                                title="Lay Zar Pwint Family Co.,Ltd" style="width: 500px;">
                        </a>
                    </div>
                </div>

                {{-- right-nav  --}}
                <div class="clearfix">
                    <div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li>
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

                                    <li>
                                        <a href="#"
                                            style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                            Company Profile
                                        </a>
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
            <div class="logo pull-left">
                <a href="{{ route('home') }}" title="">
                    <img src="{{ asset('data/company/logo.jpg') }}" alt="" title="" style="width: 90px;">
                </a>
            </div>
            <div class="pull-right">
                <nav class="main-menu clearfix">
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
                    <img src="{{ asset('data/company/logo.jpg') }}" alt="" title="">
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
