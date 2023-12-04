@extends('layouts.main')
@section('content')
    <section class="inner-banner">
        <div class="banner-curve"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="theme-icon"></div>
                <div class="title-box">
                    <h1>
                        Employer Form
                    </h1>
                    <div class="d-text">
                        Post a job and hire talent worker
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <div class="page-content">
        <div class="container">
            <div class="row" style="background-color: #E7F0E7; padding: 20px; border-radius: 30px;">

                <div class="col-xl-8 col-lg-8 col-sm-8 py-5 animate__animated animate__bounce animate__fadeInDown">
                    <div class="contact-form">
                        <div class="column mcb-column mcb-item-04q251sx2 one column_column">
                            <div class="column_attr clearfix align_center animate fadeInUp" data-anim-type="fadeInUp"
                                style="background-image:url({{ asset('data/home_elearning_sep.png') }});background-repeat:no-repeat;background-position:center bottom;">
                                <strong>
                                    <h2>Employer <span class="color3">Form</span></h2>
                                    <h3 style="color:#468ECE;">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Post a job
                                            </font>
                                        </font>
                                        <span style="color:#fe0000;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    and hire talent worker.
                                                </font>
                                            </font>
                                        </span>
                                    </h3>
                                </strong>
                            </div>
                        </div>
                        <br>
                        <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Phone Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">
                                            Working Experience
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">
                                            Other Additional
                                        </label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Estimate Salary</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">
                                            Gender
                                        </label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender" name="gender" value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 py-2">
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

                <div class="col-xl-4 col-lg-4 col-sm-4 py-5">
                    <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate"
                        data-animation-delay="100" data-animation-name="fadeInUpShorter">
                        Employer Form
                    </h2>
                    <center>
                        <p style="font-size: 15px; color: black;" class="appear-animate" data-animation-delay="100"
                            data-animation-name="fadeInUpShorter">
                            Post a job and hire talent worker
                        </p>
                    </center>
                    <br>

                    <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                        Lay Zar Pwint Family Co.,Ltd
                    </h4>

                    <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                        data-animation-delay="100" data-animation-name="fadeInUpShorter">
                        A leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the
                        Ministry of Labor, Employment and Social Security of Myanmar.
                    </p>


                    <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                        Our Expertise
                    </h4>

                    <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                        data-animation-delay="100" data-animation-name="fadeInUpShorter">
                        Our expertise stands on the Malaysia, Singapore, Japan, Dubai and Middle East Countries job
                        market.
                    </p>


                    <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                        Our Operations
                    </h4>

                    <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                        data-animation-delay="100" data-animation-name="fadeInUpShorter">
                        Lay Zar Pwint Family Co.,Ltd’s operations are managed by a team of professionals.
                    </p>


                    <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                        Our Experience
                    </h4>

                    <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                        data-animation-delay="100" data-animation-name="fadeInUpShorter">
                        We could provide different level of employees on our client’s demand in various job categories
                    </p>
                </div>

            </div>
        </div>
    </div>

    <br>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
