@extends('front.master.master')

@section('nav')
    <header class="site-header header-style-2 mobile-sider-drawer-menu"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="main-bar-wraper  navbar-expand-lg">
            <div class="main-bar bg-white">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="{{route('main')}}">
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
                            <li class="">
                                <a href="javascript:;">کشور ها</a>
                                <ul class="sub-menu" style="width: 100%">
                                    @foreach($country as $countries)
                                        <li style="display:block;">
                                            <a href="javascript:;">{{$countries->title}}</a>
                                            <ul class="sub-menu">
                                                @foreach($countryMenu as $menu)
                                                    @if($menu->country_name == $countries->title)
                                                        <li><a href="{{route('country',['name'=>$menu->slug])}}">{{$menu->title}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">آزمون ها</a>
                                <ul class="sub-menu">
                                    @foreach($exam as $exams)
                                        <li>
                                            <a href="{{route('getExam',['name' => $exams->title])}}">{{$exams->title}}</a>
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
                        <h2 class="text-white">درباره ما</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">درباره ما</a></li>
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
                    <span class="wt-separator-icon"><i class="sl-icon-location "></i></span>
                    <h2>موسسه مشاوره ای مارس</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>برای موفقیت در هر زمینه ای نیاز به متخصص آن دارید.ما کنار شما هستیم در همه مراحل مهاجرتتان</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-right">
                            <h3 class="wt-title m-t0">موفقیت معمولاً برای کسانی صورت می گیرد که مشغول جستجوی آن
                                هستند</h3>
                            <p>
                                موسسه مشاوره ای مارس به شماره ثبت 4707 با پیشینه ای درخشان در امر مشاوره تحصیلی و اخذ
                                پذیرش و بورسیه تحصیلی با تیم پشتیبانی متخصص که خود از فارغ التحصیلان و استادان بنام
                                دانشگاه های معتبر دنیا هستند، در خدمت عزیزانی است که می‌خواهند با انتخاب درست مسیر،
                                آینده ای درخشان برای خود و کشور عزیزمان ترسیم کنند
                                این موسسه با رویکردی حرفه‌ای، مشخصات و شرایط دانشگاه‌های معتبر دنیا، رشته‌های تحصیلی و
                                بازار کار را بررسی کرده و بر اساس شرایط علمی و خواسته‌های فرد متقاضی به‌روزترین و دقیق
                                ترین اطلاعات را جهت انتخاب رشته تحصیلی، دانشگاه و کشور مطلوب به متقاضیان ارائه می‌دهد
                                امید است این مجموعه با تیم پشتیبانی بزرگ و توانمند نقشی کوچک در آینده درخشان شما داشته
                                باشد
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="how-it-work">
                            <div class="video-section-dark">
                                <img src="{{asset('/image/main.png')}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
