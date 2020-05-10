<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\news;
use App\photo;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sliderController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $slider = Slider::with('photo')->get();
        return view('back.slider.index', compact('slider', 'news2', 'com', 'user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $slider = slider::paginate(10);
        return view('back.slider.create', compact('slider', 'news2', 'com', 'user'));
    }

    public function store(Request $request)
    {
        $slider = new slider;
        $slider->number = $request->number;
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->link = $request->link;
        $slider->status = 0;
        $slider->description = $request->des;
        $slider->save();

        if ($request->input('photo_id')[0]) {
            $photo = explode(',', $request->input('photo_id')[0]);
            $photos = photo::findOrFail($photo)->first();
            $photos->slider_id = $slider->id;
            $photos->save();
        }

        return redirect('administrator/slider');
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
        $slider = Slider::with('photo')->findOrFail($id);
        return view('back.slider.edit', compact('slider', 'news2', 'com', 'user'));
    }

    public function update(Request $request, $id)
    {
        $slider = slider::findOrFail($id);
        $slider->number = $request->number;
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->link = $request->link;
        $slider->description = $request->des;
        $slider->save();

        if ($request->input('photo_id')[0]) {
            $photo = explode(',', $request->input('photo_id')[0]);
            $photos = photo::findOrFail($photo)->first();
            $photos->slider_id = $slider->id;
            $photos->save();
        }

        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $slide = slider::with('photo')->findOrFail($id);
        if ($slide->photo) {
            $photo = photo::findOrFail($slide->photo->id);
            $photo->delete();
            unlink(getcwd() . $photo->path);
        }

        if ($slide) {
            $slide->delete();
        }

        return back();
    }

    public function delete($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        unlink(getcwd() . $photo->path);
        return back();
    }

    public function action(Request $request, $id)
    {
        if ($request->has('action')) {
            if ($request->input('action') == 'تایید') {
                $slider = slider::findOrFail($id);
                $slider->status = 0;
                $slider->save();
            } else {
                $slider = slider::findOrFail($id);
                $slider->status = 1;
                $slider->save();
            }
        }
        return redirect('administrator/slider');
    }
}
