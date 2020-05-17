@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش منو کشور</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('country.updateTitle',$contryTitle->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$contryTitle->title}}">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="country">
                                            @foreach($countrys as $country )
                                                <option @if($contryTitle->country_name == $country->title) selected
                                                        @endif value="{{$contryTitle->country_name}}">{{$contryTitle->country_name}}</option>
                                                <option value="{{$country->title}}">{{$country->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>توضیح</label>
                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                        >{{$contryTitle->description}} </textarea>
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
@section('script')
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>

    <script>
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            toolbar: 'simple',
            removePlugins: 'cloudservices , easyimage'
        })
    </script>
@endsection
