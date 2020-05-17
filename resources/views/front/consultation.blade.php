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
                        <h2 class="text-white">وقت مشاوره</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">وقت مشاوره</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    @if(Session::has('consult'))
        <div class="alert alert-success container" style="float: right;text-align: center;width: 100%">
            <div>{{ Session('consult') }}</div>
        </div>
    @endif

    <div class="container visit">
        <div class="section-head text-center mt-5">
            <h2 class="m-t0">وقت مشاوره</h2>
            <div class="wt-separator sep-gradient-light"></div>
        </div>
        <div class="container col-lg-12 col-md-12 col-sm-12 mb-4 border border-dark rounded-lg p-5">
            <form  method="post" action="{{route('consult')}}">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="name" type="text" required class="form-control" placeholder="نام و نام خانوادگی">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="form-group">
                            <input name="date" type="text" class="form-control" required placeholder="تاریخ تولد">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="form-group">
                            <input name="phone" type="number" class="form-control" required placeholder="تلفن ثابت">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="cell" type="number" class="form-control" required placeholder="تلفن همراه">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="email" type="text" required class="form-control" placeholder="ایمیل">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="country" type="text" required class="form-control" placeholder="کشور مقصد">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="grade" type="text" required class="form-control" placeholder="مقطع مورد نظر">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="des" class="form-control" rows="4" placeholder="پیام"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit"  value="ارسال" class="site-button-secondry site-btn-effect">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
