 <!-- Header Start -->
 <div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3 col-md-2">
                     <!-- Logo -->
                     <div class="logo">
                         <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/img/logo/logo2.png') }}" alt="#" style="max-width: 250px"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-9">
                     <div class="menu-wrapper float-right">
                         <!-- Main-menu -->
                         <div class="main-menu">
                             <nav class="d-none d-lg-block">
                                 <ul id="navigation">
                                     <li><a href="{{ route('index') }}">Home</a></li>
                                     <li><a href="{{ route('jobs') }}">Find Your Career</a></li>
                                     <li><a href="{{ route('blog') }}">Our News</a></li>
                                     <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    @auth
                                     <li><a href="{{ route('dashboard') }}">Go to Dashboard</a></li>
                                    @endauth
                                 </ul>
                             </nav>
                         </div>
                         <!-- Header-btn -->
                         {{-- @auth
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="{{ route('dashboard') }}" class="btn head-btn1">Dashboard</a>
                            </div>
                         @endauth --}}
                     </div>
                 </div>
                 <!-- Mobile Menu -->
                 <div class="col-12">
                     <div class="mobile_menu d-block d-lg-none"></div>
                 </div>
             </div>
         </div>
    </div>
</div>
 <!-- Header End -->
