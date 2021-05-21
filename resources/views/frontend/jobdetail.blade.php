@extends('frontend.layouts.default')


@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="frontend/assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $item->JobCategory->category }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            {{-- job img --}}
                            {{-- <div class="company-img company-img-details">
                                <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                            </div> --}}
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $item->jobtitle }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $item->Company->company }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $item->Location->location }}</li>
                                    {{-- <li>$3500 - $4000</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{ $item->jobdescription }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            <p>{{ $item->skill }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                            {{ $item->jobrequirement }}
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>{{ $item->start }}</span></li>
                          <li>Location : <span>{{ $item->Location->location }}</span></li>
                          <li>Vacancy : <span>{{ $item->position }}</span></li>
                          <li>Job nature : <span>Full time</span></li>
                          <li>Salary :  <span>Negotiable</span></li>
                          <li>Application date : <span>{{ $item->end }}</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="{{$item->id}}/apply" class="btn">Apply Now</a>
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                          <span>{{ $item->Company->company }}</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul>
                            <li>Web : <span> colorlib.com</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->
</main>
@endsection
