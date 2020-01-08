<?php

namespace App\Http\Controllers\back;

use App\exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index()
    {
        $exam = exam::paginate(10);
        return view('back.exam.index',compact('exam'));
    }

    public function create()
    {
        return view('back.exam.create');
    }

    public function store(Request $request)
    {
        $exam = new exam();
        $exam->title = $request->title;
        $exam->country = $request->country;
        $exam->description = $request->des;
        $exam->save();

        return redirect('administrator/exam');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $exam = exam::findOrFail($id);
        return view('back.exam.edit',compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $exam = exam::findOrFail($id);
        $exam->title = $request->title;
        $exam->country = $request->country;
        $exam->description = $request->des;
        $exam->save();

        return redirect('administrator/exam');
    }

    public function destroy($id)
    {
        $exam = exam::findOrFail($id);
        $exam->delete();
        return redirect('administrator/exam');
    }
}
