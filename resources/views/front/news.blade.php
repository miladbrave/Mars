@extends('front.master.master')

@section('nav')
    <header class="site-header header-style-2 mobile-sider-drawer-menu">
        <div class="main-bar-wraper  navbar-expand-lg">
            <div class="main-bar bg-white">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="{{route('main')}}">
                                <img src="{{asset('/image/main.png')}}" width="130px" height="80px" alt=""/>
                            </a>
                        </div>
                    </div>
                    <button id="mobile-side-drawer" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="addlisting-btn-block">
                                <div class="addlisting-btn-content">
                                    <div class="addlisting-btn">ارزیابی رایگان</div>
                                    <ul>
                                        <li><a href="{{route('Consultation')}}"><i class="sl-icon-user "></i>وقت مشاوره</a>
                                        </li>
                                        <li><a href="{{route('validation')}}"><i class="sl-icon-envelope-open "></i> فرم
                                                ارزیابی رایگان</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                        <ul class=" nav navbar-nav offset-3">
                            <li class="">
                                <a href="{{route('main')}}">خانه</a>
                            </li>
                            <li class="">
                                <a href="">کشور ها</a>
                                <ul class="sub-menu">
                                    @foreach($country as $countries)
                                        <li>
                                            <a href="{{route('country',['name'=>$countries->title])}}">{{$countries->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">آزمون ها</a>
                                <ul class="sub-menu">
                                    @foreach($exam as $exams)
                                        <li>
                                            <a href="{{route('getExam',['name' => $exams->title])}}" style="font-family: Roboto, sans-serif;float: left">{{$exams->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">دانشگاه ها</a>
                                <ul class="sub-menu">
                                    @foreach($uniCountry as $uniCountrys)
                                        <li>
                                            <a href="{{route('countryuni',['name' => $uniCountrys->country])}}">{{$uniCountrys->country}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="">
                                <a href="{{route('question')}}">سوالات متداول</a>
                            </li>
                            <li class="">
                                <a href="{{route('news')}}">اخبار</a>
                            </li>
                            <li class="">
                                <a href="{{route('about')}}">درباره ما</a>
                            </li>
                            <li class="">
                                <a href="{{route('contact')}}">تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wt-bnr-inr overlay-wraper bg-center"
         style="margin-top:6%;background-image:url({{asset('/front/images/banner/6.jpg')}});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">اخبار</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">اخبار</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                <div
                    class="blog-post blog-grid-1 overlay-wraper post-overlay  large-date bg-cover bg-no-repeat bg-top-center"
                    style="background-image:url({{asset('/image/news-exams.jpg')}})">
                    <div class="overlay-main overlay-gradient"></div>
                    <div class="blog-category"><span class="clr-red">آزمون</span></div>
                    <div class="wt-post-info text-white">
                        <div class="post-overlay-position">
                            <div class="post-content-outer p-a30">
                                <div class="wt-post-title ">
                                    <h4 class="post-title"><a
                                            href="{{route('news-category',['sel' => 'اخبار-آزمون ها'])}}"
                                            class="text-white text-capitalize">اخبار آزمون های بین المللی</a></h4>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date  site-text-secondry">آخرین اخبار آزمون ها</li>
                                        <li class="post-author"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                <div
                    class="blog-post blog-grid-1 overlay-wraper post-overlay  large-date bg-cover bg-no-repeat bg-top-center"
                    style="background-image:url({{asset('/image/news-university.jpg')}})">
                    <div class="overlay-main overlay-gradient"></div>
                    <div class="blog-category"><span class="clr-red">دانشگاه ها</span></div>
                    <div class="wt-post-info text-white">
                        <div class="post-overlay-position">
                            <div class="post-content-outer p-a30">
                                <div class="wt-post-title ">
                                    <h4 class="post-title"><a
                                            href="{{route('news-category',['sel' => 'اخبار-دانشگاه-ها'])}}"
                                            class="text-white text-capitalize">اخبار دانشگاه ها</a></h4>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date  site-text-secondry">آخرین اخبار دانشگاه ها</li>
                                        <li class="post-author"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                <div
                    class="blog-post blog-grid-1 overlay-wraper post-overlay  large-date bg-cover bg-no-repeat bg-top-center"
                    style="background-image:url({{asset('/image/news-period.jpg')}})">
                    <div class="overlay-main overlay-gradient"></div>
                    <div class="blog-category"><span class="clr-red">دوره ها</span></div>
                    <div class="wt-post-info text-white">
                        <div class="post-overlay-position">
                            <div class="post-content-outer p-a30">
                                <div class="wt-post-title ">
                                    <h4 class="post-title"><a
                                            href="{{route('news-category',['sel' => 'اخبار-دوره ها'])}}"
                                            class="text-white text-capitalize">اخبار دوره ها</a></h4>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date  site-text-secondry">آخرین اخبار دوره ها</li>
                                        <li class="post-author"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
