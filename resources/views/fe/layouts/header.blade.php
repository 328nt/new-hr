
   <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-skype"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                            <span><i class="flaticon-phone-call"></i>Line: 2442</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html"> <img height="100px" src="fe/img/logo_ieg.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item {{ request()->is('index.html*') ? 'active' : '' }}">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about')}}">Recources</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('news')}}">News</a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Department
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($departments as $department)
                                        <a class="dropdown-item" href="department/{{$department->id}}">{{$department->name}}</a>
                                            @endforeach
                                        </div>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Training
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="top_place.html">Hội nhập</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="tour_details.html">Văn hóa công ty</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="elements.html">Nghiệp vụ</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="elements.html">khác..</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Quy trình
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                                @foreach ($departments as $department)
                                                <a class="dropdown-item" href="department/{{$department->id}}">{{$department->name}}</a>
                                                    @endforeach
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Gallery
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="top_place.html">Ảnh</a>
                                            <a class="dropdown-item"  href="gallery_videos">Video</a>
                                        </div>
                                    </li>
                                    
                        <li class="dropdown dropdown-user">
                                <a class="nav-link link" data-toggle="dropdown">
                                    <img height="20px" src="upload/users/{{Auth::user()->image}}" />
                                    <span></span>{{Auth::user()->fullname}}<i class="fa fa-angle-down m-l-5"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="staff/account/{{Auth::user()->id}}"><i class="fa fa-user"></i>Profile</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-cog"></i>Settings</a>
                                    <li class="dropdown-divider"></li>
                                    <a class="dropdown-item" href="staff/logout"><i class="fa fa-power-off"></i>Logout</a>
                                </ul>
                            </li>
                                </ul>
                            </div>
                            {{-- <a href="#" class="btn_1 d-none d-lg-block">book now</a> --}}
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>