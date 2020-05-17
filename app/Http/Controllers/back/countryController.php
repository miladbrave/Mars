<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\Country;
use App\menu;
use App\news;
use App\photo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class countryController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $country = Country::paginate(10);
        return view('back.country.index', compact('country', 'news2', 'com', 'user'));
    }

    public function create()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        return view('back.country.create', compact('news2', 'com', 'user'));

    }

    public function store(Request $request)
    {
        $country = new country();
        $country->title = $request->title;
        $country->des = $request->des;
        $country->save();

        $photo = explode(',', $request->input('photo_id')[0]);

        foreach ($photo as $ph) {
            $photos = photo::findOrFail($ph);
            $photos->country_id = $country->id;
            $photos->save();
        }

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
        return view('back.country.edit', compact('country', 'news2', 'com', 'user'));
    }


    public function update(Request $request, $id)
    {
        $country = country::findOrFail($id);
        $country->title = $request->title;
        $country->des = $request->des;
        $country->save();

        if ($request->input('photo_id')[0]) {
            $photo = explode(',', $request->input('photo_id')[0]);
            foreach ($photo as $ph) {
                $photos = photo::findOrFail($ph);
                $photos->country_id = $country->id;
                $photos->save();
            }
        }

        return redirect()->route('country.index');
    }


    public function destroy($id)
    {
        $country = country::findOrFail($id);
        if ($country->photo) {
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
        unlink(getcwd() . $photo->path);
        return back();
    }

    public function submenuTitle()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $countryTitles = Menu::all();

        return view('back.country.menu.index', compact('countryTitles', 'news2', 'com', 'user'));
    }

    public function submenuCreate()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $countrys = Country::get('title');

        return view('back.country.menu.create', compact('countrys', 'news2', 'com', 'user'));
    }

    public function submenusave(Request $request)
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

        $countryTitle = new Menu();
        $countryTitle->title = $request->title;
        $countryTitle->slug = make_slug($request->title);
        $countryTitle->country_name = $request->country;
        $countryTitle->description = $request->des;
        $countryTitle->save();
        return redirect()->route('country.title');
    }

    public function submenuedit($id)
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $countrys = Country::get('title');
        $contryTitle = Menu::findOrFail($id);

        return view('back.country.menu.edit', compact('countrys', 'news2', 'com', 'user','contryTitle'));
    }

    public function submenuupdate(Request $request,$id)
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
        $countryTitle = Menu::findOrFail($id);
        $countryTitle->title = $request->title;
        $countryTitle->slug = make_slug($request->title);
        $countryTitle->country_name = $request->country;
        $countryTitle->description = $request->des;
        $countryTitle->save();
        return redirect()->route('country.title');
    }
}
