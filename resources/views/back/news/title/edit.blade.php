@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش متون اخبار {{$news->title}}</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('news.updatetitle',$news->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>عنوان</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$news->titlefa}}">
                                    </div>
                                    <div class="form-group">
                                        <label>امتحان</label>
                                        <select name="exam" id="exam" class="exam form-control" multiple>
                                            @foreach($exam as $exams)
                                                <option @if($exams->title==$news->exam) selected @endif value="{{$exams->title}}">{{$exams->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>نمایش در صفحه اول</label>
                                        <select class="form-control" id="Select1" name="number">
                                            <option @if($news->section_id) checked @endif value="{{$news->section_id}}">{{$news->section_id}}</option>
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
                                                <option @if($countries->country==$news->country) selected @endif value="{{$countries->country}}">{{$countries->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>بخش</label>
                                        <select name="select" class="form-control">
                                            <option value="آزمون">آزمون ها</option>
                                            <option value="دانشگاه">دانشگاه ها</option>
                                            <option value="دوره">دوره ها</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-success pull-left">ذخیره
                                    </button><br>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

