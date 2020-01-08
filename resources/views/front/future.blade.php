@extends('front.master.master')

@section('nav')
    <header class="site-header header-style-2 mobile-sider-drawer-menu">
        <div class="main-bar-wraper  navbar-expand-lg">
            <div class="main-bar bg-white">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                                <img src="{{asset('/image/logo.jpg')}}" width="130px" height="80px" alt=""/>
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
                            <li>
                                <a href="javascript:;">آزمون ها</a>
                                <ul class="sub-menu">
                                    @foreach($examCountry as $examCountrys)
                                        <li><a href="javascript:;">{{$examCountrys->country}}</a>
                                            <ul class="sub-menu">
                                                @foreach($exam as $exams)
                                                    @if($exams->country == $examCountrys->country)
                                                        <li>
                                                            <a href="{{route('getExam',['name' => $exams->title])}}">{{$exams->title}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">دانشگاه ها</a>
                                <ul class="sub-menu">
                                    @foreach($uniCountry as $uniCountrys)
                                        <li><a href="javascript:;">{{$uniCountrys->country}}</a>
                                            <ul class="sub-menu">
                                                @foreach($uniName as $uniNames)
                                                    @if($uniNames->country == $uniCountrys->country)
                                                        <li>
                                                            <a href="{{route('uni',['name' => $uniNames->title])}}">{{$uniNames->title}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
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
                        <h2 class="text-white">دانشجویان</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">دانشجویان</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <div class="section-full p-t80 p-b50 bg-orange-light">
        <div class="container">
            <div class="section-content">
                <div class="section-head text-center">
                    <h2>من زهرا سادات هستم</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <blockquote class="bg-orange-light">
                        <i class="fa fa-quote-left font-20"></i>
                        <h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</h4>
                    </blockquote>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-right">
                            <h3 class="wt-title m-t0">موفقیت معمولاً برای کسانی صورت می گیرد که مشغول جستجوی آن
                                هستند</h3>
                            <p><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</strong></p>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                در زبان فارسی ایجاد کرد</p>
                            <ol class="list-num-count  m-b30">
                                <li>
                                    <span>۱</span>
                                    <h5> پیش برد زندگی و تحویل مراقبت های بهداشتی.</h5></li>
                                <li>
                                    <span>۲</span>
                                    <h5> متعهد به بهبود زندگی بیماران در سراسر جهان است.</h5></li>
                                <li>
                                    <span>۳</span>
                                    <h5> ایجاد ایده ها و ساخت مارک هایی که واقعاً مهم هستند.</h5></li>
                                <li>
                                    <span>۴</span>
                                    <h5> هر داستان بی نظیر است. هر خانه متفاوت است.</h5></li>
                            </ol>
                            <h3 class="wt-title m-t0">موفقیت معمولاً برای کسانی صورت می گیرد که مشغول جستجوی آن
                                هستند</h3>
                            <p><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</strong></p>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                در زبان فارسی ایجاد کرد</p>
                            <ol class="list-num-count  m-b30">
                            <div class="text-left">
                                <a href="#" class="site-button-secondry site-btn-effect" data-hover="Read More">مشاهده
                                    همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-work">
                            <div class="video-section-dark">
                                <img src="{{asset('/front/images/video-pic.png')}}" alt="">
                                <img class="mt-2" src="{{asset('/front/images/video-pic.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
