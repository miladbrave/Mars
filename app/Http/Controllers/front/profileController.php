<?php

namespace App\Http\Controllers\front;

use App\Classtime;
use App\Financial;
use App\Link;
use App\test;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class profileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth()->user()->id)->get();
        $finance = Financial::where('student_number', Auth()->user()->id)->get();
        $classtime = Classtime::where('student_number', Auth()->user()->id)->get();

        return view('front.profile.index', compact('user', 'finance', 'classtime'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|unique:users,phone,' . $user->id,
            'national_code' => 'required|numeric',
        ], [
            'name.required' => 'نام و نام خانوادگی را وارد کنید.',
            'email.required' => 'ایمیل را وارد کنید',
            'email.email' => 'ایمیل معتبر وارد کنید',
            'email.unique' => 'این ایمیل قبلا ثبت شده است',
            'phone.unique' => 'این شماره تماس قبلا ثبت شده است',
            'phone.required' => 'شماره تماس را وارد کنید.',
            'national_code.required' => 'کد ملی وارد کنید',
            'national_code.numeric' => ' کد ملی باید عدد باشد',
        ]);
        $validator->validate();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->national_code = $request->national_code;
        $user->phone = $request->phone;
        $user->city = $request->city;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->save();

        return back()->withSuccess('تغییرات با موفقیت اعمال گردید.');
    }

    public function user()
    {
        $user = User::where('id', Auth()->user()->id)->get();
        $finance = Financial::where('student_number', Auth()->user()->id)->get();
        $classtime = Classtime::where('student_number', Auth()->user()->id)->get();

        return view('front.profile.user.edit', compact('user', 'finance', 'classtime'));
    }

    public function class()
    {
        $user = User::where('id', Auth()->user()->id)->get();
        $finance = Financial::where('student_number', Auth()->user()->id)->get();
        $classtime = Classtime::where('student_number', Auth()->user()->id)->get();
        $class = Classtime::where('student_number', Auth()->user()->id)->get()->pluck('title');
        $teacher = Classtime::where('student_number', Auth()->user()->id)->get()->pluck('teacher');


        $links = Link::whereIn('title',$class->toArray())->whereIn('teacher',$teacher->toArray())->latest()->get();

        return view('front.profile.class.class', compact('user', 'finance', 'classtime', 'links'));
    }

}
