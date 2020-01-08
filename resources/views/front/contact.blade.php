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
                        <h2 class="text-white">ارتباط با ما</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">ارتباط با ما</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <div class="container page-content">
        <div class="section-full  p-t80">
            <div class="container">
                <div class="section-content">
                    <div class="gmap-outline">
                        <div class="container">
                            <div class="fluid-wrapper">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.2978851400621!2d46.3236075291969!3d38.06592015458617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x401a1ade9f08fe47%3A0xfed672d8b0e5e72d!2sKhiyaban%2C%20Tabriz%2C%20East%20Azerbaijan%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1577526983744!5m2!1sen!2s"
                                    width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full  p-t80 p-b80">
            <div class="section-content">
                <div class="container">
                    <div class="contact-one   shadow radius-md   p-a30">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12  m-b30">
                                <form  class="cons-contact-form" method="get" action="{{route('sendmessage')}}">
                                    @csrf
                                    <div class="section-head text-left">
                                        <h2 class="m-t0">تماس با ما</h2>
                                        <div class="wt-separator sep-gradient-light"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="name" type="text" required class="form-control" placeholder="نام">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" required placeholder="ایمیل">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control" required placeholder="تلفن">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="subject" type="text" class="form-control" required placeholder="موضوع">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="des" class="form-control" rows="4" placeholder="پیام"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="ارسال" value="ارسال" class="site-button-secondry site-btn-effect">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="contact-info">
                                    <div class="contact-info-inner">
                                        <div class="section-head text-left">
                                            <h2 class="m-t0">اطلاعات تماس</h2>
                                            <div class="wt-separator sep-gradient-light"></div>
                                        </div>
                                        <div class="contact-info-section text-white" style="background-image:url({{asset('/front/images/background/dot-left-t-dark.png')}})">
                                            <div class="wt-icon-box-wraper left m-b30">
                                                <div class="icon-xs"><i class="fa fa-phone site-text-secondry"></i></div>
                                                <div class="icon-content">
                                                    <h4 class="m-t0">شماره تلفن</h4>
                                                    <p>۰۲۱-۱۲۳۴۵۶۷۸8</p>
                                                </div>
                                            </div>
                                            <div class="wt-icon-box-wraper left m-b30">
                                                <div class="icon-xs"><i class="fa fa-envelope site-text-secondry"></i></div>
                                                <div class="icon-content">
                                                    <h4 class="m-t0"> ایمیل</h4>
                                                    <p>thewebmax@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="wt-icon-box-wraper left">
                                                <div class="icon-xs"><i class="sl-icon-location site-text-secondry"></i></div>
                                                <div class="icon-content">
                                                    <h4 class="m-t0">آدرس</h4>
                                                    <p>ایران , تهران , خیابان آزادی , ساختمان مهر</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
