@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">کامنت ها</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">شناسه</th>
                            <th class="text-center">نام</th>
                            <th class="text-center">توضیح</th>
                            <th class="text-center">تاریخ</th>
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comment as $comments)
                            <tr>
                                <td class="text-center">{{$comments->id}}</td>
                                <td class="text-center"> {{$comments->name}}</td>
                                <td class="text-center" style="text-align:center "> {!!$comments->description!!}</td>
                                <td class="text-center" style="text-align:center "> {!!$comments->created_at!!}</td>
                                <td>
                                    @if($comments->status == 1)
                                        <form method="get" action="{{ route('comment.action',$comments->id) }}" class="form">
                                            {{ csrf_field() }}
                                            <input type="submit" value="تایید" class="btn-sm btn-success" name="action">
                                        </form>
                                    @else
                                        <form method="get" action="{{ route('comment.action',$comments->id) }}" class="form">
                                            {{ csrf_field() }}
                                            <input type="submit" value="عدم تایید" class="btn-sm btn-danger" name="action">
                                        </form>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form method="post" action="{{route('comment.destroy',$comments->id)}}"
                                          style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn-sm btn-danger">حذف</button>
                                    </form>
                                    <a href="{{route('comment.edit',$comments->id)}}" class="btn-sm btn-warning">ویرایش</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12" style="text-align: center">{{$comment->links()}}</div>
                </div>
            </div>
            <div class="offset-3">
                {{$comment->links()}}
            </div>
        </div>
    </div>

@endsection



