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
            <div class="media post_item">
                <img src="frontend/assets/img/post/post_1.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>From life was you fish...</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
        </aside>

        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/assets/img/post/post_5.png" alt="">
                    </a>
                </li>
            </ul>
        </aside>


        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>

            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe</button>
            </form>
        </aside>
    </div>
</div>
