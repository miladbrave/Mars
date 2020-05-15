<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\exam;
use App\Logo;
use App\news;
use App\newstitle;
use App\photo;
use App\university;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class newsController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = news::with('photo')->orderBy('created_at', 'desc')->paginate(10);
        return view('back.news.index', compact('news', 'news2', 'com', 'user'));
    }


    public function create()
    {
        $newsTitle = newstitle::all();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.create', compact('exam', 'country', 'news2', 'com', 'user', 'newsTitle'));
    }


    public function store(Request $request)
    {
        function make_slug($string, $separator = '-')
        {
            $string = trim($string);
            $string = mb_strtolower($string, 'UTF-8');
            $string = preg_replace("/[^a-z0-9_\s-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", '', $string);
            $string = preg_replace("/[\s-_]+/", ' ', $string);
            $string = preg_replace("/[\s_]/", $separator, $string);
            return $string;
        }

        $news = new news();
        $news->titlefa = $request->titlefa;
        $news->titlela = $request->titlela;
        $news->slug = make_slug($request->titlefa);
        $news->description1 = $request->des1;
        $news->description2 = $request->des2;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->examuni = $request->examuni;
        $news->select = $request->select;
        $news->section_id = $request->number;
        $news->newsTitle = make_slug($request->newsTitle);

        $news->save();

        if ($request->input('photo_id')[0]) {
            $photo = explode(',', $request->input('photo_id')[0]);
            $photos = photo::findOrFail($photo)->first();
            $photos->news_id = $news->id;
            $photos->save();
        }

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
        return view('back.news.edit', compact('news', 'exam', 'country', 'news2', 'com', 'user', 'newsTitle'));
    }

    public function update(Request $request, $id)
    {
        function make_slug($string, $separator = '-')
        {
            $string = trim($string);
            $string = mb_strtolower($string, 'UTF-8');
            $string = preg_replace("/[^a-z0-9_\s-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", '', $string);
            $string = preg_replace("/[\s-_]+/", ' ', $string);
            $string = preg_replace("/[\s_]/", $separator, $string);
            return $string;
        }

        $news = news::findOrFail($id);
        $news->titlefa = $request->titlefa;
        $news->titlela = $request->titlela;
        $news->slug = make_slug($request->titlefa);
        $news->description1 = $request->des1;
        $news->description2 = $request->des2;
        $news->exam = $request->exam;
        $news->country = $request->country;
        $news->examuni = $request->examuni;
        $news->select = $request->select;
        $news->section_id = $request->number;
        $news->newsTitle = make_slug($request->newsTitle);
        $news->save();

        if ($request->input('photo_id')[0]) {
            $photo = explode(',', $request->input('photo_id')[0]);
            $photos = photo::findOrFail($photo)->first();
            $photos->news_id = $news->id;
            $photos->save();
        }

        return redirect('administrator/news');
    }

    public function destroy($id)
    {
        $news = news::with('photo')->findOrFail($id);
        $photo = photo::findOrFail($news->photo->id);
        $photo->delete();
        $news->delete();
        unlink(getcwd() . $photo->path);
        return redirect('administrator/news');
    }

    public function titleIndex()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $news = newstitle::paginate(10);
        return view('back.news.title.index', compact('news', 'news2', 'com', 'user'));
    }

    public function createtitle()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $exam = exam::all();
        $country = university::distinct()->get('country');
        return view('back.news.title.create', compact('exam', 'country', 'news2', 'com', 'user'));
    }

    public function storetitle(Request $request)
    {
        function make_slug($string, $separator = '-')
        {
            $string = trim($string);
            $string = mb_strtolower($string, 'UTF-8');
            $string = preg_replace("/[^a-z0-9_\s-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", '', $string);
            $string = preg_replace("/[\s-_]+/", ' ', $string);
            $string = preg_replace("/[\s_]/", $separator, $string);
            return $string;
        }

        $news = new newstitle();
        $news->title = $request->title;
        $news->slug = make_slug($request->title);
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
        return view('back.news.title.edit', compact('news', 'exam', 'country', 'news2', 'com', 'user'));
    }

    public function updatetitle(Request $request, $id)
    {
        function make_slug($string, $separator = '-')
        {
            $string = trim($string);
            $string = mb_strtolower($string, 'UTF-8');
            $string = preg_replace("/[^a-z0-9_\s-ءاآؤئبپتثجچحخدذرزژسشصضطظعغفقكکگلمنوهی]/u", '', $string);
            $string = preg_replace("/[\s-_]+/", ' ', $string);
            $string = preg_replace("/[\s_]/", $separator, $string);
            return $string;
        }

        $news = newstitle::findOrfail($id);
        $news->title = $request->title;
        $news->slug = make_slug($request->title);
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
        unlink(getcwd() . $photo->path);
        return back();
    }

    public function vitrineIndex()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $logos = Logo::whereNotNull('section_id')->get();
        return view('back.news.vitrine.index', compact('logos', 'news2', 'com', 'user'));
    }

    public function vitrineCreate()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $logos = Logo::all();
        return view('back.news.vitrine.create', compact('logos', 'news2', 'com', 'user', 'logos'));
    }

    public function vitrineStore(Request $request)
    {
        $logo = $request->file('logo');
        $filename = time() . $logo->getClientOriginalName();
        $original_name = $logo->getClientOriginalName();
        $logo->move('photo', $filename);

        $logo = new Logo();
        $logo->original_name = $original_name;
        $logo->path = $filename;
        $logo->section_id = $request->number;
        $logo->save();

        return redirect()->route('news.vit.index');
    }

    public function vitrineedit($id)
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $logos = Logo::where('id', $id)->first();
        return view('back.news.vitrine.edit', compact('logos', 'news2', 'com', 'user', 'logos'));
    }


    public function vitrineupdate(Request $request, $id)
    {
        $pic = Logo::findOrFail($id);
        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $filename = time() . $logo->getClientOriginalName();
            $original_name = $logo->getClientOriginalName();
            $logo->move('photo', $filename);
            $pic->original_name = $original_name;
            $pic->path = $filename;
        }
        $pic->section_id = $request->number;
        $pic->save();

        return redirect()->route('news.vit.index');
    }
}
