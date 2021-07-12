@extends('frontend.layouts.default')

@section('meta')
         <title>Welcome to Sadhana Karir</title>
         <meta name="description" content="">
@endsection

@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/h1_hero.jpg') }}"    >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find your dream job at Sadhana</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="{{ route('jobs') }}" class="search-box">
                                <label for="jobsearch" class="form-control-label"></label>
                                <div class="input-form">
                                    <input  type="text"
                                            name="jobsearch"
                                            placeholder="Find jobs here"
                                            value="{{ old('jobsearch') }}"
                                            class="form-control"/>
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="location" id="select1">
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->location }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    {{-- <a href="#">Find job</a> --}}
                                    <button class="btn post-btn" style="border-radius:0px;padding:35px"
                                    type="submit">Find Job</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Grow with us</span>
                        <h2>Find Your Career Path</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($categories as $category)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                           <img src="storage/{{ $category->image }}">
                        </div>
                        <div class="services-cap">
                           <h5><a href="/job-category/{{ $category->id }}">{{ $category->category }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12" style="bottom: 50px">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="../job-list" class="border-btn2">Browse All Jobs</a>
                    </div>
                </div>
            </div>
            <!-- Section Location -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($locations as $location)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                           <img src="storage/{{ $location->image }}">
                        </div>
                        <div class="services-cap">
                           <h5><a href="/job-location/{{ $location->id }}">{{ $location->location }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="../job-list" class="border-btn2">Browse All Location</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->
    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2>Hilotae dexter equiso est.</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                            <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                            <a href="../job-list" class="btn post-btn">Find Your Career</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="frontend/assets/img/service/support-img.jpg" alt="">
                        <!-- <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="frontend/assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                           <h5>1. Search a job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                           <h5>2. Apply for job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                           <h5>3. Get your job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- How  Apply Process End-->

</main>
@endsection
