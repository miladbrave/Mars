<?php

namespace App\Http\Controllers\back;

use App\Logo;
use App\photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class photosController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $uploadfile = $request->file('file');
        $filename = time() . $uploadfile->getClientOriginalName();
        $original_name = $uploadfile->getClientOriginalName();
        $uploadfile->move('photo', $filename);
//        Storage::disk('local')->putFileAs(
//            'public/photos', $uploadfile, $filename
//        );
        $photo = new photo();
        $photo->original_name = $original_name;
        $photo->path = $filename;
        $photo->user_id = Auth()->user()->id;
        $photo->save();

        return response()->json([
            'photo_id' => $photo->id
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }

    public function updatelog(Request $request,$id)
    {
        $uploadfile = $request->file('file');
        $filename = time() . $uploadfile->getClientOriginalName();
        $original_name = $uploadfile->getClientOriginalName();
        $uploadfile->move('photo', $filename);

        $logo = new Logo();
        $logo->original_name = $original_name;
        $logo->path = $filename;
        $logo->university_id = $id;
        $logo->save();

        return response()->json([
            'logo_id' => $logo->id
        ]);
    }

    public function save(Request $request)
    {
        $uploadfile = $request->file('file');
        $filename = time() . $uploadfile->getClientOriginalName();
        $original_name = $uploadfile->getClientOriginalName();
        $uploadfile->move('photo', $filename);

        $logo = new Logo();
        $logo->original_name = $original_name;
        $logo->path = $filename;
        $logo->save();

        return response()->json([
            'logo_id' => $logo->id
        ]);
    }


}
