@extends('front.profile.index')

@section('middle')
    @foreach($classtime as $classtimes)@endforeach
    <div class="content-page">
        <div class="container" style="position: relative;padding-right: 8%;padding-left: 8%;padding-top: 7%">
            <div class="card text-white" style="background-color: rgba(180,180,180,0.29);border-radius: 5px">
                <h3 class="card-header text-white p-20 "
                    style="background-color: rgba(55,55,55,0.53);border-radius: 5px">آموزش راه اندازی نرم افزار</h3>
                <div class="card-body">
                    <p class="card-text" style="padding: 1%;font-size: 18px">
                        برای استفاده از کلاس آنلاین لطفا نرم افزار مورد نیاز را دانلود کرده (لینک دانلود نرم افزار در
                        ادامه موجود می باشد) و در سیستم خود نصب نمایید.
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="col-md-5">
                                    <a href="https://www.adobeconnect.ir/go/adobeconnect_9_addin_win">
                                <span
                                    style="font-size: 22px;padding-right: 2%;color: black">برای سیستم عامل ویندوز</span></a><br>
                                    <a href="https://www.adobeconnect.ir/go/adobeconnect_9_addin_mac">
                                <span
                                    style="font-size: 22px;padding-right: 2%;color: black">برای سیستم عامل مک</span></a>
                                </div>
                                <div class="col-md-5">
                                    <a href="https://www.adobeconnect.ir/APK/www.adobeconnect.ir.mobile.Last.Ver.apk">
                                <span
                                    style="font-size: 22px;padding-right: 2%;color: black">برای گوشی های اندروید</span></a><br>
                                    <a href="https://apps.apple.com/us/app/adobe-connect-mobile/id430437503"
                                       target="_blank">
                                <span
                                    style="font-size: 22px;padding-right: 2%;color: black">برای گوشی های ios</span></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('/image/adoble.png')}}" width="100px" height="100px" alt="adoble">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="position: relative;padding-right: 8%;padding-left: 8%;padding-top: 1%">
            <div class="card text-white" style="background-color: rgba(180,180,180,0.29);border-radius: 5px">
                <h3 class="card-header text-white p-20"
                    style="background-color: rgba(55,55,55,0.53);border-radius: 5px">کلاس آنلاین</h3>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <p style="font-size: 18px">
                                    در صورت برگذاری کلاس آنلاین شما میتوانید با کلیلک بر روی ورود وارد کلاس شوید.
                                </p>
                            </div>
                            <div class="col-md-2">
                                <a href="http://185.126.202.195/marsholdong" class="btn btn-danger"
                                   target="_blank">ورود</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="position: relative;padding-right: 8%;padding-left: 8%;padding-top: 1%">
            <div class="card text-white" style="background-color: rgba(180,180,180,0.29);border-radius: 5px">
                <h3 class="card-header text-white p-20"
                    style="background-color: rgba(55,55,55,0.53);border-radius: 5px">کلاس آفلاین</h3>
                <div class="card-body">
                    <div class="container">
                        <ul>
                        <li class="text-white">با کلیک بر روی هر لینک می توان محتوای آموزشی آن را مشاهده کنید.</li>
                        <li class="text-white">درصورت نیاز به رمز عبور با هماهنگی استاد مربوطه نسبت به اخذ آن اقدام فرماید.</li>
                        <li class="text-white">فیلم های هر جلسه فقط یک هفته در سایت خواهند بود..</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body wt-panel-body ">
                                    <div class="container">
                                        <table class="table no-margin">
                                            <thead>
                                            <tr>
                                                <th class="text-center text-danger">نام کلاس</th>
                                                <th class="text-center text-danger">تاریخ ضبط کلاس</th>
                                                <th class="text-center text-danger">استاد مربوطه</th>
                                                <th class="text-center text-danger">لینک</th>
                                                <th class="text-center text-danger">جلسه</th>
                                                <th class="text-center text-danger">توضیح</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($links->chunk(1) as $link)
                                                <tr>
                                                    @foreach($link as $linkss)
                                                        <td class="text-center text-white">{{$linkss->title}}</td>
                                                        <td class="text-center text-white">{{$linkss->date}}</td>
                                                        <td class="text-center text-white">{{$linkss->teacher}}</td>
                                                        <td class="text-center text-white">
                                                            <a href="{{$linkss->link}}" class="text-danger">{{$linkss->link}}</a>
                                                        </td>
                                                        <td class="text-center text-white">{{$linkss->session}}</td>
                                                        <td class="text-center text-white">{{$linkss->des}}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <hr>
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


