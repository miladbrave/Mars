<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\exam;
use App\news;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $exam = exam::paginate(10);
        return view('back.exam.index',compact('exam','news2','com','user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.exam.create',compact('news2','com','user'));
    }

    public function store(Request $request)
    {
        $exam = new exam();
        $exam->title = $request->title;
        $exam->country = $request->country;
        $exam->description = $request->des;
        $exam->save();

        $photos =explode(',',$request->input('photo_id')[0]);
        $exam->photos()->sync($photos);

        return redirect('administrator/exam');
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
        $exam = exam::findOrFail($id);
        return view('back.exam.edit',compact('exam','news2','com','user'));
    }

    public function update(Request $request, $id)
    {
        $exam = exam::findOrFail($id);
        $exam->title = $request->title;
        $exam->country = $request->country;
        $exam->description = $request->des;
        $exam->save();

        $photos =explode(',',$request->input('photo_id')[0]);
        $exam->photos()->sync($photos);

        return redirect('administrator/exam');
    }

    public function destroy($id)
    {
        $exam = exam::findOrFail($id);
        $exam->delete();
        return redirect('administrator/exam');
    }
}
