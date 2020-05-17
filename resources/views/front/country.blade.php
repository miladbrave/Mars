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
                                    @foreach($allcountry as $countries)
                                        <li style="display:block;">
                                            <a href="javascript:;">{{$countries->title}}</a>
                                            <ul class="sub-menu">
                                                @foreach($countryName as $menu)
                                                    @if($menu->country_name == $countries->title)
                                                        <li>
                                                            <a href="{{route('country',['name'=>$menu->slug])}}">{{$menu->title}}</a>
                                                        </li>
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
                @if($country)
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="text-white">{{$country->country_name}}</h2>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">خانه</a></li>
                            <li><a href="">کشور ها</a></li>
                            <li>{{$country->title}}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


@section('content')

    <div class="page-content">
        <div class="section-full p-80 p-b50 bg-white bg-no-repeat"
             style="background-image:url({{asset('/front/images/background/bg-building.png')}})">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @if($country)
                            <div class="section-content mt-5">
                                <div class=text-center">
                                    <div class=" wt-list-panel mt-5 m-b30  p-a20 bg-white shadow">
                                        <div class="wt-list-single-about-detail">
                                            <div class="m-b30 text-left">
                                                <h4 class="wt-list-panel-title m-t0">{{$country->title}}</h4>
                                                <div class="wt-separator sep-gradient-light"></div>
                                            </div>
                                            <p>{!! $country->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card card-header">
                            <ul class="row">
                                @if($country)
                                    @foreach($countryName->where('country_name',$country->country_name) as $name)
                                        <div class="col-md-4">
                                            <a href="{{route('country',['name'=>$name->title])}}" class="text-info">
                                                <li class="mr-5">{{$name->title}}</li>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 pr-5">
                        <div class="wt-list-single-about-detail">
                            <div class="text-left m-b30 mt-5">
                                @if($country)
                                <h4 class="widget-title">دانشگاه های {{$country->country_name}}</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                                    @endif
                            </div>
                            <div class="wt-similar-listing">
                                @if($country)
                                    @foreach($uniName->where('country',$country->country_name) as $university )
                                        <div class="wt-similar-listing-box clearfix mt-5">
                                            <a href="{{route('university',['name' => $university->country,'uni'=>$university->title])}}">
                                                <div class="wt-similar-listing-media">
                                                    @foreach($logos->where('university_id',$university->id) as $logo)
                                                        <img src="{{asset($logo->path)}}" alt="Logo"
                                                             style="height: auto;width: 80%">
                                                    @endforeach
                                                </div>
                                                <div class="wt-similar-listing-info">
                                                    <div class="wt-similar-listing-header">
                                                        <h4 class="wt-list-panel-title m-t0 text-center"
                                                            style="font-size:17px;font-family: IRANSansWeb , sans-serif;">{{$university->titlefa}}</h4>
                                                        <h5 class="wt-list-panel-title m-t0 text-center"
                                                            style="font-size:15px;font-family: Roboto , sans-serif;">{{$university->titlela}}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
