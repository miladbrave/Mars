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
                            <th class="text-center">نام</th>
                        </tr>
                        <tr>
                            <th class="text-center">ایمیل</th>
                        </tr>
                        <tr>
                            <th class="text-center">موضوع</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($message as $messages)
                            <tr>
                                <td class="text-center">{{$messages->id}}</td>
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



