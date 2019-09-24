@extends('fe/layouts/index')
@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>Department</h2>
                        <p>{{$department->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
{{--     
        <!-- about us css start-->
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_img">
                            <img src="fe/img/about_img.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_text">
                            <h5>Who we are</h5>
                            <h2>We love to discover around the world</h2>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us css end-->
    
        <!--top place start-->
        <section class="event_part section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="event_slider owl-carousel" >
                            <div class="single_event_slider">
                                <div class="row justify-content-end">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="event_slider_content">
                                            <h5>Upcoming Event</h5>
                                            <h2>Maldeve - Asia</h2>
                                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                            </p>
                                            <p>date: <span>12 Aug 2019</span> </p>
                                            <p>Cost: <span>Start from $820</span> </p>
                                            <p>Organizer: <span> Martine Agency</span> </p>
                                            <div class="rating">
                                                <span>Rating:</span>
                                                <div class="place_review">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn_1">Plan Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_event_slider">
                                <div class="row justify-content-end">
                                    <div class="ol-lg-6 col-md-6">
                                        <div class="event_slider_content">
                                            <h5>Upcoming Event</h5>
                                            <h2>Maldeve - Asia</h2>
                                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                            </p>
                                            <p>date: <span>12 Aug 2019</span> </p>
                                            <p>Cost: <span>Start from $820</span> </p>
                                            <p>Organizer: <span> Martine Agency</span> </p>
                                            <div class="rating">
                                                <span>Rating:</span>
                                                <div class="place_review">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn_1">Plan Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_event_slider">
                                <div class="row justify-content-end">
                                    <div class="ol-lg-6 col-md-6">
                                        <div class="event_slider_content">
                                            <h5>Upcoming Event</h5>
                                            <h2>Maldeve - Asia</h2>
                                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                            </p>
                                            <p>date: <span>12 Aug 2019</span> </p>
                                            <p>Cost: <span>Start from $820</span> </p>
                                            <p>Organizer: <span> Martine Agency</span> </p>
                                            <div class="rating">
                                                <span>Rating:</span>
                                                <div class="place_review">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                </div>
                                            </div>
                                            <a href="#" class="btn_1">Plan Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--top place end--> --}}

<!--::industries start::-->
<section class="best_services section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>{{$department->name}}</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales
                        grass is fish whales winged.</p>
                </div>
            </div>
        </div>



        <div class="ibox">
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Staff Code</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Birth</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Staff Code</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Birth</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                            @foreach ($usersid as $user)
                            <tr>
                                <td>{{$user->fullname}}</td>
                                <td><img width="100px" height="100px" src="upload/users/{{$user->image}}" alt=""></td>
                                <td>{{$user->staff_code}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->position->name}}</td>
                                <td>{{$user->department->name}}</td>
                                <td>{{$user->birthday}}</td>
                            </tr>
                            @endforeach
                        
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                            <td>$98,540</td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--::industries end::-->

<!--top place start-->
<section class="client_review section_padding">
    <div class="container">
        <div class="row ">
            <div class="col-xl-6">
                <div class="section_tittle">
                    <h2>What they said</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client_review_slider owl-carousel">
                    <div class="single_review_slider">
                        <div class="place_review">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>"chúng tôi tin rằng, đích đến thật sự không phải là những thành công trước mắt, mà là chân trời rộng mở ngày ra biển lớn, nơi các em phải tự bước đi bằng chính nội lực và bản lĩnh của mình.</p>
                        <h5> - Tiến sĩ Nguyễn Chí Hiếu</h5>
                    </div>
                    <div class="single_review_slider">
                        <div class="place_review">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>"chúng tôi tin rằng, đích đến thật sự không phải là những thành công trước mắt, mà là chân trời rộng mở ngày ra biển lớn, nơi các em phải tự bước đi bằng chính nội lực và bản lĩnh của mình.</p>
                        <h5> - Tiến sĩ Nguyễn Chí Hiếu</h5>
                    </div>
                    <div class="single_review_slider">
                        <div class="place_review">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>"chúng tôi tin rằng, đích đến thật sự không phải là những thành công trước mắt, mà là chân trời rộng mở ngày ra biển lớn, nơi các em phải tự bước đi bằng chính nội lực và bản lĩnh của mình.</p>
                        <h5> - Tiến sĩ Nguyễn Chí Hiếu</h5>
                    </div>
                    <div class="single_review_slider">
                        <div class="place_review">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>"chúng tôi tin rằng, đích đến thật sự không phải là những thành công trước mắt, mà là chân trời rộng mở ngày ra biển lớn, nơi các em phải tự bước đi bằng chính nội lực và bản lĩnh của mình.</p>
                        <h5> - Tiến sĩ Nguyễn Chí Hiếu</h5>
                    </div>
                    <div class="single_review_slider">
                        <div class="place_review">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <p>"chúng tôi tin rằng, đích đến thật sự không phải là những thành công trước mắt, mà là chân trời rộng mở ngày ra biển lớn, nơi các em phải tự bước đi bằng chính nội lực và bản lĩnh của mình.</p>
                        <h5> - Tiến sĩ Nguyễn Chí Hiếu</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--top place end-->

<!--::gallery part start::-->
<!--::gallery part end::-->
@endsection
@section('script')
<script src="assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
</script>
@endsection