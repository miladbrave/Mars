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
                                                        <li><a href="{{route('getExam',['name' => $exams->title])}}">{{$exams->title}}</a></li>
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
                                                        <li><a href="{{route('uni',['name' => $uniNames->title])}}">{{$uniNames->title}}</a></li>
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
                @foreach($examSelf as $exams)
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="text-white">{{$exams->title}}</h2>
                        </div>
                    </div>
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">خانه</a></li>
                            <li><a href="">آزمون ها</a></li>
                            <li>{{$exams->title}}</li>
                        </ul>
                    </div>
            @endforeach
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
                <div class="section-content mt-5">
                    <div class=text-center">
                        @foreach($examSelf as $exams)
                            <div class=" wt-list-panel mt-5 m-b30  p-a20 bg-white shadow">
                                <div class="wt-list-single-about-detail">
                                    <div class="m-b30 text-left">
                                        <h4 class="wt-list-panel-title m-t0">{{$exams->title}}</h4>
                                        <div class="wt-separator sep-gradient-light"></div>
                                    </div>
                                    <p>{!! $exams->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                        <hr class="bg-danger mt-5 mb-5">
                            <div class="m-b30 text-left">
                                <h4 class="wt-list-panel-title m-t0 text-danger">  اخبار : {{$exams->title}}</h4>
                            </div>
                        @foreach($news as $newses)
                                <div class=" wt-list-panel mt-5 m-b30  p-a20 bg-white shadow">
                                    <div class="wt-list-single-about-detail">
                                        <div class="m-b30 text-left">
                                            <h4 class="wt-list-panel-title m-t0">{{$newses->title}}</h4>
                                            <div class="wt-separator sep-gradient-light"></div>
                                        </div>
                                        <p>{!! $newses->description !!}</p>
                                    </div>
                                </div>
                        @endforeach
                    </div>

                    @if(Session::has('comment'))
                        <div class="alert alert-success" style="float: right;text-align: center;width: 100%">
                            <div>{{ Session('comment') }}</div>
                        </div>
                    @endif

                    <div class="container col-md-11 mt-5"
                         style="text-align: right ;direction: rtl;width: 100%;;padding: 25px;">
                        <div class="row">
                            <!-- Comments Form -->
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
    </div>
@endsection