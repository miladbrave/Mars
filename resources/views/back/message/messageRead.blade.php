@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">پیام ها</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead></thead>
                        <tbody>
                        <th class="text-center text-danger bg-dark">نام</th>
                        <tr><td class="text-center">{{$message->name}}</td></tr>
                        <th class="text-center text-danger bg-dark">تلفن</th>
                        <tr><td class="text-center">{{$message->phone}}</td></tr>
                        <th class="text-center text-danger bg-dark">ایمیل</th>
                        <tr><td class="text-center">{{$message->email}}</td></tr>
                        <th class="text-center text-danger bg-dark">موضوع</th>
                        <tr><td class="text-center">{{$message->title}}</td></tr>
                        <th class="text-center text-danger bg-dark">توضیحات</th>
                        <tr><td class="text-center">{{$message->description}}</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection



