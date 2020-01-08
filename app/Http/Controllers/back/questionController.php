<?php

namespace App\Http\Controllers\back;

use App\question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class questionController extends Controller
{

    public function index()
    {
        $question = question::paginate(10);
        return view('back.question.index',compact('question'));
    }

    public function create()
    {
        return view('back.question.create');

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
        $question = question::findorFail($id);
        return view('back.question.edit',compact('question'));
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
