@extends('front.master.master')

@section('nav')
    <div class="main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">
            <div class="container">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{route('main')}}">
                            <img src="{{asset('/image/logo3.png')}}" width="130px" height="80px" alt=""/>
                        </a>
                    </div>
                </div>
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                        class="navbar-toggler collapsed">
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
@endsection
@section('content')
    <div class="page-content">
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                         data-alias="typewriter-effect" data-source="gallery">
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;"
                             data-version="5.4.1">
                            <ul>
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider3/slide1.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <img src="{{asset('/image/1.jpg')}}" alt="" data-bgposition="bottom bottom"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-no-retina/>
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-100-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['right','right','right','right']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-100-layer-3"
                                         data-x="['right','right','right','center']" data-hoffset="['50','50','50','0']"
                                         data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                         data-fontsize="['40','40','40','30']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['right','right','right','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif;">
                                            <span class="text-white"> ثبت نام و راهنمایی</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-100-layer-4"
                                         data-x="['right','right','right','center']" data-hoffset="['50','50','50','0']"
                                         data-y="['top','top','top','top']" data-voffset="['320','320','320','340']"
                                         data-fontsize="['53','53','53','34']"
                                         data-lineheight="['70','70','70','40']"
                                         data-width="['700','700','700','96%']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['right','right','right','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif; text-transform:uppercase ;">
                                            <span class="text-white"> آزمون های بین المللی</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-100-layer-5"
                                         data-x="['right','right','right','center']" data-hoffset="['50','50','50','0']"
                                         data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"
                                         data-fontsize="['16','16','16','16']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['600','600','600','96%']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['right','right','right','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'IRANSansWeb', sans-serif;">GRE / GMAT / ALES / YDS / TÖMER / YÖS / TOEFL / IELTS</span>
                                    </div>
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-6"
                                         data-x="['right','right','right','center']" data-hoffset="['50','50','50','0']"
                                         data-y="['top','top','top','top']" data-voffset="['490','490','490','490']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['right','right','right','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="{{route('contact')}}" class="site-button-secondry slider-btn-left">تماس
                                            با
                                            ما</a>
                                    </div>
                                </li>
                                <li data-index="rs-1001" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider3/slide2.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <img src="{{asset('/image/2.jpg')}}" alt="" data-bgposition="bottom bottom"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-no-retina/>
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-101-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-101-layer-3"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                         data-fontsize="['40','40','40','30']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif; ">
                                            <span class="text-white">تحصیل در کشور انگلستان</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-101-layer-4"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['320','320','320','340']"
                                         data-fontsize="['53','53','53','34']"
                                         data-lineheight="['70','70','70','40']"
                                         data-width="['700','700','700','96%']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif; text-transform:uppercase ;">
                                            <span class="text-white">مدرسه و دانشگاه</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-101-layer-5"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"
                                         data-fontsize="['16','16','16','16']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['600','600','600','96%']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'IRANSansWeb', sans-serif;">برای تحصیل در مدارس انگلستان می توانید با روش های آسانی که ما برای شما ارائه خواهیم داد به راحتی ادامه تحصیل دهید</span>
                                    </div>
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-101-layer-6"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['490','490','490','490']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="{{route('contact')}}" class="site-button-secondry slider-btn-left">تماس
                                            با
                                            ما</a>
                                    </div>
                                </li>
                                <li data-index="rs-1002" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider3/slide3.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <img src="{{asset('/image/3.jpg')}}" alt="" data-bgposition="bottom bottom"
                                         data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                         data-no-retina/>
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-102-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.7);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-102-layer-3"
                                         data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                         data-fontsize="['40','40','40','30']"
                                         data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 300;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif;">
                                            <span class="text-white">تحصیل در مدارس و دانشگاه های</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-102-layer-4"
                                         data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['320','320','320','340']"
                                         data-fontsize="['53','53','53','34']"
                                         data-lineheight="['70','70','70','40']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'IRANSansWeb', sans-serif; text-transform:uppercase ;">
                                            <span class="text-white"> کانادا</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-102-layer-5"
                                         data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"
                                         data-fontsize="['16','16','16','16']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['600','600','600','96%']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                    font-weight: 500;
                                    color:#fff;
                                    border-width:0px;">
                                        <span style="font-family: 'IRANSansWeb', sans-serif;">علاقه مندان به تحصیل در کشور کانادا برای بهره مندی از مشاوره رایگان می توانند با ما تماس گرفته و وقت مشاوره رزرو نمایند</span>
                                    </div>
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-102-layer-6"
                                         data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['490','490','490','490']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                         data-textAlign="['left','left','left','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index:13; text-transform:uppercase;">
                                        <a href="{{route('contact')}}" class="site-button-secondry slider-btn-left">تماس
                                            با
                                            ما</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container main-categories-slider-outer">
            <div class="main-categories-slider">
                <div class="owl-carousel banner-categories owl-btn-vertical-center">
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/tomers.jpg')}}" alt=""
                                         class="v-icon ">
                                </div>
                            </div>
                            <span>TOMER</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/gmat.jpg')}}" alt=""
                                         class="v-icon">
                                </div>
                            </div>
                            <span>GMAT</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box ">
                                <div class="main-categories-icon ">
                                    <img src="{{asset('/image/blog/yos.jfif')}}" alt=""
                                         class=" v-icon">
                                </div>
                            </div>
                            <span>YOS</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/ielts.png')}}" alt=""
                                         class="v-icon">
                                </div>
                            </div>
                            <span>ILETS</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/gres.jpg')}}" alt=""
                                         class="v-icon">
                                </div>
                            </div>
                            <span>GRE</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/toefls.jpg')}}" alt=""
                                         class="v-icon">
                                </div>
                            </div>
                            <span>TOEFL</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/aless.png')}}" alt=""
                                         class="v-icon ">
                                </div>
                            </div>
                            <span>ALES</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="main-categories-box-outer site-text-primary text-center v-icon-effect">
                            <div class="main-categories-box">
                                <div class="main-categories-icon">
                                    <img src="{{asset('/image/blog/ydss.jpg')}}" alt=""
                                         class="v-icon">
                                </div>
                            </div>
                            <span>YDS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full p-t80 p-b50 bg-no-repeat bg-center circle-box-style-1-outer"
             style="background-image:url('../../../public/front/images/background/bg-map.png')">
            <div class="container">
                <div class="section-content">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2>تجربه مهاجرت</h2>
                        <div class="wt-separator sep-gradient-light"></div>
                        <p>مهاجرت امری زمان بر و طاقت فرسا می باشد.که نیاز مبرم به افرادی با تجربه و آشنا به این راه می
                            باشد</p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="circle-box-style-1 text-center m-b5">
                                <div class="circle-icon-secton">
                                        <span>
                                            <i class="im-icon-Turkey "></i>
                                        </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">اخذ پاسپورت ترکیه</h4>
                                    <p>با گرفتن اقامت از ترکیه و گذراندن 5سال در این کشور می توانید اقدام به گرفتن
                                        پاسپورت خود کنید و از مزایای آن بهره </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="circle-box-style-1 text-center m-b5">
                                <div class="circle-icon-secton">
                                        <span>
                                            <i class="im-icon-University "></i>
                                        </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">اخذ پذیرش تحصیلی</h4>
                                    <p>با اخذ پذیرش از دانشگاه های معتبر اروپایی و آمریکایی می توانید آینده خود را تامین
                                        کنید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="circle-box-style-1 circle-line-none text-center m-b5">
                                <div class="circle-icon-secton">
                                        <span>
                                            <i class="im-icon-Plane "></i>
                                        </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">مهاجرت</h4>
                                    <p>مهاجرت امری زمان بر و طولانی می باشد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="exam bg-orange-light dot-left-top-img dot-right-bottom-img">
            <div class="section-head text-center">
                <h2>کدام آزمون نیاز دارید؟</h2>
                <div class="wt-separator sep-gradient-light"></div>
                <p>آیا می دانید برای پذیرش و ادامه تحصیل در کشور های مختلف نیاز به اخذ مدارک از آزمون های بین الملی
                    می باشید؟</p>
            </div>
            <div class="container">
                <div class="">
                    <div class="card-columns">
                        @foreach($exam as $exams)
                            <div class="card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <a href="{{route('getExam',['name' => $exams->title])}}">
                                            <div class="flip-card-front">
                                                <img src="{{asset('/image/a.png')}}"
                                                     class="featured-cat-box v-icon-effect"
                                                     alt="Avatar"
                                                     style="width:365px;height:300px;">
                                                <p>{{$exams->title}}</p>
                                            </div>
                                        </a>
                                        <div class="flip-card-back">
                                            <h1>{{$exams->title}}</h1>
                                            <p>{!! str_limit($exams->description,30) !!}</p>

                                            <a href="{{route('getExam',['name' => $exams->title])}}">
                                                <button class="button">بیشتر بدانید</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full  p-t80 p-b70 bg-orange-light dot-left-top-img dot-right-bottom-img">
            <div class="container">
                <div class="section-head text-center">
                    <h2>پویندگان راه موفقیت</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>شما هم می توانید یکی از افرادی باشید که این راه را با موفقیت سپری کردند.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 m-b30">
                            <div class="featured-cat-box bg-cover bg-no-repeat v-icon-effect"
                                 style="background-image:url({{asset('/image/g1.jfif')}})">
                                <div class="featured-cat-text clearfix">
                                    <div class="f-cat-icon v-icon"></div>
                                    <div class="featured-cat-name-outer">
                                        <h4 class="featured-cat-name">اما واتسن</h4>
                                        <span
                                            class="featured-cat-user color-lebel clr-orange">دانشگاه آزاد برمنگام</span>
                                    </div>
                                </div>
                                <div class="featured-cat-overlay"></div>
                                <a href="#" class="featured-cat-linking"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 m-b30">
                            <div class="featured-cat-box bg-cover bg-no-repeat v-icon-effect"
                                 style="background-image:url({{asset('/image/g2.jpg')}})">
                                <div class="featured-cat-text clearfix">
                                    <div class="f-cat-icon v-icon"></div>
                                    <div class="featured-cat-name-outer">
                                        <h4 class="featured-cat-name">فاطمه</h4>
                                        <span class="featured-cat-user color-lebel clr-pink">دانشگاه آکسفورد</span>
                                    </div>
                                </div>
                                <div class="featured-cat-overlay"></div>
                                <a href="#" class="featured-cat-linking"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 m-b30">
                            <div class="featured-cat-box bg-cover bg-no-repeat v-icon-effect"
                                 style="background-image:url({{asset('/image/g3.jpg')}})">
                                <div class="featured-cat-text clearfix">
                                    <div class="f-cat-icon v-icon"></div>
                                    <div class="featured-cat-name-outer">
                                        <h4 class="featured-cat-name">کبری</h4>
                                        <span class="featured-cat-user color-lebel clr-green">دانشگاه پریستون</span>
                                    </div>
                                </div>
                                <div class="featured-cat-overlay"></div>
                                <a href="#" class="featured-cat-linking"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                            <div class="featured-cat-box bg-cover bg-no-repeat v-icon-effect"
                                 style="background-image:url({{asset('/image/b1.jpg')}})">
                                <div class="featured-cat-text clearfix">
                                    <div class="featured-cat-name-outer">
                                        <h4 class="featured-cat-name">اکبر</h4>
                                        <span class="featured-cat-user color-lebel clr-blue">دانشگاه کوچ</span>
                                    </div>
                                </div>
                                <div class="featured-cat-overlay"></div>
                                <a href="#" class="featured-cat-linking"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 m-b30">
                            <div class="featured-cat-box bg-cover bg-no-repeat v-icon-effect"
                                 style="background-image:url({{asset('/image/g4.jpg')}})">
                                <div class="featured-cat-text clearfix">
                                    <div class="featured-cat-name-outer">
                                        <h4 class="featured-cat-name">زهراسادات</h4>
                                        <span class="featured-cat-user color-lebel clr-cyan">دانشگاه استنفورد</span>
                                    </div>
                                </div>
                                <div class="featured-cat-overlay"></div>
                                <a href="#" class="featured-cat-linking"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="text-center m-t10">--}}
            {{--                <a href="#" class="site-button-secondry site-btn-effect" data-hover="Read More">مشاهده همه</a>--}}
            {{--            </div>--}}
        </div>

        <div class="section-full  p-t80 p-b50 site-bg-primary dot-left-top-bg-dark bg-repeat-x bg-bottom-center"
             style="background-image:url(../../../public/front/images/background/bg-building.png)">
            <div class="container">
                <div class="section-head text-center text-white">
                    <h2>کدام کشور را برای ادامه تحصیل می پسندید؟</h2>
                    <div class="wt-separator sep-gradient-dark"></div>
                    <p>برای ادامه تحصیل نیاز هست تا کشور مقصد را انتخاب کرده و بر اساس قوانین آن اقدام کنید.</p>
                </div>
            </div>
            <div class="section-content container">
                <div class="filter-wrap p-b20 text-center">
                    <ul class="filter-navigation masonry-filter filter-gradi">
                        <li class="active"><a data-filter="*" data-hover="All" href="#">همه کشور ها</a></li>
                        @foreach($uniCountry as $uniCountrys)
                            <li><a data-filter=".cat-{{$uniCountrys->country}}"
                                   href="javascript:;">{{$uniCountrys->country}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="masonry-wrap mfp-gallery work-grid row clearfix">
                    @foreach($uniName as $uniNames)
                        <div class="masonry-item cat-{{$uniNames->country}} col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="cities-slide-box bg-cover bg-no-repeat"
                                 @if(isset($uniNames->photos[0]->path))
                                 style="background-image:url({{asset($uniNames->photos[0]->path)}})">
                                @endif
                                <span class="cities-slide-user color-lebel">{{$uniNames->country}}</span>
                                <div class="cities-slide-text text-white">
                                    <div class="cities-location-sign"><i class="sl-icon-location "></i></div>
                                    <div class="city-slide-content">
                                        <h4 class="cities-slide-name">{{$uniNames->title}}</h4>
                                    </div>
                                </div>
                                <div class="cities-slide-overlay"></div>
                                <a href="{{route('uni',['name' => $uniNames->title])}}"
                                   class="cities-slide-linking"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="section-full  p-t80 p-b40 bg-white blog-post-outer-3 ">
            <div class="container">
                <div class="section-head text-center">
                    <h2>اخبار</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>می توانید آخرین اخبار رو جستجو کنید.</p>
                </div>
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            @foreach($news->where('select','ترکیه')->take(1) as $new)
                                <div class="blog-post blog-list-1 blog-lg">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{route('news-self',['sel' => 'اخبار-تحصیلی-کشور-ترکیه'])}}"><img
                                                src="{{asset('/image/turkey.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                        class="fa fa-calendar-o site-text-secondry"></i><span>{{$new->created_at}}</span>
                                                </li>
                                                <li class="post-catagory"><i
                                                        class="fa fa-tags site-text-secondry"></i><a
                                                        href="{{route('news-self',['sel' => 'اخبار-تحصیلی-کشور-ترکیه'])}}void(0);">{{$new->select}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a href="#">{{$new->title}}</a></h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>{!! $new->description !!}</p>
                                            <a href="{{route('news-self',['sel' => 'اخبار-تحصیلی-کشور-ترکیه'])}}"
                                               class="site-button-link orange">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            @foreach($news->where('select','داخلی')->take(1) as $new)
                                <div class="blog-post blog-list-1 blog-lg">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{route('news-self',['sel' => 'اخبار-داخلی-آموزشگاه'])}}"><img
                                                src="{{asset('/image/logo.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                        class="fa fa-calendar-o site-text-secondry"></i><span>{{$new->created_at}}</span>
                                                </li>
                                                <li class="post-catagory"><i
                                                        class="fa fa-tags site-text-secondry"></i><a
                                                        href="javascript:void(0);">{{$new->select}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a
                                                    href="{{route('news-self',['sel' => 'اخبار-داخلی-آموزشگاه'])}}">{{$new->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>{!! $new->description !!}</p>
                                            <a href="{{route('news-self',['sel' => 'اخبار-داخلی-آموزشگاه'])}}"
                                               class="site-button-link orange">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            @foreach($news->where('select','سایر')->take(1) as $new)
                                <div class="blog-post blog-list-1 blog-lg">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{route('news-self',['sel' => 'اخبار-تحصیلی-دانشگاه-ها'])}}"><img
                                                src="{{asset('/image/world.jpg')}}"
                                                alt="" style="height: 175px"></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                        class="fa fa-calendar-o site-text-secondry"></i><span>{{$new->created_at}}</span>
                                                </li>
                                                <li class="post-catagory"><i
                                                        class="fa fa-tags site-text-secondry"></i><a
                                                        href="{{route('news-self',['sel' => 'اخبار-تحصیلی-دانشگاه-ها'])}}void(0);">{{$new->select}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a
                                                    href="{{route('news-self',['sel' => 'اخبار-تحصیلی-دانشگاه-ها'])}}">{{$new->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>{!! $new->description !!}</p>
                                            <a href="{{route('news-self',['sel' => 'اخبار-تحصیلی-دانشگاه-ها'])}}"
                                               class="site-button-link orange">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full  p-t80 p-b80 site-bg-primary dot-left-top-bg-dark">
            <div class="container">
                <div class="section-head text-center text-white">
                    <h2>همکاران و همراهان ما در راه موفقیت شما</h2>
                    <div class="wt-separator sep-gradient-dark"></div>
                    <p>ما به پشتوانه اعتماد شما استوار ایستاده ایم</p>
                </div>
                <div class="section-content">
                    <div class="owl-carousel testimonial-home dark-next-prev">
                        <div class="item">
                            <div class="testimonial-2  bg-white corner-radius">
                                <div class="testimonial-pic radius shadow"><img
                                        src="{{asset('front/images/testimonials/pic1.jpg')}}"
                                        width="100" height="100" alt="">
                                </div>
                                <div class="testimonial-content  p-a30">
                                    <div class="testimonial-text">
                                        <p>دکتر رستین دوزا مالک و مدیر موسسه مارس هولدینگ می باشند.ایشان مدرس دوره های
                                            موفقیت در 5روز...</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <h4 class="testimonial-name">رستین دوزا</h4>
                                            <span class="testimonial-position site-text-secondry">مدیر</span>
                                            <div class="client-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2  bg-white corner-radius">
                                <div class="testimonial-pic radius shadow"><img
                                        src="{{asset('front/images/testimonials/pic2.jpg')}}"
                                        width="100" height="100" alt="">
                                </div>
                                <div class="testimonial-content  p-a30">
                                    <div class="testimonial-text">
                                        <p>مهندس الیور وتولف دارای کارشناسی ارشد روانشناسی از دانشگاه هاروارد و مدرس
                                            زبان انگلیسی و مشاور..</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <h4 class="testimonial-name">الیور وتولف</h4>
                                            <span
                                                class="testimonial-position site-text-secondry">مشاور و مدرس</span>
                                            <div class="client-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2  bg-white corner-radius">
                                <div class="testimonial-pic radius shadow"><img
                                        src="{{asset('front/images/testimonials/pic3.jpg')}}"
                                        width="100" height="100" alt="">
                                </div>
                                <div class="testimonial-content  p-a30">
                                    <div class="testimonial-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <h4 class="testimonial-name">فرانسیس برتون</h4>
                                            <span class="testimonial-position site-text-secondry">مدرس</span>
                                            <div class="client-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2  bg-white corner-radius">
                                <div class="testimonial-pic radius shadow"><img
                                        src="{{asset('front/images/testimonials/pic4.jpg')}}"
                                        width="100" height="100" alt="">
                                </div>
                                <div class="testimonial-content  p-a30">
                                    <div class="testimonial-text">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-info">
                                            <h4 class="testimonial-name">رستین دوزا</h4>
                                            <span class="testimonial-position site-text-secondry">صاحب اسپا</span>
                                            <div class="client-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <span class="fa fa-quote-right"></span>
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
