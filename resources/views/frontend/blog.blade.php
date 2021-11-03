@extends('frontend.layouts.default')

@section('meta')
         <title>Our Blog | Sadhana Karir</title>
         <meta name="description" content="">
@endsection


@section('content')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @forelse ( $items as $item )
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ $item->thumbnail }}" alt="Data Not Found">
                                <a href="../blog/{{ $item->slug }}" class="blog_item_date">
                                    <p>{{ $item->created_at->todatestring() }}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="../blog/{{ $item->slug }}">
                                    <h2>{{ $item->title }}</h2>
                                </a>
                                <p>{!! Str::limit($item->description, 200) !!}</p>
                                <a href="../blog/{{ $item->slug }}">Read More...</a>
                            </div>
                        </article>
                    @empty
                        <strong>Sorry...</strong>
                        <p> what you looking for not found..</p>
                    @endforelse
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{ $items->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            {{-- side bar --}}
            @include('frontend.includes.blogsidebar')
            {{-- side bar --}}
        </div>
    </div>
</section>

@endsection
