@extends('front.master.master')

@section('nav')
    <header class="site-header header-style-2 mobile-sider-drawer-menu">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <div class="section-full small-device  p-tb80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7 card card-body bg-white">
                    @foreach($news->sortBy('examuni') as $new)
                        <div class="container">
                            <div class="row">
                                @if(isset($new->photo->path))
                                    <div class="col-md-2">
                                        <img class="news-img img-responsive" src="{{$new->photo->path}}" alt="news">
                                    </div>
                                    <div class="col-md-10 newsdes p-3">
                                        <div class="news-des">
                                            <div class="m-b30 text-left">
                                                <h4 class="wt-list-panel-title m-t0" style="font-size:16px;font-family: 'IRANSansWeb' , sans-serif;
                                                        font-weight: bolder;line-height: 1.2">{{$new->titlefa}}</h4>
                                                <h4 class="wt-list-panel-title m-t0" style="font-size:16px;font-family: Roboto  , sans-serif;
                                                        font-weight: bolder;line-height: 1.2">{{$new->titlela}}</h4>
                                                <div class="wt-separator sep-gradient-light mt-4"
                                                     style="margin-top: -10px"></div>
                                            </div>
                                            <p style="margin-top: -20px">{!! $new->description1 !!}</p>
                                            @if($new->description2)
                                                <a href="{{route('news-category',['title'=>$new->slug])}}"
                                                   class="text-info">ادامه خبر</a>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-12 newsdes p-3">
                                        <div class="news-des">
                                            <div class="m-b30 text-left">
                                                <h4 class="wt-list-panel-title m-t0" style="font-size:16px;font-family: 'IRANSansWeb' , sans-serif;
                                                        font-weight: bolder;line-height: 1.2">{{$new->titlefa}}</h4>
                                                <h4 class="wt-list-panel-title m-t0" style="font-size:16px;font-family: Roboto  , sans-serif;
                                                        font-weight: bolder;line-height: 1.2">{{$new->titlela}}</h4>
                                                <div class="wt-separator sep-gradient-light mt-4"
                                                     style="margin-top: -20px"></div>
                                            </div>
                                            <p style="margin-top: -5px">{!! $new->description1 !!}</p>
                                            @if($new->description2)
                                                <a href="{{route('news-category',['title'=>$new->slug])}}"
                                                   class="text-info">ادامه خبر</a>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr style="margin-top: 1%;margin-bottom: 1%;background-color: #525252">
                    @endforeach
                </div>
                <div class="col-md-3" style="padding-right: 40px">
                    <div class="wt-list-single-about-detail">
                        <div class="text-left m-b30">
                            @if(isset($new->country))
                                <h4 class="widget-title"> دانشگاه های {{$new->country}}</h4>
                            @endif
                            <div class="wt-separator sep-gradient-light"></div>
                        </div>
                        <div class="wt-similar-listing">
                            @if(isset($new->country))
                                @foreach($uniName->where('country',$new->country) as $university )
                                    <a href="{{route('university',['name' => $new->country,'uni'=>$university->title])}}">
                                        <div class="wt-similar-listing-box clearfix mt-5">
                                            <div class="wt-similar-listing-media">
                                                @foreach($logos->where('university_id',$university->id) as $logo)
                                                    <img src="{{($logo->path)}}" alt="" style="height: auto;width: 80%">
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
                                        </div>
                                    </a>
                                @endforeach
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
