@extends('layouts.main')
@section('content')
    @include('layouts.slider')

    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="upper-text">
                                Lay Zar Pwint Family Co.,Ltd
                            </div>
                            <h2>
                                Overseas Employment Agency
                            </h2>
                        </div>

                        <div class="text-content">
                            <p style="text-align: justify; font-size: 16px; color: black;"
                                class="animate__animated animate__lightSpeedInRight">
                                Our company "Lay Zar Pwint Family Co.,Ltd." was established in the year 2023 for the
                                manpower supply.
                                Lay Zar Pwint Family Co.,Ltd is one of the registered licence companies in Republic of the
                                Union of
                                Myanmar and authorized by the Ministry of the National Planning & Economic Development and
                                Ministry of
                                Labor, Employment & Social Welfare. We specialize in the supply of manpower to overseas
                                countries.
                                <br><br>
                                "Lay Zar Pwint Family Co.,Ltd." has been in this manpower recruitment services for many
                                years and we
                                are proud and modest to inform that we have had substantial success in the supply of labor
                                in the
                                different business sectors.

                            </p>

                            <div class="link-box">
                                <a href="{{ route('about.index') }}" class="theme-btn btn-style-one">
                                    <div class="btn-title">
                                        More Detail
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="images">
                            <div class="row clearfix">
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <img src="{{ asset('data/company/18.jpg') }}" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <img src="{{ asset('data/company/19.jpg') }}" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <img src="{{ asset('data/company/4.jpg') }}" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <img src="{{ asset('data/company/20.jpg') }}" alt="" title="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .btn-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;

        }

        .btn-box .btn-call {
            background: green !important;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            padding: 5px 10px;
        }
    </style>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="btn-box">
            <a class="btn btn-call" href="tel:09-976982458" style="font-size: 45px;">
                <i class="fa-brands fa-whatsapp"></i>
                Call us 09-976982458
            </a>
        </div>
    </div>


    <section
        class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix py-5 animate__animated animate__lightSpeedInRight">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/company/23.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/company/24.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 340px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="">
                        <h3 style="color:#468ECE;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Company Information
                                </font>
                            </font>
                        </h3>
                        <h3>
                            <span style="color:#f7931E;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Company Registration Certificate
                                    </font>
                                </font>
                            </span>
                        </h3>

                        <p style="text-align: justify; font-size: 15px; color: black;">
                            Choose us for your overseas employment needs and embark on a rewarding international career
                            journey. Our agency offers a wealth of experience and expertise, ensuring smooth transitions
                            and successful placements. With a wide range of job options across various sectors and
                            countries, personalized support, and a commitment to excellence, we prioritize your success
                            and build lasting relationships with our clients. Trust us to make your overseas job
                            aspirations a reality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h3 style="color:#468ECE;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Company
                            </font>
                        </font>
                        <span style="color:#f7931E;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Organizational Chart
                                </font>
                            </font>
                        </span>
                    </h3>

                    <div class="title-desc">
                        <p style="text-align: justify; font-size: 16px; color: black; line-height: 2.5;">
                            Our overseas employment agency consists of a skilled team dedicated to connecting talented
                            individuals with international job opportunities. We have a deep understanding of global
                            markets, immigration laws, and visa processes. Our extensive network of contacts allows us
                            to offer a wide range of employment opportunities in various sectors. We prioritize
                            transparency, ethical practices, and open communication, providing personalized guidance and
                            support to job seekers. Our commitment to excellence ensures successful placements and
                            long-term relationships with clients.
                        </p>
                    </div>

                    <h4><b>Our Purpose</b></h4>
                    <div class="title-desc">
                        <p style="text-align: justify; font-size: 16px; color: black; line-height: 2.5;">
                            Our main purpose is to provide different categories of
                            Myanmar Manpower around the globe and
                            especially
                            Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional and
                            Unskilled Myanmar
                            Manpower. Currently, we are dealing with various clients from different countries and
                            successful in supply
                            Malaysia, Japan, Thailand, Singapore without any complaints.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/org.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

            </div>
        </div>
    </section>






    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ asset('data/activities.png') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="title-box">
                    <h1>
                        Gallery & Activities
                    </h1>
                    <div class="d-text">
                        Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                        have successfully found employment through our agency. These visuals depict diverse work
                        environments, cultural experiences, and personal growth opportunities that await those who
                        embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                        natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                        to explore new horizons.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12">
                <div class="row py-5">
                    @foreach ($activities as $activity)
                        @php
                            $images = explode(',', $activity->images);
                        @endphp
                        @foreach ($images as $image)
                            <div
                                class="hover06 col-3 col-sm-3 col-sm-12 col-md-3 animate__animated animate__bounce animate__fadeInLeft">
                                <div class="product-default" style="background-color: #FEF200; padding: 5px;">
                                    <figure>
                                        <a href="javascript::void(0)">
                                            <img data-enlargeable="" src="{{ $image }}" alt=""
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                                class="img-enlargeable">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot" style="color: black;">
                                                <center>
                                                    Lay Zar Pwint Family Co.,Ltd
                                                </center>
                                            </div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <center>
                                            <h3 class="product-title" style="color: #fe0000; font-size: 18px;">
                                                {{ $activity->title ?? '' }}
                                            </h3>
                                        </center>
                                    </div>
                                </div>
                                <br>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
