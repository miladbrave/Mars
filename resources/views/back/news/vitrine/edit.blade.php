@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">اخبار صفحه اول</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('news.vit.update',['id'=>$logos->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH')}}

                                    <div class="form-group">
                                        <label for="Select1">شماره عکس</label>
                                        <select class="form-control" id="Select1" name="number">
                                            <option value="{{$logos->section_id}}">{{$logos->section_id}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">لوگو</label>
                                        <input type="file" class="form-control-file" id="file" name="logo">
                                        @if(isset($logos->path))
                                            <div class="col-sm-3" id="photo2_{{$logos->id}}" style="margin:2%">
                                                <img class="img-responsive" src="{{$logos->path}}"
                                                     alt="image">
                                                <a href="{{route('uni.logo',$logos->id)}}">حذف</a>
                                            </div>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn-sm btn-success pull-left">ذخیره
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
