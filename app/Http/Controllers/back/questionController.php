<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\news;
use App\question;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class questionController extends Controller
{

    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $question = question::paginate(10);
        return view('back.question.index',compact('question','news2','com','user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.question.create',compact('news2','com','user'));

    }

    public function store(Request $request)
    {
        $question = new question();
        $question->question = $request->title;
        $question->answer = $request->des;
        $question->save();

        return redirect('administrator/question');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $question = question::findorFail($id);
        return view('back.question.edit',compact('question','news2','com','user'));
    }


    public function update(Request $request, $id)
    {
        $question = question::findOrFail($id);
        $question->question = $request->title;
        $question->answer = $request->des;
        $question->save();

        return redirect('administrator/question');
    }


    public function destroy($id)
    {
        $question = question::findOrFail($id);
        $question->delete();

        return redirect('administrator/question');
    }
}
