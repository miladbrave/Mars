<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\exam;
use App\news;
use App\newstitle;
use App\photo;
use App\university;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newsController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = news::with('photo')->orderBy('created_at','desc')->paginate(10);
        return view('back.news.index', compact('news','news2','com','user'));
    }


    public function create()
    {
                $newsTitle = newstitle::all();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.create', compact('exam', 'country','news2','com','user','newsTitle'));
    }


    public function store(Request $request)
    {
        $news = new news();
        $news->title = $request->title;
        $news->description = $request->des;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->examuni = $request->examuni;
        $news->select = $request->select;
        $news->newsTitle = $request->newsTitle;

//        $news->status = $request->status;
        $news->save();

        $photo = explode(',', $request->input('photo_id')[0]);
        $photos = photo::findOrFail($photo)->first();
        $photos->news_id = $news->id;
        $photos->save();

        return redirect('administrator/news');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $newsTitle = newstitle::all();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = news::with('photo')->findorFail($id);
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.edit', compact('news', 'exam', 'country','news2','com','user','newsTitle'));
    }

    public function update(Request $request, $id)
    {
        $news = news::findOrFail($id);
        $news->title = $request->title;
        $news->description = $request->des;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->examuni = $request->examuni;
        $news->select = $request->select;
        $news->newsTitle = $request->newsTitle;

//        $news->status = $request->status;
        $news->save();

        $photo = explode(',', $request->input('photo_id')[0]);
        $photos = photo::findOrFail($photo)->first();
        $photos->news_id = $news->id;
        $photos->save();

        return redirect('administrator/news');
    }

    public function destroy($id)
    {
        $news = news::with('photo')->findOrFail($id);
        $photo = photo::findOrFail($news->photo->id);
        $photo->delete();
        $news->delete();
         unlink(getcwd() . $photo->path );
        return redirect('administrator/news');
    }

    public function titleIndex()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = newstitle::paginate(10);
        return view('back.news.title.index', compact('news','news2','com','user'));
    }

    public function createtitle()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.title.create', compact('exam', 'country','news2','com','user'));
    }

    public function storetitle(Request $request)
    {
        $news = new newstitle();
        $news->title = $request->title;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->select = $request->select;
        $news->save();
        return redirect('administrator/newsTitle');
    }

    public function edittitle($id)
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = newstitle::findorFail($id);
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.title.edit', compact('news', 'exam', 'country','news2','com','user'));
    }

    public function updatetitle(Request $request, $id)
    {
        $news = newstitle::findOrfail($id);
        $news->title = $request->title;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->select = $request->select;
        $news->save();
        return redirect('administrator/newsTitle');
    }

    public function deletetitle($id)
    {
        $news = newstitle::findOrFail($id);
        $news->delete();

        return redirect('administrator/newsTitle');
    }

     public function delete($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        unlink(getcwd() . $photo->path );
        return back();
    }
}
