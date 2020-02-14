<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\news;
use App\photo;
use App\slide;
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
        return view('back.slider.index',compact('slider','news2','com','user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $slider = slider::paginate(10);
        return view('back.slider.create',compact('slider','news2','com','user'));
    }

    public function store(Request $request)
    {
        $slider = new slider;
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->description = $request->des;

        $slider->save();
        $photo = explode(',', $request->input('photo_id')[0]);
        $photos = photo::findOrFail($photo)->first();
        $photos->slider_id = $slider->id;
        $photos->save();

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
        return view('back.slider.edit',compact('slider','news2','com','user'));
    }

    public function update(Request $request, $id)
    {
        $slider = slide::findOrFail($id);
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->description = $request->des;
        $slider->save();

        $photo = explode(',', $request->input('photo_id')[0]);
        $photos = photo::findOrFail($photo)->first();
        $photos->slider_id = $slider->id;
        $photos->save();

        return redirect('administrator/slider');
    }

    public function destroy($id)
    {
        $slide = slide::with('photo')->findOrFail($id);
        $photo = photo::findOrFail($slide->photo->id);

        if($photo){$photo->delete();}
        if($slide){$slide->delete();}

        unlink(getcwd() . $photo->path );
        return back();
    }

    public function delete($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        unlink(getcwd() . $photo->path );
        return back();
    }
}
