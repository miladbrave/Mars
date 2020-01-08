<?php

namespace App\Http\Controllers\back;

use App\university;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class universityController extends Controller
{
    public function index()
    {
        $university = university::paginate(10);
        return view('back.university.index',compact('university'));
    }

    public function create()
    {
        return view('back.university.create');
    }

    public function store(Request $request)
    {
        $university = new university();
        $university->title = $request->title;
        $university->country = $request->country;
        $university->description = $request->des;
        $university->user_id = Auth()->user()->id;
        $university->save();

        $photos =explode(',',$request->input('photo_id')[0]);
        $university->photos()->sync($photos);

        return redirect('administrator/university');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $university = university::findOrFail($id);
        return view('back.university.edit',compact('university'));
    }

    public function update(Request $request, $id)
    {
        $university = university::findOrFail($id);
        $university->title = $request->title;
        $university->country = $request->country;
        $university->description = $request->des;
        $university->save();

        $photos =explode(',',$request->input('photo_id')[0]);
        $university->photos()->sync($photos);

        return redirect('administrator/university');
    }

    public function destroy($id)
    {
        $university = university::findOrFail($id);
//        $photo = university::findOrFail($university->photo_id);
//        unlink($university->photo->path);
//        $photo->delete();
        $university->delete();
        return redirect('administrator/university');
    }
}
