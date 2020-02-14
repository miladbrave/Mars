@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">ارزش یابی رایگان</h4>
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
                            <th class="text-center btn-sm btn-primary"><a href="{{route('download')}}" class="text-white">Download</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($val as $eval)
                            <tr>
                                <td class="text-center">{{$eval->id}}</td>
                                <td class="text-center"> {{$eval->name}}</td>
                                <td class="text-center" style="text-align:center "> {!!$eval->created_at!!}</td>
                                <td class="text-center">
                                    <a href="{{route('resume',['id'=>$eval->id])}}"><button class="btn-small btn-danger" >دانلود رزومه</button></a>
                                </td>
                            </tr>
                        @endforeach

                        @if(isset($message))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{$message}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        </tbody>
                    </table>
                    <div class="col-md-12" style="text-align: center">{{$val->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection

