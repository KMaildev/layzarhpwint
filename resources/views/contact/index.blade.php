@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="inner-banner">
        <div class="banner-curve"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="theme-icon"></div>
                <div class="title-box">
                    <h1>
                        Contact Us
                    </h1>
                    <div class="d-text">
                        If you have any queries, our team is ready to response all your queries.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="contact-section-two">
        <div class="auto-container">
            <div class="upper-row">
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <div class="upper-text">
                                    Lay Zar Pwint Family Co.,Ltd - Send us a Message
                                </div>
                                <h2>Do You Have Any Questions? We’ll Be Happy To Assist!</h2>
                                <div class="lower-text">
                                    Alternatively, you may contact us by filling up the contact form. Our team will response
                                    you shortly.
                                </div>
                            </div>

                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="form-box">
                                <div class="default-form contact-form">
                                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                                        autocomplete="off" id="create-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="name" type="text" class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control"
                                                        placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="subject" type="text" class="form-control"
                                                        placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <button type="submit" class="theme-btn btn-style-one">
                                                    <span class="btn-title">
                                                        Submit Now
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lower-row">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="javascript::void(0)">Address</a></h4>
                                    <div class="sub-text">
                                        Myanmar
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>
                                                No.(401/A), Cherry Street, (72) Quarter, (South) Dagon Myothit Township,
                                                Yangon Region, Myanmar
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4>
                                        <a href="">
                                            Phone
                                        </a>
                                    </h4>
                                    <div class="sub-text">
                                        Myanmar
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4>
                                        <a href="">
                                            Email
                                        </a>
                                    </h4>
                                    <div class="sub-text">
                                        Myanmar
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>
                                                <a
                                                    href="mailto:layzarpwintfamily@gmail.com">layzarpwintfamily@gmail.com</a>
                                            </li>
                                            <li><a href="mailto:info@layzarpwintfamily">info@layzarpwintfamily.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
