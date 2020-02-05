@extends('front.master.master')

@section('content')

    <div class="page-content">
        <div class="section-full bg-white bg-no-repeat bg-cover bg-bottom-center overlay-wraper coming-s-bg area" style="background-image:url({{asset('/photo/cooming-soon.jpg')}})">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="coming-soon-content">
                <div class="section-content">
                    <div class="countdown countdown-container container text-center text-white p-t50 p-b50">
                        <div class="c-title">
                            <h2>بزودی بر می گردیم</h2>
                        </div>
                        <div class="clock clearfix p-tb30">
                            <div class="clock-item clock-days countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-days" class="clock-canvas"></div>
                                        <div class="text">
                                            <p class="val">۰</p>
                                            <p class="type-days type-time">روز</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->
                            <div class="clock-item clock-hours countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-hours" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">3</p>
                                            <p class="type-hours type-time">ساعت</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->
                            <div class="clock-item clock-minutes countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-minutes" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">45</p>
                                            <p class="type-minutes type-time">دقیقه</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-seconds countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-seconds" class="clock-canvas"></div>

                                        <div class="text">
                                            <p class="val">20</p>
                                            <p class="type-seconds type-time">ثانیه</p>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->
                        </div><!-- /.clock -->
                        <div class="c-newsletter">
                            <h5>هم اکنون در خبرنامه ما عضو شوید و شما یکی از اولین کسانی خواهید بود که وب سایت جدید ما می بینید </h5>
                            <div class="newsletter-input m-t30">

                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-envelope-o "></i></span>
                                    </div>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="ایمیل خود را وارد کنید">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text nl-search-btn text-white site-bg-secondry">ثبت</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </div>

@endsection
