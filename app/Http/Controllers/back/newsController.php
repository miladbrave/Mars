<?php

namespace App\Http\Controllers\back;

use App\exam;
use App\news;
use App\university;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newsController extends Controller
{
    public function index()
    {
        $news = news::paginate(10);
        return view('back.news.index',compact('news'));
    }


    public function create()
    {
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.create',compact(['exam','country']));
    }


    public function store(Request $request)
    {
        $news = new news();
        $news->title = $request->title;
        $news->description = $request->des;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->select = $request->select;
//        $news->status = $request->status;
        $news->save();

        return redirect('administrator/news');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $news = news::findorFail($id);
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.edit',compact('news','exam','country'));
    }

    public function update(Request $request, $id)
    {
        $news = news::findOrFail($id);
        $news->title = $request->title;
        $news->description = $request->des;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->select = $request->select;

//        $news->status = $request->status;
        $news->save();

        return redirect('administrator/news');
    }

    public function destroy($id)
    {
        $news = news::findOrFail($id);
        $news->delete();

        return redirect('administrator/news');
    }
}
