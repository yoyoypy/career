@extends('frontend.layouts.default')

@section('meta')
         <title>Thank You | Sadhana Karir</title>
         <meta name="description" content="">
@endsection

@section('content')
    <meta http-equiv="refresh" content="3; URL=/" />
    <main>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <h1 class="site-header__title" data-lead-id="site-header-title" style="font-size: 100px">THANK YOU!</h1>
                    <img class="main-content center">
                    <img src="{{ asset('frontend/assets/img/checklist.png') }}">
                    <p class="main-content__body" data-lead-id="main-content-body">Terima kasih, Lamaran anda sudah kami simpan, staff kami akan menghubungi anda untuk proses selanjutnya</p>
                    <small>we will redirect you to home in 3 seconds</small>
                </div>
            </div>
        </div>
    </main>
@endsection
