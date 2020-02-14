@extends('front.master.master')

@section('nav')
    <header class="site-header header-style-2 mobile-sider-drawer-menu"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                <div class="col-lg-12 col-md-11 col-sm-12">
                    <div class="blog-post blog-md date-style-1 blog-list-1 clearfix  m-b60 bg-white">
{{--                        <div class="wt-post-media wt-img-effect">--}}
{{--                            <a href="javascript:;"><img src="{{asset('/image/BG-14.jpg')}}"--}}
{{--                                                        style="height: 350px;width: 100%" alt=""></a>--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="wt-post-info col-lg-8 col-md-7 bg-white p-t30">
                                @foreach($news->sortBy('examuni') as $new)
                                    <div class=" wt-list-panel mt-1 m-b15 p-a15 bg-white shadow">
                                        <div class="row">
                                            <div class="col-md-3">
                                                @if(isset($new->photo->path))
                                                <img class="news-img" src="{{$new->photo->path}}" alt="news">
                                                @endif
                                            </div>
                                            <div class="wt-list-single-about-detail col-md-9 newsdes">
                                                <div class="m-b30 text-left">
                                                    <h4 class="wt-list-panel-title m-t0" style="font-family: Roboto, sans-serif;font-size:16px;
                                                        font-weight: 400;line-height: 1.5">{!!  nl2br($new->title)!!}</h4>
                                                    <div class="wt-separator sep-gradient-light" style="margin-top: -8px"></div>
                                                </div>
                                                <p style="margin-top: -5px">{!! $new->description !!}</p>
                                                <span class="pull-left text-danger" style="font-size: 15px;">
                                                        <?php $v = new \Hekmatinasser\Verta\Verta($new->created_at) ?>
                                                            {{ $v->formatDate()}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="offset-3">
                                  {{$news->links()}}
                                  </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 p-t50">
                                <aside class="side-bar sticky" style="position: sticky;">
                                    <div class="widget bg-white  widget_services">
                                        <div class="text-left m-b30">
                                            <h4 class="widget-title">دسته بندی</h4>
                                            <div class="wt-separator sep-gradient-light"></div>
                                        </div>
                                        <ul>
                                            @foreach($exam as $exams)
                                                <li><a href="{{route('news-self',['sel' => $title,'exam'=>$exams->title])}}"
                                                       style="font-size: 13px">{{$exams->title}}</a><span
                                                        class="badge"></span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="widget bg-white  widget_tag_cloud">
                                        <div class="text-left m-b30">
                                            <h4 class="widget-title">برچسب ها</h4>
                                            <div class="wt-separator sep-gradient-light"></div>
                                        </div>
                                        <div class="tagcloud">

                                            @foreach($exam as $exams)
                                                <a href="{{route('news-self',['sel' => $title,'exam'=>$exams->title])}}"
                                                   style="font-size: 10px">{{$exams->title}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
