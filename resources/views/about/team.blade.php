@extends('layouts.main')
@section('content')
    <section class="team-section">
        <div class="pattern-layer"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="upper-text">
                                Meet Our Team Member
                            </div>
                            <h2> Lay Zar Pwint <strong>Family Company Limited</strong></h2>
                        </div>
                        <div class="text-content">
                            <div class="text" style="text-align: justify; font-size: 16px; color: black; margin: 20px;">
                                Our overseas employment agency consists of a skilled team dedicated to connecting talented
                                individuals with international job opportunities. We have a deep understanding of global
                                markets,
                                immigration laws, and visa processes. Our extensive network of contacts allows us to offer a
                                wide
                                range of employment opportunities in various sectors. We prioritize transparency, ethical
                                practices,
                                and open communication, providing personalized guidance and support to job seekers. Our
                                commitment
                                to excellence ensures successful placements and long-term relationships with clients.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="row">
                            @foreach ($teams as $team)
                                <div class="team-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                                    style="padding: 20px;">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <img src="{{ $team->photo }}" alt="#"
                                                style="width: 100%; height: 280px; background-size: top; object-fit: cover;">
                                        </div>
                                        <div class="title-box">
                                            <h3 class="name">
                                                {{ $team->name ?? '' }}
                                            </h3>
                                            <div class="designation">
                                                {{ $team->position ?? '' }}
                                            </div>
                                        </div>
                                        <div class="text">
                                            Lay Zar Pwint Family Co.,Ltd
                                            <br>
                                            Overseas Employment Agency
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
