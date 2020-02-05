<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\news;
use App\photo;
use App\university;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class universityController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $university = university::paginate(10);
        return view('back.university.index', compact('university', 'news2', 'com', 'user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.university.create', compact('news2', 'com', 'user'));
    }

    public function store(Request $request)
    {
        $university = new university();
        $university->title = $request->title;
        $university->country = $request->country;
        $university->description = $request->des;
        $university->user_id = Auth()->user()->id;
        $university->save();

        $photos = explode(',', $request->input('photo_id')[0]);
        $university->photos()->sync($photos);

        return redirect('administrator/university');
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
        $university = university::findOrFail($id);
        return view('back.university.edit', compact('university', 'news2', 'com', 'user'));
    }

    public function update(Request $request, $id)
    {
        $university = university::findOrFail($id);
        $university->title = $request->title;
        $university->country = $request->country;
        $university->description = $request->des;
        $university->save();

        $photos = explode(',', $request->input('photo_id')[0]);
        $university->photos()->sync($photos);

        return redirect('administrator/university');
    }

    public function destroy($id)
    {
        $university = university::findOrFail($id);
        $photoid = university::with('photos')->where('id',$university->id)->first();
        foreach ($photoid->photos as $photo){
        unlink(getcwd() . $photo->path);
        $photo->delete();
        }
        $university->delete();
        return redirect('administrator/university');
    }


    public function delete($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        unlink(getcwd() . $photo->path);

        return back();
    }
}
