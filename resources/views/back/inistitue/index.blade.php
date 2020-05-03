@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                لیست کاربران سایت
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">نام</th>
                                <th class="text-center">کد ملی</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $students)
                                <tr>
                                    <td class="text-center">{{$students->id}}</td>
                                    <td class="text-center">{{$students->name}}</td>
                                    <td class="text-center">{{$students->national_code}}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('ins.delete.user',$students->id)}}"
                                              style="display: inline">
                                            {{csrf_field()}}
                                            {{ method_field('Delete')}}
                                            <button class="btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('ins.profile',$students->id)}}"
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
