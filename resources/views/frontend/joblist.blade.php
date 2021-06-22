@extends('frontend.layouts.default')


@yield('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->

    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                @include('frontend.includes.sidebar')
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
{{--                                        <span>39, 782 Jobs found</span>--}}
                                        <!-- Select job items start -->
{{--                                        <div class="select-job-items">--}}
{{--                                            <span>Sort by</span>--}}
{{--                                            <select name="select">--}}
{{--                                                <option value="">None</option>--}}
{{--                                                <option value="">job list</option>--}}
{{--                                                <option value="">job list</option>--}}
{{--                                                <option value="">job list</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            @foreach($jobs as $job)
                                @if($job->status == 'active')
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="../job/{{$job->slug}}"><img src="{{ url($job->JobCategory->image) }}" alt="#"></a>
                                            </div>
                                            <div class="job-tittle job-tittle2">
                                                <a href="../job/{{$job->slug}}">
                                                    <h4>{{$job->jobtitle}}</h4>
                                                    <h5>{!! Str::limit($job->jobdescription, 80) !!}</h5>
                                                </a>
                                                <ul>
                                                    <li>{{$job->JobCategory->category}}</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>{{$job->Location->location}}</li>
                                                    <li>{{$job->salary}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link items-link2 f-right" style="float: right">
                                            <a href="../job/{{$job->slug}}">{{$job->employment}}</a>
                                        </div>
                                    </div>
                                @endif
                        @endforeach
                            <!-- single-job-content -->
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
{{--    <div class="pagination-area pb-115 text-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="single-wrap d-flex justify-content-center">--}}
{{--                        <nav aria-label="Page navigation example">--}}
{{--                            <ul class="pagination justify-content-start">--}}
{{--                                <li class="page-item active"><a class="page-link" href="#">01</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">02</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">03</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--Pagination End  -->

</main>
