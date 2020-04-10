<?php

namespace App\Http\Controllers\front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth()->user()->id)->get();
        return view('front.profile.index',compact('user'));
    }

    public function financial()
    {

    }

    public function classes()
    {

    }

    public function user()
    {

    }

    public function message()
    {

    }


}
