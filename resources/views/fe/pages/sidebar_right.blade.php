
    
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title"><b>Category</b> </h4>
                                <ul class="list cat-list">
                                    @foreach ($categories as $category)
                                    <li>
                                            <a href="news/category/{{$category->id}}" class="d-flex">
                                                <p style="
                                                font-weight: 800;
                                                color: #0c3e72;
                                            ">{{$category->name}} &emsp;</p>
                                                <p style="
                                                font-weight: 800;
                                                color: #0c3e72;
                                            "> ({{count($category->news)}} bài viết)</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
<aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Bài viết mới</h3>
        @foreach ($news as $new)
            
        <div class="media post_item">
        <img width="100px" height="50px" src="upload/news/{{$new->image}}" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>{{substr($new->title,0,30)}} ..</h3>
                    </a>
                    <p>{{$new->created_at}}</p>
                </div>
            </div>
        @endforeach
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h4 class="widget_title">Tin nổi bật</h4>
        @foreach ($spotlight as $sl)
            
        <div class="media post_item">
        <img width="100px" src="upload/news/{{$sl->image}}" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>{{substr($sl->title,0,30)}} ..</h3>
                    </a>
                    <p>{{$sl->created_at}}</p>
                </div>
            </div>
        @endforeach
    </aside>

