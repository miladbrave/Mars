@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">اسلایدر ها</h4>
                <a class="btn-sm btn-primary pull-left" href="{{route('slider.create')}}"
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
{{--                                <th class="text-center">وضعیت</th>--}}
                                <th class="text-center">شماره</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider as $sliders)
                                <tr>
                                    <td class="text-center">{{$sliders->id}}</td>
                                    @if(isset($sliders->photo->path))
                                        <td class="text-center" width="25%"><img src="{{($sliders->photo->path)}}"
                                                                                 width="60%" height="70px"></td>
                                    @endif
                                    <td class="text-center"> {!!  $sliders->title1!!}</td>
{{--                                    <td>--}}
{{--                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-onstyle="success"--}}
{{--                                               data-offstyle="danger" data-on="نشر" data-off="عدم">--}}
{{--                                    </td>--}}
                                    <td class="text-center"> {{ $sliders->number}}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('slider.destroy',$sliders->id)}}"
                                              style="display: inline">
                                            {{csrf_field()}}
                                            {{ method_field('Delete')}}
                                            <button class="btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('slider.edit',$sliders->id)}}"
                                           class="btn-sm btn-warning">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

