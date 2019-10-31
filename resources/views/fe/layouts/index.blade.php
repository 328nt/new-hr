<!doctype html>
<html lang="en">
 <!-- 
         __________ ____    ____  _______
        (____   ____)_  \  / _  \__    ___)
            |  | |  | \  |  /_\  \ |  |
            |  | |  | /  | /___\  \|  |
            |__| |_____ /_/     \__\__|
 -->


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HRM | @yield('title')</title>
<base href="{{asset("")}}">
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="fe/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="fe/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="fe/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="fe/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="fe/css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fe/fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="fe/css/magnific-popup.css">
    <link rel="stylesheet" href="fe/css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="fe/css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="fe/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="fe/css/style.css">
    {{-- datatable --}}
    <link href="assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

</head>

<body>
    @include('fe/pages/modal')
   <!--::header part start::-->
   @include('fe/layouts/header')
    <!-- Header part end-->
    @yield('content')
    <!-- footer part start-->
    @include('fe/layouts/footer')
    <!-- footer part end-->

    
    <!-- jquery plugins here-->
    <script src="fe/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="fe/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="fe/js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="fe/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="fe/js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="fe/js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="fe/js/jquery.nice-select.min.js"></script>
    <script src="fe/js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="fe/js/jquery.ajaxchimp.min.js"></script>
    <script src="fe/js/jquery.form.js"></script>
    <script src="fe/js/jquery.validate.min.js"></script>
    <script src="fe/js/mail-script.js"></script>
    <script src="fe/js/contact.js"></script>
    <script src="fe/js/slick.min.js"></script>
    <!-- custom js -->
    @yield('script')
    <script src="fe/js/custom.js"></script>
</body>

</html>