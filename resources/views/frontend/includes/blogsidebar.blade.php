<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="{{ route('blog') }}" method="GET">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <label for="search" class="form-control-label"></label>
                        <input  type="text"
                                name="search"
                                placeholder="Search here.."
                                value="{{ old('search') }}"
                                class="form-control"/>
                        <div class="input-group-append">
                            <button class="btns" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search</button>
                </div>
            </form>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            @forelse ( $blogs->take(5) as $blog )
            <div class="media post_item">
                <img src="{{ $blog->thumbnail }}" alt="post" style="max-width: 100px">
                <div class="media-body">
                    <a href="../blog/{{ $blog->slug }}">
                        <h3>{{ $blog->title }}</h3>
                    </a>
                    <p>{{ $blog->created_at->todatestring() }}</p>
                </div>
            </div>
            @empty
            <div class="media post_item">
                <div class="media-body">
                    <a href="#">
                        <h3>No Recent Post..</h3>
                    </a>
                </div>
            </div>
            @endforelse
        </aside>

        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title">Instagram Feeds</h4>
            <p>No Post Here Yet...</p>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/assets/img/post/post_5.png" alt="">
                    </a>
                </li>
            </ul>
        </aside>


        <aside class="single_sidebar_widget newsletter_widget">
            @include('flash::message')
            <h4 class="widget_title">Newsletter</h4>
            <form action="../newsletter/subcribe" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                @error('email') <div class="text-muted">{{ $message }}</div>@enderror
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe</button>
            </form>
        </aside>
    </div>
</div>
