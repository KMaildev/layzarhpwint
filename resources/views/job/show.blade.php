@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
    
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ asset('data/activities.png') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="title-box">
                    <h1>
                        Lay Zar Pwint Family Co.,Ltd
                    </h1>
                    <div class="d-text">
                        Lay Zar Pwint Family Co.,Ltd is a leading international employment agency specializing in
                        connecting employers
                        from all over the world with the best and most qualified candidates. With a wide network of
                        recruitment professionals, our team is dedicated to matching employers with the ideal candidates to
                        help your business succeed.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-text">
                    Lay Zar Pwint Family Co.,Ltd
                </div>
                <h2>
                    Job in {{ $country->country ?? '' }}
                </h2>
            </div>
            <div class="upper-row">
                <div class="row clearfix">

                    @foreach ($jobs as $job)
                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="blog-single.html">
                                        <img data-enlargeable="" src="{{ $job->photo }}" alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                            class="img-enlargeable">
                                    </a>
                                </div>
                                <div class="lower-box">
                                    <div class="category">
                                        Available Job in {{ $job->country->country ?? '' }}
                                    </div>
                                    <h3>
                                        <a href="javascript::void(0)">
                                            {{ $job->title ?? '' }}
                                        </a>
                                    </h3>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="javascript::void(0)">
                                                    Lay Zar Pwint Family Co.,Ltd
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="more-link">
                                        <a href="{{ route('cv.index') }}">
                                            <span class="fa fa-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
