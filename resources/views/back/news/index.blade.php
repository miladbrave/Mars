@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">آزمون ها</h4>
                <a class="btn-sm btn-primary pull-left" href="{{route('news.create')}}"
                   style="margin-top: -3%">جدید</a>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">تصویر</th>
                                <th class="text-center">عنوان</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $newss)
                                <tr>
                                    <td class="text-center">{{$newss->id}}</td>
                                    @if(isset($newss->photo->path))
                                        <td class="text-center" width="25%"><img src="{{($newss->photo->path)}}"
                                                                                 width="60%" height="70px"></td>
                                    @endif
                                    <td class="text-center"> {!!  $newss->title!!}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('news.destroy',$newss->id)}}"
                                              style="display: inline">
                                            {{csrf_field()}}
                                            {{ method_field('Delete')}}
                                            <button class="btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('news.edit',$newss->id)}}"
                                           class="btn-sm btn-warning">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offset-3">
                {{$news->links()}}
            </div>
        </div>
    </div>

@endsection
