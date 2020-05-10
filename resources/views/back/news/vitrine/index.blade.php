@extends('back.dashboard')
@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0">اخبار صفحه اول</h4>
                <a class="btn-sm btn-primary pull-left" href="{{route('news.vit.create')}}"
                   style="margin-top: -3%">جدید</a>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">تصویر</th>
                                <th class="text-center">شماره</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logos as $logo)
                                <tr>
                                    <td class="text-center" width="25%">
                                        @if(isset($logo->path))
                                            <img src="{{($logo->path)}}" alt="1"
                                                 width="60%" height="70px">
                                        @endif
                                    </td>
                                    <td class="text-center">{{$logo->section_id}}</td>
                                    <td class="text-center">
                                        <a href="{{route('news.vit.edit',$logo->id)}}"
                                           class="btn-sm btn-warning">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach



                            {{--                            <tr>--}}
                            {{--                                <td class="text-center">2</td>--}}
                            {{--                                <td class="text-center" width="25%">--}}
                            {{--                                    @foreach($logos->where('section_id',2) as $logo)--}}
                            {{--                                        @if(isset($logo->path))--}}
                            {{--                                            <img src="{{($logo->path)}}" alt="2"--}}
                            {{--                                                 width="60%" height="70px">--}}
                            {{--                                        @endif--}}
                            {{--                                    @endforeach--}}
                            {{--                                </td>--}}
                            {{--                                <td class="text-center">دوم</td>--}}
                            {{--                                <td class="text-center">--}}
                            {{--                                    <a href="{{route('news.vit.create',2)}}"--}}
                            {{--                                       class="btn-sm btn-warning">ویرایش</a>--}}
                            {{--                                </td>--}}
                            {{--                            </tr>--}}
                            {{--                            <tr>--}}
                            {{--                                <td class="text-center">3</td>--}}
                            {{--                                <td class="text-center" width="25%">--}}
                            {{--                                    @foreach($logos->where('section_id',3) as $logo)--}}
                            {{--                                        @if(isset($logo->path))--}}
                            {{--                                            <img src="{{($logo->path)}}" alt="3"--}}
                            {{--                                                 width="60%" height="70px">--}}
                            {{--                                        @endif--}}
                            {{--                                    @endforeach--}}
                            {{--                                </td>--}}
                            {{--                                <td class="text-center">سوم</td>--}}
                            {{--                                <td class="text-center">--}}
                            {{--                                    <a href="{{route('news.vit.create',3)}}"--}}
                            {{--                                       class="btn-sm btn-warning">ویرایش</a>--}}
                            {{--                                </td>--}}
                            {{--                            </tr>--}}
                            {{--                            <tr>--}}
                            {{--                                <td class="text-center">4</td>--}}
                            {{--                                <td class="text-center" width="25%">--}}
                            {{--                                    @foreach($logos->where('section_id',4) as $logo)--}}
                            {{--                                        @if(isset($logo->path))--}}
                            {{--                                            <img src="{{($logo->path)}}" alt="4"--}}
                            {{--                                                 width="60%" height="70px">--}}
                            {{--                                        @endif--}}
                            {{--                                    @endforeach--}}
                            {{--                                </td>--}}
                            {{--                                <td class="text-center">چهارم</td>--}}
                            {{--                                <td class="text-center">--}}
                            {{--                                    <a href="{{route('news.vit.create',4)}}"--}}
                            {{--                                       class="btn-sm btn-warning">ویرایش</a>--}}
                            {{--                                </td>--}}
                            {{--                            </tr>--}}
                            {{--                            <tr>--}}
                            {{--                                <td class="text-center">5</td>--}}
                            {{--                                <td class="text-center" width="25%">--}}
                            {{--                                    @foreach($logos->where('section_id',5) as $logo)--}}
                            {{--                                        @if(isset($logo->path))--}}
                            {{--                                            <img src="{{($logo->path)}}" alt="2"--}}
                            {{--                                                 width="60%" height="70px">--}}
                            {{--                                        @endif--}}
                            {{--                                    @endforeach--}}
                            {{--                                </td>--}}
                            {{--                                <td class="text-center">پنجم</td>--}}
                            {{--                                <td class="text-center">--}}
                            {{--                                    <a href="{{route('news.vit.create',5)}}"--}}
                            {{--                                       class="btn-sm btn-warning">ویرایش</a>--}}
                            {{--                                </td>--}}
                            {{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
