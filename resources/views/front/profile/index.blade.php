@extends('front.profile.layout.master')

@section('content')
    <div id="wrapper">
        @foreach($user as $users) @endforeach
        <div class="topbar">
            <div class="topbar-left">
                <a href="{{route('main')}}" class="logo"><span>مارس هلدینگ</span><i class="zmdi zmdi-layers"></i></a>
            </div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">{{ $users->name }} خوش آمدید .</h4>
                        </li>
                    </ul>
                    <div class="pull-right"><img src="{{ asset('/image/logo3.png') }}" alt="MarsHolding" width="150"
                                                 height="70"></div>
                </div>
            </div>
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{asset('front/assets/images/users/avatar-1.jpg')}}" alt="user-img" title="Mat Helme"
                             class="img-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                    </div>
                    <h5><a href="#">{{$users->name}}</a></h5>
                </div>
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">دسته بندی ها</li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect active" data-toggle="modal"
                               data-target="#exampleModal2" data-whatever="@mdo"><i class="zmdi zmdi-money"></i>
                                <span> امور مالی </span> </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i>
                                <span>کلاس ها</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                @foreach($classtime as $classtimes)
                                    <li><a href="javascript:void(0);" data-toggle="modal"
                                           data-target="#exampleModal3" data-whatever="@mdo">{{$classtimes->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i>
                                <span>پروفایل کاربری </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{route('ins.profile.user')}}"> ویرایش مشخصات</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect" data-toggle="modal"
                               data-target="#exampleModal1" data-whatever="@mdo"><i class="zmdi zmdi-email"></i><span> پیام ها </span></a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                               class="waves-effect">
                                <i class="zmdi zmdi-outlook"></i><span>خروج</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        @yield('middle')
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #b4b4b4">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">پیام</h3>
                </div>
                <div class="modal-body">
                    <div class="panel-body wt-panel-body">
                        <div class="container dashboard-list-box list-box-with-icon">
                            <h3>{{$users->message}}</h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">ادامه</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #b4b4b4">
                <form action="" method="">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">صورتحساب ها</h3>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body wt-panel-body">
                            <div class="container dashboard-list-box list-box-with-icon">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th class="text-center">نوع پرداخت</th>
                                            <th class="text-center">مبلغ</th>
                                            <th class="text-center">تاریخ</th>
                                            <th class="text-center">بابت</th>
                                            <th class="text-center">توضیح</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($finance->chunk(1) as $tests)
                                            <tr>
                                                @foreach($tests as $testss)
                                                    <td class="text-center">{{$testss->kind}}</td>
                                                    <td class="text-center">{{$testss->price}}</td>
                                                    <td class="text-center">{{$testss->date}}</td>
                                                    <td class="text-center">{{$testss->fore}}</td>
                                                    <td class="text-center">{{$testss->des}}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">ادامه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #b4b4b4">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">کلاس ها</h3>
                </div>
                <div class="modal-body">
                    <div class="panel-body wt-panel-body">
                        <div class="container dashboard-list-box list-box-with-icon">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th class="text-center">عنوان</th>
                                        <th class="text-center">تاریخ شروع کلاس</th>
                                        <th class="text-center">روزهای هفته</th>
                                        <th class="text-center">ساعت کلاس</th>
                                        <th class="text-center">استاد مربوطه</th>
                                        <th class="text-center">توضیحات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($classtime as $classtimes)
                                        <tr>
                                            <td class="text-center">{{$classtimes->title}}</td>
                                            <td class="text-center">{{$classtimes->start}}</td>
                                            <td class="text-center">{{$classtimes->week}}</td>
                                            <td class="text-center">{{$classtimes->time}}</td>
                                            <td class="text-center">{{$classtimes->teacher}}</td>
                                            <td class="text-center">{{$classtimes->des}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">لغو</button>
                    <a type="button" class="btn btn-primary" href="{{route('ins.profile.class')}}">ادامه</a>
                </div>
            </div>
        </div>
    </div>
@endsection
