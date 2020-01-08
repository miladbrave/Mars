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
                        <h2 class="text-white">ارزیابی</h2>
                    </div>
                </div>
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">خانه</a></li>
                        <li><a href="">ارزیابی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    @if(Session::has('val'))
        <div class="alert alert-success container" style="float: right;text-align: center;width: 100%">
            <div>{{ Session('val') }}</div>
        </div>
    @endif

    <div class="container visit">
        <div class="section-head text-center mt-5">
            <h2 class="m-t0">فرم مشخصات پذیرش از مقطع کارشناسی به بالا</h2>
            <div class="wt-separator sep-gradient-light"></div>
        </div>
        <div class="container col-lg-12 col-md-12 col-sm-12 mb-4 border border-dark rounded-lg p-5">
            <form  method="post" action="{{route('valid')}}">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="name" type="text" required class="form-control"
                                   placeholder="نام و نام خانوادگی">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2">
                        <div class="form-group">
                            <input name="date" type="text" class="form-control" required placeholder="تاریخ تولد">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="form-group">
                            <input name="phone" type="number" class="form-control" required placeholder="تلفن ثابت">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
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
                            <input name="sub" type="text" required class="form-control"
                                   placeholder="رشته های تحصیلی مد نظر برای ادامه تحصیل ">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="country" type="text" required class="form-control"
                                   placeholder="کشور های مد نظر برای ادامه تحصیل">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="tofel" type="number" class="form-control" required placeholder="نمره TOEFL">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="ilets" type="number" class="form-control" required placeholder="نمره IELTS ">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="gre" type="number" class="form-control" required placeholder="نمره GRE">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="gmat" type="number" class="form-control" required placeholder="نمره GMAT">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="essay" type="number" class="form-control" required
                                   placeholder="تعداد مقالات علمی">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="check" type="text" class="form-control" required
                                   placeholder="مقطع مورد نظر برای ادامه تحصیل">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-2">
                        <div class="wt-filter-features-wrap wt-full-width-filter-features">
                            <label class="d-inline-block m-r15">آیا قبلا برای اخذ ویزا اقدام کرده اید؟</label>
                            <div class="checkbox wt-radio-checkbox">
                                <input id="Accessories_1" name="visa" value="five" type="checkbox">
                                <label for="Accessories_1">بله</label>
                            </div>
                            <div class="checkbox wt-radio-checkbox">
                                <input id="credit_1" name="visa" value="five" type="checkbox">
                                <label for="credit_1">خیر</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <textarea name="des" class="form-control" rows="4" placeholder="پیام"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
{{--                        <div class="form-group">--}}
{{--                            <label for="photo">رزومه</label>--}}
{{--                            <input type="hidden" name="photo_id[]" id="product-photo">--}}
{{--                            <div id="photo" class="dropzone"></div>--}}
{{--                        </div>--}}
                    </div>
                    <hr style="width: 80%;background-color: black">

                    <div class="col-md-12 form-group">
                        <label class="d-inline-block m-r15 text-danger">سوابق تحصیلی متقاضی</label>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">دیپلم</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="dsub" type="text"  class="form-control"
                                           placeholder="رشته تحصیلی">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="dbran" type="text"  class="form-control" placeholder="گرایش">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="dnum" type="text"  class="form-control" placeholder="معدل">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="ddate" type="text"  class="form-control"
                                           placeholder="تاریخ اخذ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">لیسانس</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bsub" type="text"  class="form-control"
                                           placeholder="رشته تحصیلی">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bbra" type="text"  class="form-control" placeholder="گرایش">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bnum" type="text"  class="form-control" placeholder="معدل">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bdate" type="text"  class="form-control"
                                           placeholder="تاریخ اخذ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">فوق لیسانس</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="msub" type="text"  class="form-control"
                                           placeholder="رشته تحصیلی">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mbra" type="text"  class="form-control" placeholder="گرایش">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mgra" type="text"  class="form-control" placeholder="معدل">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mdate" type="text"  class="form-control"
                                           placeholder="تاریخ اخذ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">دکترا</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docsub" type="text"  class="form-control"
                                           placeholder="رشته تحصیلی">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docbra" type="text"  class="form-control" placeholder="گرایش">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docnum" type="text"  class="form-control" placeholder="معدل">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docdate" type="text"  class="form-control"
                                           placeholder="تاریخ اخذ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15"> پست دکترا</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="usub" type="text"  class="form-control"
                                           placeholder="رشته تحصیلی">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="ubra" type="text"  class="form-control" placeholder="گرایش">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="unum" type="text"  class="form-control" placeholder="معدل">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="udate" type="text"  class="form-control"
                                           placeholder="تاریخ اخذ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="ارسال" class="site-button-secondry site-btn-effect">
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/front/js/dropzone.min.js')}}"></script>
    <script>
        Dropzone.autoDiscover = false;
        var photosGallery = []
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function () {
            document.getElementById('product-photo').value = photosGallery
        }

    </script>

@endsection

