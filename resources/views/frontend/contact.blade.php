@extends('frontend.layouts.default')

@section('meta')
         <title>Contact Us | Sadhana Karir</title>
         <meta name="description" content="">
@endsection

@section('content')
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/sales4.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- Hero Area End --}}
{{-- ================ contact section start ================= --}}
<section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                {{-- maps --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.205533575618!2d106.7613924!3d-6.1907313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87982dcf0e9810b7!2sPT.%20Sadhana%20Ekapraya%20Amitra!5e0!3m2!1sen!2sid!4v1626063434215!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Feel free to ask</h2>
                </div>
                <div class="col-lg-8">
                    @include('flash::message')
                    <form class="form-contact" action="{{ route('contact-us.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input  class="form-control @error('name') is-invalid @enderror"
                                            name="name"
                                            value="{{ old('name') }}"
                                            type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'"
                                            placeholder="Enter your name"
                                            required/>
                                        @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input  class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your email address'"
                                            placeholder="Enter your email address"
                                            required/>
                                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input  class="form-control @error('subject') is-invalid @enderror"
                                            name="subject"
                                            type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject"
                                            required/>
                                    @error('subject') <div class="text-muted">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 @error('message') is-invalid @enderror"
                                    name="message"
                                    cols="30" rows="9"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Message'"
                                    placeholder="Enter Message"
                                    required></textarea>
                                @error('message') <div class="text-muted">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm boxed-btn" onclick="this.form.submit(); this.disabled=true;">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Kebon Jeruk, Jakarta.</h3>
                            <p>Jl Raya Perjuangan Rukan Grahamas Blok B No.20 Kebon Jeruk, Jakarta Barat 11530</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone-alt"></i></span>
                        <div class="media-body">
                            <h3>(021) 53654135</h3>
                            <p>Mon to Fri 9am to 4pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>recruitment@sadhanas.co.id</h3>
                            <p>Send us your question anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('content')
