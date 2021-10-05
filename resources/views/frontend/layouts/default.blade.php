<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('meta')
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">

		<!-- CSS here -->
        @stack('before-style')
        @include('frontend.includes.style')
        @stack('after-style')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7HPC1EF6S"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-Z7HPC1EF6S');
        </script>
    </head>

    <body>
       <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="{{ asset('frontend/assets/img/logo/loader.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.includes.navbar')

            <div class="content">
                {{-- content --}}
                @yield('content')
            </div>

        <footer>
            @include('frontend.includes.footer')
        </footer>

        <div class="clearfix"></div>

            {{-- script --}}
        @stack('before-script')
        @include('frontend.includes.script')
        @stack('after-script')
    </body>



</html>
