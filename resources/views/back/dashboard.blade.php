<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>


    <title>MarsHolding | dashboard Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/fontawesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/range-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/m-custom-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/loader.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/flaticon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/cluster-css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/back/dropzone.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">

</head>

<body>

<div class="page-wraper">

    <header id="header-admin-wrap" class="header-admin-fixed">
        <div id="header-admin">
            <div class="container">
                <div class="header-left">
                    <div class="nav-btn-wrap">
                        <a class="nav-btn-admin" id="sidebarCollapse">
                            <span class="sl-icon-arrow-right-circle"></span>
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="header-widget-wrap">
                        <li class="header-widget dashboard-message-dropdown">
                            <div class="listkhoj-admin-messange wt-toogle-btn">
                                <i class="im-icon-Envelope"></i>
                                <span class="notification-animate">4</span>
                            </div>
                            <div class="dashboard-message-panel">
                                <div class="dashboard-widgets-header">پیام کاربر</div>
                                <div class="message-list dashboard-widget-scroll">
                                    <ul>
                                        <li class="clearfix">
                                                <span class="msg-avtar">
                                                    <img src="images/user-avtar/pic1.jpg" alt="">
                                                </span>

                                            <div class="msg-texting">
                                                <strong>الکسا جانسون</strong>
                                                <small class="msg-time">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 دقیقه قبل
                                                </small>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                                <span class="msg-avtar">
                                                    <img src="images/user-avtar/pic2.jpg" alt="">
                                                </span>

                                            <div class="msg-texting">
                                                <strong>یوهان اسمیت</strong>
                                                <small class="msg-time">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 دقیقه قبل
                                                </small>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                                <span class="msg-avtar">
                                                    <img src="images/user-avtar/pic3.jpg" alt="">
                                                </span>

                                            <div class="msg-texting">
                                                <strong>بابی براون</strong>
                                                <small class="msg-time">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 دقیقه قبل
                                                </small>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                                <span class="msg-avtar">
                                                    <img src="images/user-avtar/pic4.jpg" alt="">
                                                </span>

                                            <div class="msg-texting">
                                                <strong>دیوید دئو</strong>
                                                <small class="msg-time">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 دقیقه قبل
                                                </small>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="message-view-all">
                                        <span>مشاهده همه</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-widget dashboard-noti-dropdown">
                            <div class="listkhoj-admin-notification wt-toogle-btn">
                                <i class="im-icon-Bell"></i>
                                <span class="notification-animate">8</span>
                            </div>

                            <div class="dashboard-noti-panel">
                                <div class="dashboard-widgets-header">شما 7 اعلان دارید</div>
                                <div class="noti-list dashboard-widget-scroll">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">سفارش جدید دریافت شد</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">استیو به عکس شما امتیاز داده است</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">جان شما را به موارد دلخواه خود افزود</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">سند جدید موجود است</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting"> تصویر جدید اضافه شد</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">جلسه در 1 ساعت</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">سرور 5 بار بیش از حد</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="noti-icon"><i class="sl-icon-bell"></i></span>
                                                <span class="noti-texting">بیل در مورد پست خود نظر دهید</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="noti-view-all">
                                        <span>مشاهده همه</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-widget">
                            <div class="listing-user-outer dashboard-user-section">
                                <div class="listing-user">
                                    <div class="user-name text-black"><span><img src="{{asset('/image/admin.png')}}"
                                                                                 alt=""></span>{{auth()->user()->name}}
                                    </div>
                                    <ul>
                                        <li><a href="{{route('main')}}"><i class="sl-icon-logout "></i>خروج </a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav id="sidebar-admin-wraper">
        <div class="page-logo">
            <a href=""><img src="" alt=""></a>
        </div>
        <div class="admin-nav">
            <ul class="">
                <li class="active">
                    <a href="{{route('dashboard')}}"><i class="sl-icon-speedometer"></i><span class="admin-nav-text">داشبورد</span></a>
                </li>
                <li>
                    <a href="{{route('message')}}"><i class="sl-icon-envelope-open "></i><span class="admin-nav-text">پیام ها</span></a>
                </li>
                <li>
                    <a href="{{route('slider.index')}}"><i class="sl-icon-shuffle "></i><span class="admin-nav-text">اسلایدر ها</span></a>
                </li>
                <li>
                    <a href="{{route('exam.index')}}"><i class="sl-icon-docs "></i><span
                            class="admin-nav-text">آزمون ها</span></a>
                </li>
                <li>
                    <a href="{{route('country.index')}}"><i class="sl-icon-flag "></i><span class="admin-nav-text">کشور ها</span></a>
                </li>
                <li>
                    <a href="{{route('university.index')}}"><i class="sl-icon-wallet "></i><span class="admin-nav-text">دانشگاه ها</span></a>
                </li>
                <li>
                    <a href="{{route('question.index')}}"><i class="sl-icon-layers "></i><span class="admin-nav-text">سوالات</span></a>
                </li>
                <li>
                    <a href=""> <i class="sl-icon-star "></i><span class="admin-nav-text">اخبار</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{route('news.titleIndex')}}"><i class="sl-icon-list "></i><span
                                    class="admin-nav-text">متون</span></a></li>
                        <li><a href="{{route('news.index')}}"><i class="sl-icon-note "></i><span
                                    class="admin-nav-text">اخبار</span></a></li>
                        <li><a href="{{route('news.vit.index')}}"><i class="sl-icon-magic-wand "></i><span
                                    class="admin-nav-text">اخبار ویترین</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('comment.index')}}"><i class="sl-icon-heart "></i><span class="admin-nav-text">کامنت ها</span></a>
                </li>
                <li>
                    <a href=""><i class="sl-icon-plus "></i><span class="admin-nav-text">فرم ها</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{route('cons')}}"><i class="sl-icon-envelope-open "></i><span
                                    class="admin-nav-text">وقت مشاوره</span></a></li>
                        <li><a href="{{route('eval')}}"><i class="sl-icon-envelope-open "></i><span
                                    class="admin-nav-text">ارزشیابی</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="sl-icon-diamond "></i><span class="admin-nav-text">آموزشگاه</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{route('ins.index')}}"><i class="sl-icon-people"></i><span class="admin-nav-text">لیست نفرات</span></a></li>
                        <li><a href="{{route('ins.video')}}"><i class="sl-icon-anchor"></i><span class="admin-nav-text">کلاس آنلاین</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('main')}}"><i class="sl-icon-logout "></i><span class="admin-nav-text">خروج</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div id="content">
        <div class="content-admin-main">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body wt-panel-body gradi-1 dashboard-card text-white p-tb60 p-lr30 radius-md">
                            <div class="wt-card-wrap">
                                <div class="wt-card-icon"><i class="sl-icon-location"></i></div>
                                <div class="wt-card-right wt-total-active-listing counter ">{{$news2}}</div>
                                <div class="wt-card-bottom ">
                                    <h4 class="m-b0">مجموع اخبار</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body wt-panel-body gradi-2 dashboard-card text-white p-tb60 p-lr30 radius-md">
                            <div class="wt-card-wrap">
                                <div class="wt-card-icon"><i class="sl-icon-chart"></i></div>
                                <div class="wt-card-right  wt-total-listing-view counter ">{{$user}}</div>
                                <div class="wt-card-bottom">
                                    <h4 class="m-b0">ثبت نام کنندگان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body wt-panel-body gradi-3 dashboard-card text-white p-tb60 p-lr30 radius-md">
                            <div class="wt-card-wrap">
                                <div class="wt-card-icon"><i class="sl-icon-people"></i></div>
                                <div class="wt-card-right wt-total-listing-review counter ">{{$com}}</div>
                                <div class="wt-card-bottom">
                                    <h4 class="m-b0">کامنت ها</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body wt-panel-body gradi-4 dashboard-card text-white p-tb60 p-lr30 radius-md">
                            <div class="wt-card-wrap">
                                <div class="wt-card-icon"><i class="sl-icon-heart"></i></div>
                                <div class="wt-card-right wt-total-listing-bookmarked counter ">37</div>
                                <div class="wt-card-bottom">
                                    <h4 class="m-b0">بارگذاری شده</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')

        </div>
    </div>
</div>


<!-- JAVASCRIPT  FILES ========================================= -->
<script src="{{asset('/front/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('/front/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('/front/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script src="{{asset('/front/js/range-slider.min.js')}}"></script><!-- Form js -->
<script src="{{asset('/front/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{asset('/front/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('/front/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('/front/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script src="{{asset('/front/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script src="{{asset('/front/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('/front/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{asset('/back/dropzone.js')}}"></script><!-- IMAGE UPLOAD  -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
<script src="{{asset('/front/js/infobox.min.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('/front/js/markerclusterer.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('/front/js/maps.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('/front/js/map-cluster-rating.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('/front/js/m-custom-scrollbar.min.js')}}"></script><!-- my account left panel scroller -->
<script src="{{asset('/front/js/kinetic.js')}}"></script>
<script src="{{asset('/front/js/jquery.final-countdown.js')}}"></script>
<script src="{{asset('/front/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


@yield('script')

</body>

</html>
