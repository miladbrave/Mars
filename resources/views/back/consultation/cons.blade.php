@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">وقت مشاوره</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">شناسه</th>
                            <th class="text-center">نام</th>
                            <th class="text-center">تاریخ</th>
                            <th class="text-center">عملیات</th>
                            <th class="text-center btn-sm btn-primary"><a href="{{route('downloadtime')}}" class="text-white">دانلود </a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($con as $consul)
                            <tr>
                                <td class="text-center">{{$consul->id}}</td>
                                <td class="text-center"> {{$consul->name}}</td>
                                <td class="text-center" style="text-align:center "> {!!$consul->created_at!!}</td>
                                <td class="text-center">
                                
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12" style="text-align: center">{{$con->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
