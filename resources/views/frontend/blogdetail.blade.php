@extends('frontend.layouts.default')

@section('meta')
         <title>{{ $item->title }} | Sadhana Karir</title>
         <meta name="title" content="{{ $item->title }}">
         <meta name="keyword" content="{{ $item->title }}">
         <meta name="description" content="{!! Str::limit($item->description, 70) !!}">
@endsection

@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ $item->thumbnail }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $item->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- Hero Area End -->
 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ $item->thumbnail }}" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{ $item->title }}</h2>
                   <p class="excert">
                      {!! $item->description !!}
                   </p>
                </div>
             </div>
             <div class="support-caption">
             <a href="{{ route('blog') }}" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"><i class="ti-arrow-left"></i> Back To Our News</a>
             </div>
            </div>
          {{-- side bar --}}
          @include('frontend.includes.blogsidebar')
          {{-- side bar --}}
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->
@endsection
