<?php

namespace App\Http\Controllers\back;

use App\Classtime;
use App\comment;
use App\Financial;
use App\Link;
use App\news;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class instituteController extends Controller
{
    public function index()
    {
        $student = User::where('admin', null)->get();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();

        return view('back.inistitue.index', compact('news2', 'com', 'user', 'student'));
    }

    public function profile($id)
    {
        $student = User::where('id', $id)->get();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $finance = Financial::where('student_number', $id)->get();
        $classtime = Classtime::where('student_number', $id)->get();

        return view('back.inistitue.profile', compact('news2', 'com', 'user', 'student', 'finance','classtime'));
    }

//    public function save(Request $request, $id)
//    {
//        if ($request->tags) {
//            foreach ($request->tags as $tag) {
//                if(is_null($tag)){
//                    Financial::create(['student_number' => $id, 'data' => '-']);
//                }
//                Financial::create(['student_number' => $id, 'data' => $tag]);
//            }
//        }
//    }

    public function money(Request $request, $id)
    {
        $finance = new Financial();
        $finance->kind = $request->kind;
        $finance->price = $request->price;
        $finance->date = $request->date;
        $finance->fore = $request->for;
        $finance->des = $request->description;
        $finance->student_number = $id;
        $finance->save();
        return back()->withSuccess('تغییرات با موفقیت اعمال گردید.');

    }

    public function classtime(Request $request, $id)
    {
        $classtime = new Classtime();
        $classtime->title = $request->title;
        $classtime->start = $request->starting;
        $classtime->week = $request->week;
        $classtime->time = $request->time;
        $classtime->teacher = $request->teacher;
        $classtime->des = $request->des;
        $classtime->student_number = $id;
        $classtime->save();

        return back()->withSuccess('تغییرات با موفقیت اعمال گردید.');
    }

    public function message(Request $request, $id)
    {
        $message = User::findOrFail($id);
        $message->message = $request->message;
        $message->save();

        return back()->withSuccess('تغییرات با موفقیت اعمال گردید.');
    }

    public function delete($id)
    {
        $finance = Financial::findOrFail($id);
        $finance->delete();
        return back()->withِDanger('تغییرات با موفقیت اعمال گردید.');
    }

    public function classdelete($id)
    {
        $class = Classtime::findOrFail($id);
        $class->delete();
        return back()->withِDanger('تغییرات با موفقیت اعمال گردید.');
    }

    public function video()
    {
        $student = User::where('admin', null)->get();
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();

        $classes = Classtime::all();
        $links = Link::latest()->get();
        return view('back.inistitue.video', compact('news2', 'com', 'user', 'student','classes','links'));
    }
    public function viddeosave(Request $request){

        $link = new Link();
        $link->title = $request->class;
        $link->date = $request->date;
        $link->des = $request->description;
        $link->link = $request->link;
        $link->session = $request->sessio;
        $link->teacher = $request->teacher;
        $link->save();

        return back()->withSuccess('تغییرات با موفقیت اعمال گردید.');
    }

    public function videodelete($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();
        return back()->withِDanger('تغییرات با موفقیت اعمال گردید.');
    }

    public function userdelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->withِDanger('تغییرات با موفقیت اعمال گردید.');
    }
}
