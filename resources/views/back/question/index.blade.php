@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">سوالات ها</h4>
                <a class="btn-sm btn-primary pull-left" href="{{route('question.create')}}"
                   style="margin-top: -3%">جدید</a>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">سوال</th>
                                <th class="text-center">پاسخ</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($question as $questions)
                                <tr>
                                    <td class="text-center">{{$questions->id}}</td>
                                    <td class="text-center"> {{$questions->question}}</td>
                                    <td class="text-center" style="text-align:center "> {!!str_limit($questions->answer,50)!!}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('question.destroy',$questions->id)}}"
                                              style="display: inline">
                                            {{csrf_field()}}
                                            {{ method_field('Delete')}}
                                            <button class="btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('question.edit',$questions->id)}}" class="btn-sm btn-warning">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offset-3">
                {{$question->links()}}
            </div>
        </div>
    </div>

@endsection
