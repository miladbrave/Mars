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
                                <a href="">کشور ها</a>
                                <ul class="sub-menu">
                                    @foreach($country2 as $countries)
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
                                            <a href="{{route('getExam',['name' => $exams->title])}}" style="font-family: Roboto, sans-serif;float: left">{{$exams->title}}</a>
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

    <div class="container visit">
        <div class="section-head text-center mt-5">
            <h2 class="m-t0">فرم مشخصات پذیرش از مقطع کارشناسی به بالا</h2>
            <div class="wt-separator sep-gradient-light"></div>
            @if(Session::has('evade'))
                <div class="alert alert-success container" style="float: right;text-align: center;width: 100%">
                    <div>{{ Session('evade') }}</div>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>لطفا موارد زیر را تصحیح فرماید</strong>
                    <br/>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <div class="container col-lg-12 col-md-12 col-sm-12 mb-4 border border-dark rounded-lg p-5">
            <form method="post" action="{{route('valid')}}">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="name" type="text" required class="form-control"
                                   placeholder="نام و نام خانوادگی" value="{{old('name')}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2">
                        <div class="form-group">
                            <input name="date" type="text" class="form-control" value="{{old('date')}}" required placeholder="تاریخ تولد">
                            @error('date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="form-group">
                            <input name="phone"  type="number" class="form-control" placeholder="تلفن ثابت" value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="cell" type="number" class="form-control" required
                                   placeholder="تلفن همراه" value="{{old('cell')}}">
                            @error('cell')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="email" type="text" required class="form-control" placeholder="ایمیل" value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="sub" type="text" required class="form-control"
                                   placeholder="رشته های تحصیلی مد نظر برای ادامه تحصیل " value="{{old('sub')}}">
                            @error('sub')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <input name="country" type="text" required class="form-control"
                                   placeholder="کشور های مد نظر برای ادامه تحصیل" value="{{old('country')}}">
                            @error('country')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="tofel" type="number" class="form-control" placeholder="نمره TOEFL" value="{{old('tofel')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="ilets" type="number" class="form-control" placeholder="نمره IELTS " value="{{old('ilets')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="gre" type="number" class="form-control" placeholder="نمره GRE" value="{{old('gre')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="gmat" type="number" class="form-control" placeholder="نمره GMAT" value="{{old('gmat')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="essay" type="text" class="form-control"
                                   placeholder="تعداد مقالات علمی" value="{{old('essay')}}">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <input name="grade" type="text" class="form-control" required
                                   placeholder="مقطع مورد نظر برای ادامه تحصیل" value="{{old('grade')}}">
                            @error('grade')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-2">
                        <div class="wt-filter-features-wrap wt-full-width-filter-features">
                            <label class="d-inline-block m-r15">آیا قبلا برای اخذ ویزا اقدام کرده اید؟</label>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="visa" id="exampleRadios1" value="بله"
                                       checked>
                                <label class="form-check-label" for="exampleRadios1"></label>
                                <label class="d-inline-block mb-4">بله</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="visa" id="exampleRadios2" value="خیر"
                                       checked>
                                <label class="form-check-label" for="exampleRadios2"></label>
                                <label class="d-inline-block mb-4">خیر</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <textarea name="des" class="form-control" rows="4" placeholder="پیام"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="photo">رزومه</label>
                            <input type="hidden" name="photo_id[]" id="product-photo">
                            <div id="photo" class="dropzone"></div>
                        </div>
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
                                    <input name="dsub" type="text" class="form-control"
                                           placeholder="رشته تحصیلی" value="{{old('dsub')}}" >
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="dbran" type="text" class="form-control" placeholder="گرایش" value="{{old('dbran')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="dnum" type="text" class="form-control" placeholder="معدل" value="{{old('dnum')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="ddate" type="text" class="form-control"
                                           placeholder="تاریخ اخذ" value="{{old('ddate')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">لیسانس</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bsub" type="text" class="form-control"
                                           placeholder="رشته تحصیلی" value="{{old('bsub')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bbran" type="text" class="form-control" placeholder="گرایش" value="{{old('bbran')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bnum" type="text" class="form-control" placeholder="معدل" value="{{old('bnum')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="bdate" type="text" class="form-control"
                                           placeholder="تاریخ اخذ" value="{{old('bdate')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">فوق لیسانس</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="msub" type="text" class="form-control"
                                           placeholder="رشته تحصیلی" value="{{old('msub')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mbran" type="text" class="form-control" placeholder="گرایش" value="{{old('mbran')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mgra" type="text" class="form-control" placeholder="معدل" value="{{old('mgra')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="mdate" type="text" class="form-control"
                                           placeholder="تاریخ اخذ" value="{{old('mdate')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15">دکترا</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docsub" type="text" class="form-control"
                                           placeholder="رشته تحصیلی" value="{{old('docsub')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docbran" type="text" class="form-control" placeholder="گرایش" value="{{old('docbran')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docnum" type="text" class="form-control" placeholder="معدل" value="{{old('docnum')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="docdate" type="text" class="form-control"
                                           placeholder="تاریخ اخذ" value="{{old('docdate')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-2">
                        <label class="d-inline-block m-r15"> پست دکترا</label>
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="usub" type="text" class="form-control"
                                           placeholder="رشته تحصیلی" value="{{old('usub')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="ubran" type="text" class="form-control" placeholder="گرایش" value="{{old('ubran')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="unum" type="text" class="form-control" placeholder="معدل" value="{{old('unum')}}">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input name="udate" type="text" class="form-control"
                                           placeholder="تاریخ اخذ" value="{{old('udate')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="ارسال" onclick="productGallery()"
                               class="site-button-secondry site-btn-effect">
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
            maxFilesize: 5,
            maxFiles: 2,

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

