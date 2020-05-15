@extends('front.profile.index')

@section('middle')
    @foreach($user as $users) @endforeach
    <div class="content-page">
        <div class="container" style="padding-left: 15%;padding-right: 15%;padding-top: 10%">
            @include('front.profile.alert.alert')
            <form method="post" action="{{ route('ins.profile.update',['id' => $users->id]) }}">
                <div class="modal-content" style="background-color: #b4b4b4">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">ویرایش مشخصات</h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group" @if($errors->has('name')) has-error @endif>
                                <label for="recipient-name" class="col-form-label text-danger">نام و نام
                                    خانوادگی:</label>
                                <input name="name" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->name}}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong class="text-warning">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('national_code')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">شماره ملی:</label>
                                <input name="national_code" type="text" class="form-control" id="recipient-name"
                                       data-mask="9999999999" value="{{$users->national_code}}">
                                @error('national_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong class="text-warning">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('phone')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">شماره تماس:</label>
                                <input name="phone" type="number" class="form-control" id="recipient-name"
                                       value="{{$users->phone}}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <h4 class="text-warning">{{ $message }}</h4>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('city')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">شهر:</label>
                                <input name="city" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->city}}">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong class="text-warning">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('birthday')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">تاریخ تولد:</label>
                                <input name="birthday" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->birthday}}">
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                        <strong class="text-warning">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('email')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">ایمیل:</label>
                                <input name="email" type="text" class="form-control" id="recipient-name"
                                       value="{{$users->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong class="text-warning">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" @if($errors->has('Password')) has-error @endif>
                                <label for="message-text" class="col-form-label text-danger">پسورد جدید:</label>
                                <input name="Password" type="password" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
