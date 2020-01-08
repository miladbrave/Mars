@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">ایجاد آزمون جدید</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>موضوع</label>
                                        <input type="text" name="title" class="form-control"
                                               placeholder=" عنوان را وارد کنید...">
                                    </div>
                                    <div class="form-group">
                                        <label>توضیح</label>
                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                                  placeholder="توضیحات محصول را وارد کنید..."> </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>امتحان</label>
                                        <select name="exam" class="form-control">
                                            <option value="none">selected</option>
                                            @foreach($exam as $exams)
                                                <option value="{{$exams->title}}">{{$exams->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>کشور</label>
                                        <select name="country" class="form-control">
                                            <option value="none">selected</option>
                                            @foreach($country as $countries)
                                                <option value="{{$countries->country}}">{{$countries->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>بخش</label>
                                        <select name="select" class="form-control">
                                            <option value="داخلی">داخلی</option>
                                            <option value="ترکیه">ترکیه</option>
                                            <option value="دیگر">سایر</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-success pull-left">ذخیره
                                    </button><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>
@endsection
