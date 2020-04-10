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
                            <a href="index.html" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i>
                                <span> امور مالی </span> </a>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i>
                                <span>کلاس ها</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.html">ریاضی</a></li>
                                <li><a href="ui-cards.html">زبان</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i>
                                <span>پروفایل کاربری </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal"
                                       data-whatever="@mdo">ویرایش مشخصات</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="inbox.html" class="waves-effect"><i
                                    class="zmdi zmdi-email"></i><span> پیام ها </span></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #b4b4b4">
                <form action="" method="">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">ویرایش مشخصات</h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label text-danger">نام و نام
                                    خانوادگی:</label>
                                <input name="name" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->name}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label text-danger">شماره ملی:</label>
                                <input name="nationalId" type="text" class="form-control" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label text-danger">ایمیل:</label>
                                <input name="email" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->email}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label text-danger">پسورد قدیمی</label>
                                <input name="oldPassword" type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label text-danger">پسورد جدید:</label>
                                <input name="newPassword" type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
