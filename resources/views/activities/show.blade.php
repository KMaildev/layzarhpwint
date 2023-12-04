@extends('layouts.main')
@section('title', 'Activities')
@section('content')
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
