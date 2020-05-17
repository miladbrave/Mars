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
                @foreach($countryuni as $countries)    @endforeach

                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">{{$countries->country}}</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">دانشگاه ها</a></li>
                        <li>{{$countries->country}}</li>
                    </ul>
                </div>
                <!-- BREADCRUMB ROW END -->
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
                        <div class="section-content mt-5">
                            <div class="text-left m-b30">
                                <h4 class="widget-title">لیست دانشگاه های کشور {{$countries->country}}</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                            </div>
                            <div class=text-center">
                                <div class=" wt-list-panel mt-5 m-b30  p-a20 bg-white shadow">
                                    <div class="wt-list-single-about-detail">
                                        <div class="row">
                                            @foreach($countryuni as $countries)
                                                <div class="col-md-3">
                                                    <a href="{{route('university',['name' => $countries->country,'uni'=>$countries->title])}}">
                                                        <img src="{{$countries->photos[0]->path}}" width="250px"
                                                             height="170px"
                                                             style="width: 250px;height: 170px">
                                                        <h4 class="wt-list-panel-title m-t0 text-center"
                                                            style="font-size:22px;font-family: IRANSansWeb , sans-serif;">{{$countries->titlefa}}</h4>
                                                        <h5 class="wt-list-panel-title m-t0 text-center"
                                                            style="font-size:18px;font-family: Roboto , sans-serif;">{{$countries->titlela}}</h5>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pr-5">
                        <div class="wt-list-single-about-detail">
                            <div class="text-left m-b30 mt-5">
                                <h4 class="widget-title"> دانشگاه های {{$countries->country}}</h4>
                                <div class="wt-separator sep-gradient-light"></div>
                            </div>
                            <div class="wt-similar-listing">
                                @foreach($uniName->where('country',$countries->country) as $university )
                                    <div class="wt-similar-listing-box clearfix mt-5">
                                        <a href="{{route('university',['name' => $countries->country,'uni'=>$university->title])}}">
                                            <div class="wt-similar-listing-media">
                                                @foreach($logos->where('university_id',$university->id) as $logo)
                                                    <img src="{{($logo->path)}}" alt=""  style="height: auto;width: 80%">
                                                @endforeach
                                            </div>
                                            <div class="wt-similar-listing-info">
                                                <div class="wt-similar-listing-header">
                                                    <h4 class="wt-list-panel-title m-t0 text-center"
                                                        style="font-size:16px;font-family: IRANSansWeb , sans-serif;">{{$university->titlefa}}</h4>
                                                    <h5 class="wt-list-panel-title m-t0 text-center"
                                                        style="font-size:14px;font-family: Roboto , sans-serif;">{{$university->titlela}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                @if(Session::has('comment'))
                    <div class="alert alert-success" style="float: right;text-align: center;width: 100%">
                        <div>{{ Session('comment') }}</div>
                    </div>
                @endif

                <div class="container col-md-11 mt-5"
                     style="text-align: right ;direction: rtl;width: 100%;;padding: 25px;">
                    <div class="row">
                        <div class="card my-4" style="width: 60%">
                            <h5 class="card-header">نظرات</h5>
                            <div class="card-body">
                                <form method="post" action="{{route('comment.exam',[$exams->id])}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="name" class="form-control"></div>
                                    <div class="form-group">
                                        <label>متن پیام</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </form>
                            </div>
                        </div>
                        @include('front.partial')
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
