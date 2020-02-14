<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\cons;
use App\evale;
use App\Exports\EvalesExport;
use App\Exports\ConsExport;
use App\Http\Controllers\back\formsController;
use App\message;
use App\news;
use App\photo;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class commentController extends Controller
{
    public function index()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $comment = comment::orderBy('created_at', 'desc')->paginate(25);
        return view('back.comment.index', compact('comment', 'news2', 'com', 'user'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $comment = comment::findOrFail($id);
        return view('back.comment.edit', compact('comment', 'news2', 'com', 'user'));
    }


    public function update(Request $request, $id)
    {
        $comment = comment::findOrFail($id);
        $comment->name = $request->title;
        $comment->description = $request->des;
        $comment->save();
        return redirect('administrator/comment');
    }

    public function destroy($id)
    {
        $comment = comment::findOrFail($id);
        $comment->delete();
        return redirect('administrator/comment');
    }

    public function action(Request $request, $id)
    {
        if ($request->has('action')) {
            if ($request->input('action') == 'تایید') {
                $comment = comment::findOrFail($id);
                $comment->status = 0;
                $comment->save();
            } else {
                $comment = comment::findOrFail($id);
                $comment->status = 1;
                $comment->save();
            }

        }
        return redirect('administrator/comment');
    }

    public function cons()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $con = cons::paginate(15);
        return view('back.consultation.cons', compact('con', 'news2', 'com', 'user'));
    }

    public function eval()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $val = evale::paginate(15);
        return view('back.consultation.eval', compact('val', 'news2', 'com', 'user'));
    }

    public function collection()
    {
        return evale::all();
    }

    public function export()
    {
        return Excel::download(new EvalesExport, 'user.xlsx');
    }

    public function exporttime()
    {
        return Excel::download(new ConsExport, 'time.xlsx');
    }

    public function resume($id)
    {
        $user = evale::findOrFail($id);
        $photo = photo::where('resume_id', $user->id)->get();
        foreach ($photo as $ph)
            if ($ph->path) {
                return response()->download(getcwd() . $ph->path);
            }
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $val = evale::paginate(15);
        $message = "رزومه ای یافت نشد";
        return view('back.consultation.eval', compact('val', 'news2', 'com', 'user','message'));

    }

    public function message()
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $message = message::paginate(10);
        return view('back.message.message', compact('message', 'news2', 'com', 'user'));
    }

    public function messageRead($id)
    {
        $news2 = news::all()->count();
        $com = comment::all()->count();
        $user = User::all()->count();
        $message = message::findOrFail($id);
        return view('back.message.messageRead', compact('message', 'news2', 'com', 'user'));
    }

}
