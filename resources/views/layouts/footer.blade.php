<section class="call-to-action">
    <div class="map-pattern-layer"></div>

    <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <h2>
                        If you have any queries, our team is ready to
                        response all your queries.
                    </h2>
                </div>
            </div>
            <div class="links-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="links-box">
                        <a href="tel:09-945446444" class="theme-btn btn-style-two">
                            <div class="btn-title">Make a Call</div>
                        </a>
                        <a href="mailto:layzarpwintfamily@gmail.com" class="theme-btn btn-style-one">
                            <div class="btn-title">Email</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="top-pattern-layer-dark"></div>

    <div class="widgets-section">
        <div class="auto-container" style="padding-left: 50px; padding-right: 50px;">
            <div class="row clearfix">
                <div class="footer-widget links-widget">
                    <div class="widget-content">
                        <div class="row clearfix">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="{{ asset('data/company/logo.jpg') }}" alt=""
                                                style="width: 50%;">
                                        </a>
                                    </div>

                                    <div class="text">
                                        We are one of the best overseas employment agency in myanmar.
                                    </div>

                                    <div class="info">
                                        <ul>
                                            <li>
                                                No.(401/A), Cherry Street, (72) Quarter, (South) Dagon Myothit Township,
                                                Yangon Region, Myanmar
                                            </li>
                                            <li>
                                                <a href="tel:09-976982458">
                                                    <strong>
                                                        09-976982458
                                                    </strong>
                                                </a>
                                                <br>
                                                <a href="tel:09-798412188">
                                                    <strong>
                                                        09-798412188
                                                    </strong>
                                                </a>
                                                <br>
                                                <a href="tel:09-945446444">
                                                    <strong>
                                                        09-945446444
                                                    </strong>
                                                </a>
                                            </li>

                                            <li>
                                                <a
                                                    href="mailto:layzarpwintfamily@gmail.com">layzarpwintfamily@gmail.com</a>
                                            </li>

                                            <li>
                                                <a href="mailto:info@layzarpwintfamily">info@layzarpwintfamily.com</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                <div class="widget-title">
                                    <h4>What We Do</h4>
                                </div>
                                <ul class="links">
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
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                <div class="widget-title">
                                    <h4>
                                        Manpower Services
                                    </h4>
                                </div>
                                <ul class="links">
                                    @foreach ($countries as $country)
                                        <li>
                                            <a href="{{ route('job.show', $country->id) }}">
                                                {{ $country->country ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                <div class="widget-title">
                                    <h4>Support</h4>
                                </div>
                                <ul class="links">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous"
                                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                        nonce="PosYNXjc"></script>

                                    <div class="fb-page" data-href="https://www.facebook.com/layzarpwintfamily"
                                        data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                                        data-adapt-container-width="true" data-hide-cover="false"
                                        data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/layzarpwintfamily"
                                            class="fb-xfbml-parse-ignore">
                                            <a href="https://www.facebook.com/layzarpwintfamily">
                                                Facebook
                                            </a>
                                        </blockquote>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="background-color: #FEF200;">
        <div class="auto-container">
            <div class="inner">
                <div class="copyright">
                    &copy; {{ now()->year }}
                    <strong>
                        Lay Zar Pwint Family Co.,Ltd
                    </strong>
                    . All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
