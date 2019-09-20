<aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Recent Post</h3>
        @foreach ($news as $new)
            
        <div class="media post_item">
        <img width="100px" src="upload/news/{{$new->image}}" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>{{substr($new->title,0,30)}} ..</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
        @endforeach
    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>


    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="fe/img/post/post_10.png" alt="">
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
            <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                type="submit">Subscribe</button>
        </form>
    </aside>