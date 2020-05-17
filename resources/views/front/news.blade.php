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
                                            <a href="{{route('getExam',['name' => $exams->title])}}"
                                               style="font-family: Roboto, sans-serif;float: left">{{$exams->title}}</a>
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
                <div class="news-head1">
                    <h3 class="text-white text-center mt-4">اخبار آزمون ها</h3>
                </div>
                @if($news)
                    @foreach($news->where('select','آزمون') as $new)
                        <div class=" wt-list-panel mt-1 m-b1 p-a5 bg-white shadow">
                            <div class="wt-list-single-about-detail">
                                <div class="m-b30 text-left">
                                    <a href="{{route('news-self',['name'=>$new->slug])}}">
                                        <h5 style="font-size: 15px; font-weight: 500;font-family: IRANSans_Light_2 , sans-serif"
                                            class="wt-list-panel-title m-t0">{{$new->titlefa}}</h5></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                <div class="news-head2">
                    <h3 class="text-white text-center mt-4">اخبار دانشگاه ها</h3>
                </div>
                @foreach($news->where('select','دانشگاه') as $new)
                    <div class=" wt-list-panel mt-1 m-b1 p-a5 bg-white shadow">
                        <div class="wt-list-single-about-detail">
                            <div class="m-b30 text-left">
                                <a href="{{route('news-self',['sel' => 'دانشگاه','exam'=>$new->slug])}}">
                                    <h5 style="font-size: 15px; font-weight: 500;font-family: IRANSans_Light_2 , sans-serif"
                                        class="wt-list-panel-title m-t0">{{$new->title}}</h5></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                <div class="news-head3">
                    <h3 class="text-white text-center mt-4">اخبار دوره ها</h3>
                </div>
                @foreach($news->where('select','دوره') as $new)
                    <div class=" wt-list-panel mt-1 m-b1 p-a5 bg-white shadow">
                        <div class="wt-list-single-about-detail">
                            <div class="m-b30 text-left">
                                <a href="{{route('news-self',['sel' => 'دوره','exam'=>$new->slug])}}">
                                    <h5 style="font-size: 15px; font-weight: 500;font-family: IRANSans_Light_2 , sans-serif"
                                        class="wt-list-panel-title m-t0">{{$new->title}}</h5></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
