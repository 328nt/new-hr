@extends('fe/layouts/index')
@section('title')
    {{$video->title}}
@endsection
@section('content')
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-12">
                              <div class="breadcrumb_iner">
                                    <div class="breadcrumb_iner_item text-center">
                                          <h2>blog details</h2>
                                          <p>home . blog details</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            </section>
            <!-- breadcrumb start-->
            @include('msg')
          <!--================Blog Area =================-->
          <section class="blog_area single-post-area section_padding">
              <div class="container">
                  <div class="row">
                      <div class="col-md-8.offset-md-1 posts-list">
                          <div class="single-post">
                              <div class="feature-img">
                                    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{substr($video->link,-11)}}"></iframe>
                              </div>
                              <div class="blog_details">
                                  <h2>{{$video->title}}
                           </h2>
                                  <ul class="blog-info-link mt-3 mb-4">
                                      <li><a href="staff/account/{{$video->users->id}}"><i class="far fa-user"></i> {{$video->users->fullname}}</a></li>
                                      <li><a href="#comment"><i class="far fa-comments"></i> {{count($video->comments)}} Comments</a></li>
                                  </ul>
                                  {!! $video->content !!}
                              </div>
                          </div>
                          
                          <div class="navigation-top">
                                {{-- <div class="d-sm-flex justify-content-between text-center">
                                    <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4 people like this</p>
                                    <div class="col-sm-4 text-center my-2 my-sm-0">
                                        <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                                    </div>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div> --}}
                                <div class="navigation-area">
                                    <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        @if ($previous == null)
                                        @else
                                        <div class="thumb">
                                                <a href="gallery_videos/video/{{$previous}}">
                                                    <img class="img-fluid" src="fe/img/post/preview.png" alt="">
                                                </a>
                                            </div>
                                            <div class="arrow">
                                                <a href="gallery_videos/video/{{$previous}}">
                                                    <span class="lnr text-white ti-arrow-left"></span>
                                                </a>
                                            </div>
                                            <div class="detials">
                                                <p>Prev Post</p>
                                                <a href="gallery_videos/video/{{$previous}}">
                                                    <h4>{{$previous_title->title}}</h4>
                                                </a>
                                            </div>
                                        @endif
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                            @if ($next == null)
                                                
                                            @else
                                            <div class="detials">
                                                <p>Next Post</p>
                                                <a href="gallery_videos/video/{{$next}}">
                                                    <h4>{{$next_title->title}}</h4>
                                                </a>
                                            </div>
                                            <div class="arrow">
                                                <a href="#">
                                                    <span class="lnr text-white ti-arrow-right"></span>
                                                </a>
                                            </div>
                                            <div class="thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="fe/img/post/next.png" alt="">
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div class="blog-author"  id="comment">
                              <div class="media align-items-center">
                                  <img src="upload/users/{{$video->users->image}}" alt="">
                                  <div class="media-body">
                                      <a href="#">
                                          <h4> {{$video->users->fullname}}</h4>
                                      </a>
                                      <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                                  </div>
                              </div>
                          </div>
                          <div class="comments-area">
                              <h4>{{count($video->comments)}} Comments</h4>
                              @foreach ($video->comments as $cm)
                              <div class="comment-list">
                                  <div class="single-comment justify-content-between d-flex">
                                      <div class="user justify-content-between d-flex">
                                          <div class="thumb">
                                              <img src="upload/users/{{$cm->user->image}}" alt="">
                                          </div>
                                          <div class="desc">
                                              <div class="d-flex justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                      <h5>
                                             <a href="#">{{$cm->user->fullname}}</a>
                                          </h5>
                                                      <p class="date">{{$cm->created_at}}</p>
                                                  </div>
                                                  <div class="reply-btn">
                                                      <a href="#" data-toggle="modal" data-target="#myModal" class="btn-reply text-uppercase">reply</a>
                                                  @include('fe/pages/modal')
                                                    </div>
                                              </div>
                                              <p class="comment">
                                                  {{$cm->content}}
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                          <div class="comment-form">
                              <h4>Bình luận bài viết</h4>
                              <form class="form-contact comment_form" action="/video/comment/{{$video->id}}" method="POST" id="commentForm">
                                {{ csrf_field() }}
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <textarea style="border-color: #fe5c24;" class="form-control w-100" name="content" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="button button-contactForm btn_1">Post Comment</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--================ Blog Area end =================-->
@endsection
@section('script')
    
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
@endsection