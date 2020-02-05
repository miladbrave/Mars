@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">کشور ها</h4>
                <a class="btn-sm btn-primary pull-left" href="{{route('country.create')}}"
                   style="margin-top: -3%">جدید</a>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">نام</th>
                                <th class="text-center">توضیح</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($country as $countries)
                                <tr>
                                    <td class="text-center">{{$countries->id}}</td>
                                    <td class="text-center"> {{$countries->title}}</td>
                                    <td class="text-center" style="text-align:center "> {!!str_limit($countries->des,50)!!}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('country.destroy',$countries->id)}}"
                                              style="display: inline">
                                            {{csrf_field()}}
                                            {{ method_field('Delete')}}
                                            <button class="btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('country.edit',$countries->id)}}" class="btn-sm btn-warning">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offset-3">
                {{$country->links()}}
            </div>
        </div>
    </div>

@endsection
