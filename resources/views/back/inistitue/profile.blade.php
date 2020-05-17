@extends('back.dashboard')

@section('content')
    @foreach($student as $students)@endforeach
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            @include('front.profile.alert.alert')
            <div class="panel-heading wt-panel-heading p-a20 bg-danger">
                <h4 class="text-white">مشخصات فردی</h4>
            </div>
            <div class="panel-body wt-panel-body  bg-danger">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">نام و نام خانوادگی</th>
                                <th class="text-center">تاریخ تولد</th>
                                <th class="text-center">کد ملی</th>
                                <th class="text-center">شَماره تماس</th>
                                <th class="text-center">ایمیل</th>
                                <th class="text-center">شهر</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($student as $students)
                                    <td class="text-center">{{$students->id}}</td>
                                    <td class="text-center">{{$students->name}}</td>
                                    <td class="text-center">{{$students->birthday}}</td>
                                    <td class="text-center">{{$students->national_code}}</td>
                                    <td class="text-center">{{$students->phone}}</td>
                                    <td class="text-center">{{$students->email}}</td>
                                    <td class="text-center">{{$students->city}}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-heading wt-panel-heading p-a20  bg-warning mt-3">
                <h4 class="text-white">امور مالی</h4>
            </div>
            <div class="panel-body wt-panel-body bg-warning">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="container">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center bg-warning">نوع پرداخت</th>
                                <th class="text-center bg-warning">مبلغ</th>
                                <th class="text-center bg-warning">تاریخ</th>
                                <th class="text-center bg-warning">بابت</th>
                                <th class="text-center bg-warning">توضیح</th>
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
                                        <td>
                                            <form method="post"
                                                  action="{{route('ins.delete.money',['id'=> $testss->id])}}"
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
                        <form method="post" action="{{route('ins.save.money',['id' => $students->id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="select" class="mt-2">نوع پرداختی</label>
                                        <select class="form-control" id="select" name="kind">
                                            <option value="نقدی">نقدی</option>
                                            <option value="کارت خوان">کارت خوان</option>
                                            <option value="چک">چک</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label for="mount" class="mt-2">مبلغ(ریال)</label>
                                        <input type="text" class="form-control" id="mount" name="price" required
                                               placeholder="مبلغ">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label for="date" class="mt-2">تاریخ</label>
                                        <input type="text" class="form-control" id="date" name="date" required
                                               placeholder="تاریخ">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label for="about" class="mt-2">بابت</label>
                                        <input type="text" class="form-control" id="about" name="for"
                                               placeholder="بابت">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label for="des" class="mt-2">توضیح</label>
                                        <input type="text" class="form-control" id="des" name="description"
                                               placeholder="توضیحات">
                                    </div>
                                </div>

                                {{--                                <div class="col-md-2 col-sm-2">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label for="exampleInputEmail1" class="mt-2">افزودم موارد دیگر</label>--}}
                                {{--                                        <button class="btn btn-sm btn-dark add_more_button">افزودن</button>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="row">--}}
                                {{--                                    <p class="row test mr-4" style="width: 90%"></p>--}}
                                {{--                                </div>--}}
                                <div class="col-md-2 col-sm-2">
                                    <button type="submit" class="btn btn-sm btn-success mt-5 pull-left">اعمال تغییرات
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel-heading wt-panel-heading p-a20  bg-primary mt-3">
                <h4 class="text-white">امور آموزشی</h4>
            </div>
            <div class="panel-body wt-panel-body  bg-primary">
                <div class="container">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center bg-primary">نام کلاس</th>
                            <th class="text-center bg-primary">تاریخ شروع کلاس</th>
                            <th class="text-center bg-primary">روزهای هفته</th>
                            <th class="text-center bg-primary">زمان کلاس</th>
                            <th class="text-center bg-primary">زمان کلاس</th>
                            <th class="text-center bg-primary">توضیح</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classtime->chunk(1) as $classtimes)
                            <tr>
                                @foreach($classtimes as $classtimess)
                                    <td class="text-center">{{$classtimess->title}}</td>
                                    <td class="text-center">{{$classtimess->start}}</td>
                                    <td class="text-center">{{$classtimess->week}}</td>
                                    <td class="text-center">{{$classtimess->time}}</td>
                                    <td class="text-center">{{$classtimess->teacher}}</td>
                                    <td class="text-center">{{$classtimess->des}}</td>
                                    <td>
                                        <form method="post"
                                              action="{{route('ins.delete.class',['id'=> $classtimess->id])}}"
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
                <div class="container dashboard-list-box list-box-with-icon">
                    <form method="post" action="{{route('ins.save.class',['id' => $students->id])}}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="class" class="mt-2">نام کلاس</label>
                                        <input type="text" class="form-control" name="title" id="class" required>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="date" class="mt-2">تاریخ شروع کلاس</label>
                                        <input type="text" class="form-control" name="starting" id="date">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="week" class="mt-2">روزهای هفته</label>
                                        <input type="text" class="form-control" name="week" id="week">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="time" class="mt-2">زمان کلاس</label>
                                        <input type="text" class="form-control" name="time" id="time">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="teacher" class="mt-2">استاد مربوطه</label>
                                        <input type="text" class="form-control" name="teacher" id="teacher" required>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="form-group">
                                        <label for="classdes" class="mt-2">توضیحات</label>
                                        <input type="text" class="form-control" name="des" id="classdes">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-4"></div>
                                <div class="col-md-2 col-sm-4">
                                    <button type="submit" class="btn btn-sm btn-success mt-2 mb-3 pull-left">اعمال
                                        تغییرات
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body wt-panel-body bg-dark mt-2">
                <form action="{{route('ins.message',['id'=>$students->id])}}" method="post">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-2">
                                <div class="form-group">
                                    <label for="message" class="mt-2">پیام برای مخاطب</label>
                                    <textarea type="text" class="form-control" id="des" name="message"
                                              placeholder="پیام"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-2"></div>
                            <div class="col-md-2 col-sm-2 mt-3">
                                <button type="submit" class="btn btn-sm btn-success mt-5 ml-3 pull-left">ارسال پیام
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var max_fields_limit = 10;
            var x = 1;
            $('.add_more_button').click(function (e) {
                e.preventDefault();
                if (x < max_fields_limit) {
                    x++;
                    $('.test').append('<br />' + '<div>' +
                        '<input type="text" size="5px" style="margin-right:35px;" ' + 'name="tags[]" >' +
                        '</div>');
                    for (i = 0; i < 4; i++) {
                        $('.test').append('<div>' +
                            '<input type="text" size="10px" style="margin-right:50px;" ' + 'name="tags[]" >' +
                            '</div>');
                    }
                }
            });
            $('.input_fields_container_part').on("click", ".remove_field", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>

@endsection
