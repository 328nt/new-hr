
@extends('fe/layouts/index')
@section('content')
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item text-center">
                                <h2>Quy trình & biểu mẫu</h2>
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
                            @foreach ($procedures as $item)
                                {{$item->name}}
                            @endforeach
                            @foreach ($form as $new)
                            <article class="blog_item">
                                    <div class="blog_item_img">
                                        <a href="upload/procedure/{{$new->file}}">
                                            <h3>{{$new->name}}</h3> 
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection