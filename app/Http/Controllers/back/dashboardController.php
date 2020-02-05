<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\news;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.dashboard',compact('news2','com','user'));
    }

}
