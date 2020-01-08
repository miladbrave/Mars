<?php

namespace App\Http\Controllers\back;

use App\comment;
use App\cons;
use App\evale;
use App\Http\Controllers\back\formsController;
use App\message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class commentController extends Controller
{
    public function index()
    {
        $comment = comment::orderBy('created_at','desc')->paginate(25);
        return view('back.comment.index',compact('comment'));
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
        $comment = comment::findOrFail($id);
        return view('back.comment.edit',compact('comment'));
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
        $con = cons::paginate(15);
        return view('back.consultation.cons',compact('con'));
    }
    public function eval()
    {
        $val= evale::paginate(15);
        return view('back.consultation.eval',compact('val'));
    }

    public function collection()
    {
        return  evale::all();
    }

    public function export()
    {
        return Excel::download(new formsController(), 'users.xlsx');
    }

    public function message(){
        $message = message::paginate(10);
        return view('back.message.message',compact('message'));
    }

    public function messageRead($id){
        $message = message::findOrFail($id);
        return view('back.message.messageRead',compact('message'));
    }
}
