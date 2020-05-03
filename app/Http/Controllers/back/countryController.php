<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\Country;
use App\news;
use App\photo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Sodium\compare;

class countryController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $country = Country::paginate(10);
        return view('back.country.index',compact('country','news2','com','user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.country.create',compact('news2','com','user'));

    }

    public function store(Request $request)
    {
        $country = new country();
        $country->title = $request->title;
        $country->des = $request->des;
//        $country->littledes = $request->littledes;
        $country->save();

        $photo = explode(',', $request->input('photo_id')[0]);

        foreach ($photo as $ph){
        $photos = photo::findOrFail($ph);
        $photos->country_id = $country->id;
        $photos->save();}

        return redirect()->route('country.index');
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
        $country = country::with('photos')->findorFail($id);
        return view('back.country.edit',compact('country','news2','com','user'));
    }


    public function update(Request $request, $id)
    {
        $country = country::findOrFail($id);
        $country->title = $request->title;
        $country->des = $request->des;
//        $country->littledes = $request->littledes;
        $country->save();

        $photo = explode(',', $request->input('photo_id')[0]);
        foreach ($photo as $ph){
            $photos = photo::findOrFail($ph);
            $photos->country_id = $country->id;
            $photos->save();}


        return redirect('administrator/country');
    }


    public function destroy($id)
    {
        $country = country::findOrFail($id);
        if ($country->photo){
            $photo = photo::findOrFail($country->photo->id);
            $photo->delete();
            unlink(getcwd() . $photo->path);
        }
        if ($country) {
            $country->delete();
        }

        return redirect('administrator/country');
    }

    public function delete($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        unlink(getcwd() . $photo->path );
        return back();
    }
}
