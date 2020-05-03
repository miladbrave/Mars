@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            @include('front.profile.alert.alert')
            <div class="panel-heading wt-panel-heading p-a20 bg-dark">
                <h4 class="text-white">لینک کلاس افلاین</h4>
            </div>
            <div class="panel-body wt-panel-body  bg-dark">
                <div class="container dashboard-list-box list-box-with-icon">
                    <form action="{{route('ins.video.save')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <label for="select" class="mt-2">درس</label>
                                    <select class="form-control" id="select" name="class">
                                        @foreach($classes as $classe)
                                            <option value="{{$classe->title}}">{{$classe->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group">
                                    <label for="mount" class="mt-2">جلسه</label>
                                    <input type="text" class="form-control" id="mount" name="sessio"
                                           placeholder="جلسه">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <label for="date" class="mt-2">لینک</label>
                                    <input type="text" class="form-control" id="date" name="link" required
                                           placeholder="link">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <label for="about" class="mt-2">تاریخ</label>
                                    <input type="text" class="form-control" id="about" name="date" required
                                           placeholder="تاریخ">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <label for="about" class="mt-2">استاد مربوطه</label>
                                    <input type="text" class="form-control" id="about" name="teacher" required
                                           placeholder="استاد مربوطه">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group">
                                    <label for="des" class="mt-2">توضیح</label>
                                    <input type="text" class="form-control" id="des" name="description"
                                           placeholder="توضیحات">
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <button type="submit" class="btn btn-sm btn-success mt-5 pull-left">ارسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body wt-panel-body  bg-danger">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="panel-body wt-panel-body  bg-danger">
                        <div class="container">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th class="text-center bg-danger">نام کلاس</th>
                                    <th class="text-center bg-danger">تاریخ ضبط کلاس</th>
                                    <th class="text-center bg-danger">استاد مربوطه</th>
                                    <th class="text-center bg-danger">لینک</th>
                                    <th class="text-center bg-danger">جلسه</th>
                                    <th class="text-center bg-danger">توضیح</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($links->chunk(1) as $link)
                                    <tr>
                                        @foreach($link as $linkss)
                                            <td class="text-center">{{$linkss->title}}</td>
                                            <td class="text-center">{{$linkss->date}}</td>
                                            <td class="text-center">{{$linkss->teacher}}</td>
                                            <td class="text-center">{{$linkss->session}}</td>
                                            <td class="text-center">{{$linkss->link}}</td>
                                            <td class="text-center">{{$linkss->des}}</td>
                                            <td>
                                                <form method="post"
                                                      action="{{route('ins.video.delete',['id'=> $linkss->id])}}"
                                                      style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="close" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </form>
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
