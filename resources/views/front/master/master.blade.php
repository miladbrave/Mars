<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('/image/mars-icon2.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/front/images/favicon.png')}}"/>
    <title>MarsHolding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="mars holding,mars,مارس هلدینگ,مارس,">
    <meta name="description"
          content="مارس هلدینگ موسسه مشاوره تحصیلی و علمی در زمینه تحصیل در خارج از کشور و کمک ومشاوره برا ی متقاضیان تحصیل در خارج از کشور می باشد"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="http://www.marsholdingco.com/"/>
    <meta name="subject" content="education web مارس هلدینگ">
    <meta name="copyright" content="مارس هلدینگ مارس هلدینگ marsholding">
    <meta name="language" content="FA">
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="marsholding مارس هلدینگ "/>
    <meta property="og:description"
          content="موسسه مشاوره یمارس هلدینگ موسسه مشاوره تحصیلی و علمی در زمینه تحصیل در خارج از کشور و کمک ومشاوره برا ی متقاضیان تحصیل در خارج از کشور می باشد "/>
    <meta property="og:url" content="http://marsholdingco.com/"/>
    <meta property="og:site_name" content="مارس هلدینگ,marsholding"/>

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/range-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/m-custom-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/loader.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/flaticon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/cluster-css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/self.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/revolution/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/plugins/revolution/revolution/css/navigation.css')}}">
    <link href="{{asset('/front/fancybox/dist/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/back/dropzone.min.css')}}">
</head>

<body>

<div class="page-wraper">
    <header class="site-header header-style-1 mobile-sider-drawer-menu">
        <div class="top-bar site-bg-primary">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="wt-topbar-left d-flex flex-wrap align-content-center">
                        <ul class="wt-topbar-info e-p-bx site-text-secondry">
                            <li><i class="fa fa-envelope text-white"></i>marsholdingco@gmail.com</li>
                            <li><i class="fa fa-phone text-white"></i>984133340136+ | 989360369313+</li>
                        </ul>
                    </div>
                    <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                        <ul class="list-unstyled e-p-bx login-controls">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/profile') }}"
                                           class="text-danger">{{ Auth()->user()->name }}</a>
                                    @else
                                        <li><a href="{{ route('login') }}" class="sign-up-btn"><i class="sl-icon-login m-r10"></i>ورود</a>
                                        </li>
                                        <li><a href="{{ route('register') }}" class="sign-up-btn"><i class="sl-icon-pencil m-r10"></i>ثبت نام</a>
                                        </li>
                                    @endauth
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('nav')
    </header>
    @yield('content')
    <footer class="site-footer footer-large footer-light text-white">
        <div class="footer-top  dot2-left-top-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix p-b15">
                                <a href="{{route('main')}}"><img src="{{asset('/image/main.png')}}" alt=""></a>
                            </div>
                            <p class="mt-3" style="text-align: justify;padding-left: 70px">
                                هلدینگ مشاوره ی مارس با اتکا به تجارب خویش طی سال ها فعالیت در زمینه مشاوره تحصیلی و
                                علمی برای متقاضیان تحصیل در خارج از کشور ،توانسته سابقه درخشان از خود به نمایش
                                گذارد.</p>

                            <div class="widget_social_inks">
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-telegram"></a></li>
                                    <li><a href="https://www.instagram.com/marsholding" class="fa fa-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget_services">
                            <h4 class="widget-title">لینک های مفید</h4>
                            <ul>
                                <li><a href="{{route('about')}}">در باره ما</a></li>
                                <li><a href="{{route('main')}}">خانه</a></li>
                                <li><a href="{{route('question')}}">سوالات متداول </a></li>
                                <li><a href="{{route('news')}}">اخبار</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget recent-posts-entry">
                            <h4 class="widget-title">تماس با ما</h4>
                            <ul class="widget_address">
                                <li><i class="sl-icon-location "></i>تبریز، خیابان آبرسان، طبقه فوقانی قنادی تشریفات،
                                    ساختمان 110، طبقه اول
                                </li>
                                <li><i class="sl-icon-envelope-open "></i>marsholdingco@gmail.com</li>
                                <li><i class="sl-icon-phone "></i>984133340136+</li>
                                <li><i class="sl-icon-phone "></i>989360369313+</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget_gallery mfp-gallery clearfix">
                            <h4 class="widget-title">لینک های مفید</h4>
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic1.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic1.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic2.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic2.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic3.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic3.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic4.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic4.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic5.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic5.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-2">
                                    <div class="wt-post-thum">
                                        <a href="{{asset('/front/images/gallery/pic6.jpg')}}" class="mfp-link"><img
                                                src="{{asset('/front/images/gallery/thumb/pic6.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="wt-footer-bot">
                        <span class="copyrights-text">© 2019 شرکت MarsHolding. کلیه حقوق محفوظ است.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

{{--    <div class="modal fade sign-in-modal" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content" style="margin-top: 20%">--}}
{{--                <div class="sign-in-dialog bg-dark">--}}
{{--                    <div class="sign-in-dialog-header" style="background-color: orangered">--}}
{{--                        <h4 class="dialog-h-title">ورود</h4>--}}
{{--                        <button type="button" class="close  sign-in-popup-close" data-dismiss="modal">&times;</button>--}}
{{--                    </div>--}}
{{--                    <div class="container ">--}}
{{--                        <div class="row justify-content-center ">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="card bg-dark" style="border: 1px solid rgba(0,0,0,0.0);">--}}
{{--                                        <ul class="navbar-nav ml-auto">--}}
{{--                                            @guest--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link text-danger"--}}
{{--                                                       href="{{ route('login') }}">{{ __('ورود') }}</a>--}}
{{--                                                </li>--}}
{{--                                                @if (Route::has('register'))--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a class="nav-link text-danger"--}}
{{--                                                           href="{{ route('register') }}">{{ __('ثبت نام') }}</a>--}}
{{--                                                    </li>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                <li class="nav-item dropdown">--}}
{{--                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"--}}
{{--                                                       role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                                                       aria-expanded="false" v-pre>--}}
{{--                                                        {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                                    </a>--}}

{{--                                                    <div class="dropdown-menu dropdown-menu-right"--}}
{{--                                                         aria-labelledby="navbarDropdown">--}}
{{--                                                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                                            {{ __('خروج') }}--}}
{{--                                                        </a>--}}

{{--                                                        <form id="logout-form" action="{{ route('logout') }}"--}}
{{--                                                              method="POST"--}}
{{--                                                              style="display: none;">--}}
{{--                                                            @csrf--}}
{{--                                                        </form>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            @endguest--}}
{{--                                        </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>


<div class="modal fade preview-place" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close single-preview-popup-close" data-dismiss="modal">&times;</button>
            <div class="single-preview-location">
                <div class="single-preview-location-info">
                    <div class="single-preview-location-left">
                        <div class="list-slide">
                            <div class="wt-media">
                                <img src="{{asset('/front/images/gallery/pic5.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="list-category-content p-a20">
                            <div class="p-b10">
                                <span class="list-cat-featured"><i class="fa fa-star-o"></i> ویژه</span>
                                <span class="list-cat-verified"><i class="fa fa-check"></i> تأیید شده</span>
                            </div>
                            <div class="clearfix">
                                <div class="wt-rating-section p-b10">
                                        <span class="wt-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="wt-rating-conting">(۲۰ بازدید)</span>
                                </div>
                            </div>
                            <h4 class="list-place-name m-b10">رستوران ستاره</h4>

                            <div class="list-cat-phone p-b10"><strong>۰۲۱-۱۲۳۴۵۶۷۸</strong><i
                                    class="sl-icon-phone"></i></div>
                            <div class="list-cat-address p-b10"><i class="sl-icon-location"></i>تبریز، خیابان
                                آبرسان، طبقه فوقانی قنادی تشریفات، ساختمان 110، طبقه اول
                            </div>
                            <div class="single-preview-footer clearfix">
                                <a href="#" class="site-button-link">بیشتر</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-preview-location-right">
                        <div class="single-preview-map">
                            <div id="singleListingMap-container">
                                <div id="singleListingMappopup" data-latitude="40.70437865245596"
                                     data-longitude="-73.98674011230469" data-map-icon="im im-icon-Hamburger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div id="fountainTextG">
            <!--<div id="fountainTextG_1" class="fountainTextG">M</div>-->
            <img class="loader-img" alt="MarsHolding" style="background-color: white" src="{{asset('/image/gf.gif')}}">
        </div>
    </div>
</div>


<!-- JAVASCRIPT  FILES ========================================= -->
<script src="{{asset('front/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('front/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('front/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script src="{{asset('front/js/range-slider.min.js')}}"></script><!-- Form js -->
<script src="{{asset('front/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{asset('front/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('front/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('front/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script src="{{asset('front/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script src="{{asset('/back/dropzone.js')}}"></script><!-- IMAGE UPLOAD  -->

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
<script src="{{asset('front/js/infobox.min.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('front/js/markerclusterer.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('front/js/maps.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('front/js/map-cluster-rating.js')}}"></script><!-- MAP CLUSTER  -->
<script src="{{asset('front/js/m-custom-scrollbar.min.js')}}"></script><!-- my account left panel scroller -->
<script src="{{asset('front/js/kinetic.js')}}"></script>
<script src="{{asset('front/js/jquery.final-countdown.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('front/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>
<script src="{{asset('front/js/rev-script-2.js')}}"></script>
<script src="{{asset('front/js/self.js')}}"></script>
<script src="{{asset('/front/fancybox/dist/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('back/dropzone.min.js')}}"></script><!-- IMAGE UPLOAD  -->

<script>@yield('script')</script>

</body>

</html>
