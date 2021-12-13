@extends('frontend.layouts.default')

@section('meta')
         <title>{{ $item->jobtitle }} | Sadhana Karir</title>
         <meta name="title" content="{{ $item->jobtitle }}">
         <meta name="keyword" content="{{ $item->jobtitle }} lowongan pekerjaan terbaru pt sadhana ekapraya amitra">
         <meta name="description" content="{!! $item->jobdescription !!}">
@endsection

@section('content')
<main>
    {{-- Hero Area Start--}}
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/sales4.jpg') }}">
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
    {{-- Hero Area End --}}
    {{-- job post company Start --}}
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                {{-- Left Content --}}
                <div class="col-xl-7 col-lg-8">
                    {{-- job single --}}
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
                      {{-- job single End --}}

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            {{-- Small Section Tittle --}}
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            {!! $item->jobdescription !!}
                        </div>
                        <div class="post-details2  mb-50">
                             {{-- Small Section Tittle --}}
                            <div class="small-section-tittle">
                                <h4>Benefit</h4>
                            </div>
                            {!! $item->benefit !!}
                        </div>
                    </div>

                    @include('frontend.includes.disclaimer')

                </div>
                {{-- Right Content --}}
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        {{-- Small Section Tittle --}}
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                          <li>Posted date : <span>{{ $item->start }}</span></li>
                          <li>Location : <span>{{ $item->Location->location }}</span></li>
                          <li>Vacancy : <span>{{ $item->position }}</span></li>
                          <li>Employment Type : <span>{{ $item->employment }}</span></li>
                          <li>Salary :  <span>{{ $item->salary }}</span></li>
                          <li>Application due date : <span>{{ $item->end }}</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <a href="./{{$item->slug}}/apply" class="btn">Apply Now</a>
                     </div>
                     <ul style="padding-top: 15px">
                         <li>or share this</li>
                         <li><a href=
                            "https://wa.me/?text=PT Sadhana is hiring {{ $item->jobtitle }}, {{ url()->current() }}"
                                    data-action="share/whatsapp/share"
                                    target="_blank"
                                    style="color: green">
                                    <i class="fab fa-whatsapp"> WhatsApp</i>
                                </a>
                            </li>
                        <li>
                            <a href="mailto:?subject=PT Sadhana Ekapraya is hiring {{ $item->jobtitle }}&amp;body=Check out this job vacancy {{ url()->current() }}."
                                target="new"
                                style="color: #fb246a">
                                <i class="far fa-envelope"> E-mail</i>
                            </a>
                        </li>
                     </ul>
                   </div>
                    <img class="post-details4  mb-50">
                        {{-- Small Section Tittle --}}
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                        <img src="{{ url($item->Company->logo) }}" style="max-width: 150px" alt="#">
                    <br><br>
                          <span>{{ $item->Company->company }}</span>
                          {{-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
                        <ul>
                            <li><a href="{{ $item->Company->website }}" style="color: #fb246a"><span>{{ $item->Company->website }}</span></a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    {{-- job post company End --}}
</main>
@endsection
