@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">ایجاد متن خبر جدید</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('news.storetitle')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>موضوع</label>
                                        <input type="text" name="titlefa" class="form-control"
                                               placeholder=" عنوان را وارد کنید...">
                                    </div>
                                    <div class="form-group">
                                        <label>امتحان</label>
                                        <select name="exam" class="form-control" multiple>
                                            <option value="none">selected</option>
                                            @foreach($exam as $exams)
                                                <option value="{{$exams->title}}">{{$exams->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>نمایش در صفحه اول</label>
                                        <select class="form-control" id="Select1" name="number">
                                            <option value="6">هیچ کدام</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>کشور</label>
                                        <select name="country" class="form-control" multiple>
                                            @foreach($country as $countries)
                                                <option value="{{$countries->country}}">{{$countries->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>بخش</label>
                                        <select name="select" class="form-control">
                                            <option value="آزمون">آزمون</option>
                                            <option value="دانشگاه">دانشگاه</option>
                                            <option value="دوره">دوره</option>
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

