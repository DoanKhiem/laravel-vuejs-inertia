<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 15:28:49 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('frontend') }}/images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('frontend') }}/css/dataTables.bootstrap4.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ url('frontend') }}/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('frontend') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('frontend') }}/css/responsive.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ url('frontend') }}/css/fontawesome.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center"></div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
{{--    @include('backend.layouts.sidebar')--}}
<!-- Sidebar END -->
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                            <img src="{{ url('frontend' )}}/images/logo.png" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Booksto</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                            <img src="{{ url('frontend' )}}/images/logo.png" class="img-fluid rounded-normal" alt="">
                            <div class="logo-title">
                                <span class="text-primary text-uppercase">Booksto</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        {{--                    <li class="nav-item nav-icon search-content">--}}
                        {{--                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">--}}
                        {{--                            <i class="ri-search-line"></i>--}}
                        {{--                        </a>--}}
                        {{--                        <form action="#" class="search-box p-0">--}}
                        {{--                            <input type="text" class="text search-input" placeholder="Type here to search...">--}}
                        {{--                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>--}}
                        {{--                        </form>--}}
                        {{--                    </li>--}}
                        {{--                    <li class="nav-item nav-icon">--}}
                        {{--                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">--}}
                        {{--                            <i class="ri-notification-2-line"></i>--}}
                        {{--                            <span class="bg-primary dots"></span>--}}
                        {{--                        </a>--}}
                        {{--                        <div class="iq-sub-dropdown">--}}
                        {{--                            <div class="iq-card shadow-none m-0">--}}
                        {{--                                <div class="iq-card-body p-0">--}}
                        {{--                                    <div class="bg-primary p-3">--}}
                        {{--                                        <h5 class="mb-0 text-white">All Notifications<small--}}
                        {{--                                                class="badge  badge-light float-right pt-1">4</small></h5>--}}
                        {{--                                    </div>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/01.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Emma Watson Barry</h6>--}}
                        {{--                                                <small class="float-right font-size-12">Just Now</small>--}}
                        {{--                                                <p class="mb-0">95 MB</p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/02.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">New customer is join</h6>--}}
                        {{--                                                <small class="float-right font-size-12">5 days ago</small>--}}
                        {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/03.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Two customer is left</h6>--}}
                        {{--                                                <small class="float-right font-size-12">2 days ago</small>--}}
                        {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/04.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">New Mail from Fenny</h6>--}}
                        {{--                                                <small class="float-right font-size-12">3 days ago</small>--}}
                        {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </li>--}}
                        {{--                    <li class="nav-item nav-icon dropdown">--}}
                        {{--                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">--}}
                        {{--                            <i class="ri-mail-line"></i>--}}
                        {{--                            <span class="bg-primary dots"></span>--}}
                        {{--                        </a>--}}
                        {{--                        <div class="iq-sub-dropdown">--}}
                        {{--                            <div class="iq-card shadow-none m-0">--}}
                        {{--                                <div class="iq-card-body p-0 ">--}}
                        {{--                                    <div class="bg-primary p-3">--}}
                        {{--                                        <h5 class="mb-0 text-white">All Messages<small--}}
                        {{--                                                class="badge  badge-light float-right pt-1">5</small></h5>--}}
                        {{--                                    </div>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/01.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Barry Emma Watson</h6>--}}
                        {{--                                                <small class="float-left font-size-12">13 Jun</small>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/02.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>--}}
                        {{--                                                <small class="float-left font-size-12">20 Apr</small>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/03.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Why do we use it?</h6>--}}
                        {{--                                                <small class="float-left font-size-12">30 Jun</small>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/04.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Variations Passages</h6>--}}
                        {{--                                                <small class="float-left font-size-12">12 Sep</small>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                    <a href="#" class="iq-sub-card">--}}
                        {{--                                        <div class="media align-items-center">--}}
                        {{--                                            <div class="">--}}
                        {{--                                                <img class="avatar-40 rounded"--}}
                        {{--                                                     src="{{ url('frontend' )}}/images/user/05.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="media-body ml-3">--}}
                        {{--                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>--}}
                        {{--                                                <small class="float-left font-size-12">5 Dec</small>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </li>--}}
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                <i class="ri-shopping-cart-2-line"></i>
                                <span class="badge badge-danger count-cart rounded-circle">4</span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 toggle-cart-info">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white">All Carts<small
                                                    class="badge  badge-light float-right pt-1">4</small></h5>
                                        </div>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ url('frontend' )}}/images/cart/01.jpg"
                                                         alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Night People book</h6>
                                                    <p class="mb-0">$32</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ url('frontend' )}}/images/cart/02.jpg"
                                                         alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">The Sin Eater Book</h6>
                                                    <p class="mb-0">$40</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ url('frontend' )}}/images/cart/03.jpg"
                                                         alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">the Orange Tree</h6>
                                                    <p class="mb-0">$30</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="rounded" src="{{ url('frontend' )}}/images/cart/04.jpg"
                                                         alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Harsh Reality book</h6>
                                                    <p class="mb-0">$25</p>
                                                </div>
                                                <div class="float-right font-size-24 text-danger"><i
                                                        class="ri-close-fill"></i></div>
                                            </div>
                                        </a>
                                        <div class="d-flex align-items-center text-center p-3">
                                            <a class="btn btn-primary mr-2 iq-sign-btn" href="#" role="button">View
                                                Cart</a>
                                            <a class="btn btn-primary iq-sign-btn" href="#" role="button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
@include('backend.layouts.footer')
<!-- Footer END -->
<!-- color-customizer -->
{{--@include('backend.layouts.colorbox')--}}
<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('frontend') }}/js/jquery.min.js"></script>
<script src="{{ url('frontend') }}/js/popper.min.js"></script>
<script src="{{ url('frontend') }}/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="{{ url('frontend') }}/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="{{ url('frontend') }}/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="{{ url('frontend') }}/js/waypoints.min.js"></script>
<script src="{{ url('frontend') }}/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="{{ url('frontend') }}/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ url('frontend') }}/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="{{ url('frontend') }}/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="{{ url('frontend') }}/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ url('frontend') }}/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ url('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ url('frontend') }}/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="{{ url('frontend') }}/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="{{ url('frontend') }}/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="{{ url('frontend') }}/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="{{ url('frontend') }}/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="{{ url('frontend') }}/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="{{ url('frontend') }}/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="{{ url('frontend') }}/js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="{{ url('frontend') }}/js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="{{ url('frontend') }}/js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="{{ url('frontend') }}/js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="{{ url('frontend') }}/js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="{{ url('frontend') }}/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ url('frontend') }}/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="{{ url('frontend') }}/js/custom.js"></script>

@yield('js')
</body>


</html>
