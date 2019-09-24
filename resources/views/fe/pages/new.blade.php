@extends('fe/layouts/index')
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
                      <div class="col-lg-8 posts-list">
                          <div class="single-post">
                              <div class="feature-img">
                                  <img class="img-fluid" src="upload/news/{{$new->image}}" alt="">
                              </div>
                              <div class="blog_details">
                                  <h2>{{$new->title}}
                           </h2>
                                  <ul class="blog-info-link mt-3 mb-4">
                                      <li><a href="staff/account/{{$new->users->id}}"><i class="far fa-user"></i> {{$new->users->fullname}}</a></li>
                                      <li><a href="#comment"><i class="far fa-comments"></i> {{count($new->comments)}} Comments</a></li>
                                  </ul>
                                  {!! $new->content !!}
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
                                          <div class="thumb">
                                              <a href="news/{{$previous}}">
                                                  <img class="img-fluid" src="fe/img/post/preview.png" alt="">
                                              </a>
                                          </div>
                                          <div class="arrow">
                                              <a href="news/{{$previous}}">
                                                  <span class="lnr text-white ti-arrow-left"></span>
                                              </a>
                                          </div>
                                          <div class="detials">
                                              <p>Prev Post</p>
                                              <a href="news/{{$previous}}">
                                                  <h4>{{$previous}}</h4>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                          <div class="detials">
                                              <p>Next Post</p>
                                              <a href="news/{{$next}}">
                                                  <h4>Telescopes 101</h4>
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
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-author"  id="comment">
                              <div class="media align-items-center">
                                  <img src="upload/users/{{$new->users->image}}" alt="">
                                  <div class="media-body">
                                      <a href="#">
                                          <h4> {{$new->users->fullname}}</h4>
                                      </a>
                                      <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                                  </div>
                              </div>
                          </div>
                          <div class="comments-area">
                              <h4>{{count($new->comments)}} Comments</h4>
                              @foreach ($new->comments as $cm)
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
                              <form class="form-contact comment_form" action="comment/{{$new->id}}" method="POST" id="commentForm">
                                {{ csrf_field() }}
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <textarea class="form-control w-100" name="content" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="button button-contactForm btn_1">Post Comment</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="blog_right_sidebar">
                              @include('fe/pages/sidebar_right')
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