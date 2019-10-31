@extends('fe/layouts/index')
@section('title')
    Video
@endsection
@section('content')
    
        <!--::industries start::-->
        <section class="hotel_list section_padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section_tittle text-center">
                                <h2>Video of IEG</h2>
                                <p>Video ahihi blablabla</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($videos as $video)
                            
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_ihotel_list">
                                    <iframe width="100%" height="250px;" src="https://www.youtube.com/embed/{{substr($video->link,-11)}}"></iframe>
                                <div class="hover_text">
                                    <div class="hotel_social_icon">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="share_icon">
                                        <i class="ti-share"></i>
                                    </div>
                                </div>
                                <div class="hotel_text_iner" style="min-height:270px;">
                                <h3> <a href="/gallery_videos/video/{{$video->id}}">{{$video->title}}</a></h3>
                                    <div class="place_review">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <span>(<a href="#comment"><i class="far fa-comments"></i> {{count($video->comments)}} Comments</a>)</span>
                                    </div>
                                    <p>{{$video->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--::industries end::-->
@endsection