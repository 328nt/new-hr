
@extends('fe/layouts/index')
@section('content')
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item text-center">
                                <h2>Tin tức IEG</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
    
        <!--================Blog Area =================-->
        <section class="blog_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($news as $new)
                                
                            <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="upload/news/{{$new->image}}" alt="">
                                        <a href="news/{{$new->id}}" class="blog_item_date">
                                            <h3>{{$new->updated_at}}</h3>
                                        </a>
                                    </div>
        
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="news/{{$new->id}}">
                                            <h2>{{$new->title}}</h2>
                                        </a>
                                        <p>{{$new->description}}</p>
                                        <ul class="blog-info-link">
                                                <li><a href="staff/account/{{$new->users->id}}"><i class="far fa-user"></i> {{$new->authors->fullname}}</a></li>
                                                <li><a href="news/{{$new->id}}#comment"><i class="far fa-comments"></i> {{count($new->comments)}} Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach
    
                            <nav class="blog-pagination justify-content-center d-flex">
                                    {{ $news->links() }}
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                            </aside>
    
                            @include('fe/pages/sidebar_right')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection