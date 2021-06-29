@extends('frontend.layouts.default')


@section('content')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ( $items as $item )
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ $item->thumbnail }}" alt="Data Not Found">
                                <a href="{{ $item->slug }}" class="blog_item_date">
                                    <p>{{ $item->created_at->todatestring() }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="blog/{{ $item->slug }}">
                                    <h2>{{ $item->title }}</h2>
                                </a>
                                <p>{!! Str::limit($item->description, 200) !!}</p>
                                {{-- <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul> --}}
                                <a href="blog/{{ $item->slug }}">Read More...</a>
                            </div>
                        </article>
                    @endforeach
                    {{-- <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>
            </div>
            {{-- side bar --}}
            @include('frontend.includes.blogsidebar')
            {{-- side bar --}}
        </div>
    </div>
</section>

@endsection
