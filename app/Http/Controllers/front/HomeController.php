<?php

namespace App\Http\Controllers\front;

use App\comment;
use App\cons;
use App\evale;
use App\exam;
use App\message;
use App\news;
use App\question;
use App\university;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $exam = exam::all();
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        $news = news::orderBy('created_at', 'desc')->get();
        return view('front.index',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function university($name){
        $comment = comment::where('status' , 1)
            ->where('parent_id',null)
            ->get();
        $news = news::where('title','LIKE','%'.$name.'%')->orderBy('created_at', 'desc')->get();
        $uniSelf = university::where('title',$name)->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::with('photos')->get();
        return view('front.university', compact('comment','uniSelf','examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function getExam($title)
    {
        $comment = comment::where('status' , 1)
            ->where('parent_id',null)
            ->get();
        $news = news::where('exam',$title)->get();
        $examSelf = exam::where('title',$title)->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.exam-self', compact('comment','examSelf','examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function comment(Request $request,$postId)
    {
        $post = exam::findOrFail($postId);
        if ($post) {
            $comment = new comment();
            $comment->name = $request->name;
            $comment->description = $request->description;
            $comment->exam_id = $post->id;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('comment','نظر شما با موفقی ثبت شد و در انتظار مدیران می باشد.');
        return back();
    }

    public function reply(Request $request)
    {
        $postId = $request->input('post_id');
        $parent_id = $request->input('parent_id');
        $post = exam::findOrFail($postId);
        if ($post) {
            $comment = new comment();
            $comment->name = $request->name;
            $comment->description = $request->description;
            $comment->exam_id = $post->id;
            $comment->parent_id =$parent_id ;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('comment','نظر شما با موفقی ثبت شد و در انتظار مدیران می باشد.');
        return back();
    }

    public function valid(){
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $exam = exam::all();
        $country = university::with('photos')->distinct()->get('country');
        $uniName = university::all();
        return view('front.visit',compact('exam','country','uniName','examCountry','uniCountry'));
    }

    public function consultation(){
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $exam = exam::all();
        $uniName = university::all();
        $country = university::with('photos')->distinct()->get('country');
        return view('front.consultation',compact('exam','country','uniName','examCountry','uniCountry'));
    }

    public function consult(Request $request)
    {
        $cons = new cons();
        $cons->name = $request->name;
        $cons->birthday = $request->date;
        $cons->phone = $request->phone;
        $cons->cellphone = $request->cell;
        $cons->grade = $request->grade;
        $cons->des = $request->des;
        $cons->email = $request->email;
        $cons->country = $request->country;
        $cons->save();
        Session::flash('consult',' با تشکر از شما.وقت مشاوره شما ثبت شدو به زودی با شما تماس خواهیم گرفت');
        return redirect(route('Consultation'));
    }

    public function valids(Request $request)
    {

        $valid = new evale();
        $valid->name = $request->name;
        $valid->birthday = $request->date;
        $valid->phone = $request->phone;
        $valid->cellphone = $request->cell;
        $valid->email = $request->email;
        $valid->subject = $request->sub;
        $valid->tofel = $request->tofel;
        $valid->ilet = $request->ilets;
        $valid->gre = $request->gre;
        $valid->gmat = $request->gmat;
        $valid->essay = $request->essay;
        $valid->country = $request->country;
        $valid->visa = $request->visa;
        $valid->des = $request->des;

//        $valid->duniver = $request->duniver;
        $valid->dnum = $request->dnum;
        $valid->ddate = $request->ddate;
        $valid->dbran = $request->dbran;
        $valid->dsub = $request->dsub;
//        $valid->buniver = $request->buniver;
        $valid->bnum = $request->bnum;
        $valid->bdate = $request->bdate;
        $valid->bbran = $request->bbran;
        $valid->bsub = $request->bsub;
//        $valid->muniver = $request->muniver;
        $valid->mnum = $request->mnum;
        $valid->mdate = $request->mdate;
        $valid->mbran = $request->mbran;
        $valid->msub = $request->msub;
//        $valid->docuniver = $request->docuniver;
        $valid->docnum = $request->docnum;
        $valid->docdate = $request->docdate;
        $valid->docbran = $request->docbran;
        $valid->docsub = $request->docsub;
//        $valid->uuniver = $request->uuniver;
        $valid->unum = $request->unum;
        $valid->udate = $request->udate;
        $valid->ubran = $request->ubran;
        $valid->usub = $request->usub;
        $valid->des = $request->des;
        $valid->save();

        $photos =explode(',',$request->input('photo_id')[0]);
        $valid->photos()->sync($photos);

        return redirect(route('validation'));
    }

    public function question()
    {
        $questions = question::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.question',compact('examCountry','exam','uniCountry', 'uniName','questions'));
    }

    public function news()
    {
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.news',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function newSelf($title)
    {
        if($title == 'اخبار-تحصیلی-دانشگاه-ها'){$title = 'سایر';}
        if($title == 'اخبار-تحصیلی-کشور-ترکیه'){$title = 'ترکیه';}
        if($title == 'اخبار-داخلی-آموزشگاه'){$title = 'داخلی';}
        $news = news::where('select','LIKE','%'.$title.'%')->orderBy('created_at', 'desc')->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.news-self',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function about()
    {
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.about',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function contact()
    {
        $news = news::all();

        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.contact',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }

    public function message(Request $request)
    {
        $message = new message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->title = $request->title;
        $message->description = $request->des;
        $message->save();

        return redirect(route('main'));
    }

    public function student()
    {
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.future',compact('examCountry','exam','uniCountry', 'uniName','news'));
    }
}
