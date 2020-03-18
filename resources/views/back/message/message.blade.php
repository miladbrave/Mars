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
                        <thead>
                        <tr>
                            <th class="text-center">شناسه</th>
                            <th class="text-center">نام</th>
                            <th class="text-center">موضوع</th>
                            <th class="text-center">تاریخ</th>
                            <th class="text-center">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($message as $messages)
                            <tr>
                                <td class="text-center">{{$messages->id}}</td>
                                <td class="text-center">
                                    <a href="{{route('messageRead',['id' => $messages->id])}}">
                                        {{$messages->name}}</a></td>
                                <td class="text-center">
                                    <a href="{{route('messageRead',['id' => $messages->id])}}"> {{$messages->title}}
                                    </a></td>
                                <td class="text-center" style="text-align:center "> {!!$messages->created_at!!}</td>
                                <td class="text-center">
                                    <form method="post" action="{{route('messageDestroy',$messages->id)}}"
                                          style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12" style="text-align: center">{{$message->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection



