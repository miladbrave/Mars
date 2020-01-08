@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش آزمون جدید{{$exam->title}}</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('exam.update',$exam->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>آزمون</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$exam->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>توضیح</label>
                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                                 >{{$exam->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>کشور</label>
                                        <input type="text" name="country" class="form-control"
                                               value="{{$exam->country}}">
                                    </div>
                                    <button type="submit" class="btn btn-success pull-left mt-3 mb-3">به روز رسانی
                                    </button>
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
@section('script')
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>
@endsection
