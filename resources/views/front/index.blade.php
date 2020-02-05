@extends('front.master.master')

@section('nav')
    <div class="main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">
            <div class="container">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{route('main')}}">
                            <img src="{{asset('/image/main.png')}}" width="130px" height="80px" alt=""/>
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
                        <li class="">
                            <a href="">کشور ها</a>
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
                                    <img src="{{asset('/image/2.jpg')}}" alt="" data-bgposition="bottom bottom"
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

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>


                                    <div class="tp-caption   tp-resizeme first-slide"
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
                                        <div style="font-family: 'IRANSansWeb', sans-serif;padding-right: 2%">
                                            <span class="text-white"> ثبت نام و راهنمایی</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption   tp-resizeme second-slide"
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
                                        <div
                                            style="font-family: 'IRANSansWeb', sans-serif;text-transform:uppercase;padding-right: 2%">
                                            <span class="text-white"> آزمون های بین المللی</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption  tp-resizeme second-slide"
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
                                    <img src="{{asset('/image/1.jpg')}}" alt="" data-bgposition="bottom bottom"
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

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <div class="tp-caption   tp-resizeme first-slide"
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
                                    <div class="tp-caption   tp-resizeme second-slide"
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
                                    <div class="tp-caption  tp-resizeme second-slide"
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
                                    <img src="{{asset('/image/3.png')}}" alt="" data-bgposition="bottom bottom"
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
                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>
                                    <div class="tp-caption   tp-resizeme first-slide"
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
                                        <div style="font-family: 'IRANSansWeb',sans-serif;padding-left: 2%">
                                            <span class="text-white">تحصیل در مدارس و دانشگاه های</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption   tp-resizeme second-slide"
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
                                        <div
                                            style="font-family: 'IRANSansWeb', sans-serif; text-transform:uppercase;padding-left: 2%">
                                            <span class="text-white"> کانادا</span>
                                        </div>
                                    </div>
                                    <div class="tp-caption  tp-resizeme second-slide"
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
                                        <span style="font-family:'IRANSansWeb',sans-serif;padding-left: 2%">علاقه مندان به تحصیل در کشور کانادا برای بهره مندی از مشاوره رایگان می توانند با ما تماس گرفته و وقت مشاوره رزرو نمایند</span>
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
        <div class="section-full p-t80 p-b50 bg-no-repeat bg-center circle-box-style-1-outer"
             style="background-image:url('../../../public/front/images/background/bg-map.png')">
            <div class="container">
                <div class="section-content">
                    <div class="section-head text-center">
                        <h2>برای اپلای و پذیرش موفق چه چیزهایی لازم است؟ </h2>
                        <div class="wt-separator sep-gradient-light"></div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-4 text-center service small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa im-icon-Consulting fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">مشاوره</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>یک مشاوره خوب کمک میکنه تا مسیر بشناسید
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center service small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa im-icon-University  fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">دانشگاه</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>انتخاب درست دانشگاه و کشور مقصد بر اساس رزومه شخص</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center service small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa im-icon-Folder-WithDocument  fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">مدارک</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>کسب مدارک زبان و همچنین اخذ مدارک آزمون های بین المللی</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center service mt-4 small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa im-icon-Paper fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">آماده سازی</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>مهمترین مرحله آماده سازی دقیق و علمی مدارک اپلای</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center service mt-4 small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa im-icon-Teacher fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">مکاتبه با اساتید</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>مکاتبه اصولی با اساتید و دانشگاه ها وارسال به موقع مدارک</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center service mt-4 small">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="s-service">
                                   <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                        <i class="fa fa-vimeo fa-stack-1x fa-inverse text-danger"></i>
                                   </span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">ویزا</h4>
                                            <span class="icon-count-number">1</span>
                                            <p>آخرین مرحله بعد از اخذ پذیرش اقدام برای ویزا می باشد</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                 style="background-image:url({{($uniNames->photos[0]->path)}})">
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

        <div class="exam bg-orange-light mb-5 mt-5">
            <div class="section-head text-center">
                <h2>کدام آزمون نیاز دارید؟</h2>
                <div class="wt-separator sep-gradient-light"></div>
                <p>آیا می دانید برای پذیرش و ادامه تحصیل در کشور های مختلف نیاز به اخذ مدارک از آزمون های بین الملی
                    می باشید؟</p>
            </div>

            <div class="container d-flex justify-content-center">
                <div class="row test">
                    @foreach($exam as $eph)
                        @if(isset($eph->photos[0]->path))
                            <div class="col-md-4 text-center imagehover">
                                <img class="examImage" src="{{($eph->photos[0]->path)}}">
                                <img class="examImage2" src="{{($eph->photos[1]->path)}}">
                                <strong class="title">{{$eph->title}}</strong>
                                <div class="overlay"></div>
                                <div class="button"><a href="{{route('getExam',['name'=>$eph->title])}}">کلیک کنید</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <section id="subscribe">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="subscribe-title">سوالات خود را از ما بپرسید.</h3>
                        <a class="subscribe-btn" href="{{route('contact')}}">اطلاعات بیشتر</a>
                    </div>
                </div>
            </div>
        </section>


        <div class="section-full  p-t80 p-b40 bg-white blog-post-outer-3 ">
            <div class="container">
                <div class="section-head text-center">
                    <h2>اخبار</h2>
                    <div class="wt-separator sep-gradient-light"></div>
                    <p>می توانید آخرین اخبار رو مشاهده کنید.</p>
                </div>
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 news">
                            @foreach($news->where('select','آزمون')->take(1) as $new)
                                <div class="card p-3">
                                    <div class="wt-post-media wt-img-effect">
                                        <a href="{{route('news-category',['sel' => 'اخبار-آزمون ها'])}}"><img
                                                src="{{asset('/image/news-exams.jpg')}}"
                                                alt="" style="border-radius: 15px"></a>
                                    </div>
                                    <div class="wt-post-info p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                        class="fa fa-calendar-o site-text-secondry"></i><span>{{$new->created_at}}</span>
                                                </li>
                                                <li class="post-catagory"><i
                                                        class="fa fa-tags site-text-secondry"></i><a
                                                        href="{{route('news-category',['sel' => 'اخبار-آزمون ها'])}}void(0);">{{$new->select}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h5 class="post-title"
                                                style="font-size:16px;font-weight:400;line-height:1.5"><a
                                                    href="#">{{$new->title}}</a></h5>
                                        </div>
                                        <div class="wt-post-text">
                                            <h6 style="font-size:15px;font-weight:100;line-height:1.5">{!!($new->description) !!}</h6>
                                            <a href="{{route('news-category',['sel' => 'اخبار-آزمون ها'])}}"
                                               class="site-button-link orange">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news2">
                            @foreach($news->where('select','دانشگاه')->take(1) as $new)
                                <div class="card p-3">
                                    <div class="wt-post-media wt-img-effect">
                                        <a href="{{route('news-category',['sel' => 'اخبار-دانشگاه ها'])}}"><img
                                                src="{{asset('/image/news-university.jpg')}}"
                                                alt="" style="border-radius: 15px"></a>
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
                                                    style="font-size:16px;font-weight:400;line-height:1.5"
                                                    href="{{route('news-category',['sel' => 'اخبار-دانشگاه ها'])}}">{{$new->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <h6 style="font-size:15px;font-weight:100;line-height:1.5">
                                                >{!! $new->description !!}</h6>
                                            <a href="{{route('news-category',['sel' => 'اخبار-دانشگاه ها'])}}"
                                               class="site-button-link orange">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news">
                            @foreach($news->where('select','دوره')->take(1) as $new)
                                <div class="card p-3">
                                    <div class="wt-post-media wt-img-effect">
                                        <a href="{{route('news-category',['sel' => 'اخبار-دوره ها'])}}"><img
                                                src="{{asset('/image/news-period.jpg')}}"
                                                alt="" style="border-radius: 15px;"></a>
                                    </div>
                                    <div class="wt-post-info p-t30">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                        class="fa fa-calendar-o site-text-secondry"></i><span>{{$new->created_at}}</span>
                                                </li>
                                                <li class="post-catagory"><i
                                                        class="fa fa-tags site-text-secondry"></i><a
                                                        href="{{route('news-category',['sel' => 'اخبار-دوره ها'])}}void(0);">{{$new->select}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a
                                                    style="font-size:16px;font-weight:400;line-height:1.5"
                                                    href="{{route('news-category',['sel' => 'اخبار-دوره ها'])}}">{{$new->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <h6 style="font-size:15px;font-weight:100;line-height:1.5">{!! $new->description !!}</h6>
                                            <a href="{{route('news-category',['sel' => 'اخبار-دوره ها'])}}"
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
    </div>
@endsection
