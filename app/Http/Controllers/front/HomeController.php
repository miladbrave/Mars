<?php

namespace App\Http\Controllers\front;

use App\comment;
use App\cons;
use App\Country;
use App\evale;
use App\exam;
use App\message;
use App\news;
use App\newstitle;
use App\photo;
use App\question;
use App\university;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $country = Country::all();
        $exam = exam::with('photos')->get();
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        $news = news::orderBy('created_at', 'desc')->get();
        return view('front.index', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function university($name,$uni)
    {
        $country = Country::all();
        $comment = comment::where('status', 1)
            ->where('parent_id', null)
            ->get();
        $uniSelf = university::where('title', $name)->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::with('photos')->get();
        return view('front.university', compact('comment', 'uniSelf', 'examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function uni($countries)
    {
        $comment = comment::where('status', 1)
            ->where('parent_id', null)
            ->get();
        $countryuni = university::where('country',$countries)->get();
        $country = Country::all();
        $questions = question::all();
        $exam = exam::all();
        $examCountry = exam::distinct()->get(['country']);
        $news = news::where('title', 'LIKE', '%' . $countries . '%')->orderBy('created_at', 'desc')->get();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.countryuniversity', compact('comment','exam','countryuni','examCountry', 'news', 'uniCountry', 'uniName', 'questions','country'));
    }

    public function getExam($title)
    {
                $country = Country::all();
        $comment = comment::where('status', 1)
            ->where('parent_id', null)
            ->get();
        $news = news::where('exam', $title)->get();
        $examSelf = exam::where('title', $title)->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.exam-self', compact('comment', 'examSelf', 'examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function comment(Request $request, $postId)
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
        Session::flash('comment', 'نظر شما با موفقی ثبت شد و در انتظار مدیران می باشد.');
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
            $comment->parent_id = $parent_id;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('comment', 'نظر شما با موفقی ثبت شد و در انتظار مدیران می باشد.');
        return back();
    }

    public function valid()
    {
        $country2 = Country::all();
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $exam = exam::all();
        $country = university::with('photos')->distinct()->get('country');
        $uniName = university::all();
        return view('front.visit', compact('exam', 'country', 'uniName', 'examCountry', 'uniCountry','country2'));
    }

    public function consultation()
    {
                $country = Country::all();
        $examCountry = exam::distinct()->get(['country']);
        $uniCountry = university::distinct()->get(['country']);
        $exam = exam::all();
        $uniName = university::all();
        $country = university::with('photos')->distinct()->get('country');
        return view('front.consultation', compact('exam', 'country', 'uniName', 'examCountry', 'uniCountry','country'));
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
        Session::flash('consult', ' با تشکر از شما.وقت مشاوره شما ثبت شدو به زودی با شما تماس خواهیم گرفت');
        return redirect(route('Consultation'));
    }

    public function valids(Request $request)
    {

        $validator = Validator::make($request->all(), [
			    'name' => 'required',
    			'date' => 'required',
    			'email' => 'required|email',
    			'cell' => 'required|numeric',
    			'sub' => 'required',
    			'country' => 'required',
    			'grade' => 'required',
    		],[

    			'firstname.required' => 'نام و نام خانوادگی را وارد کنید.',
    			'date.required' => 'تاریخ تولد وارد کنید',
                'email.required' => 'ایمیل را وارد کنید',
                'email.email' => 'ایمیل معتبر وارد کنید',
                'cell.required' => 'شماره موبایل وارد کنید',
                'cell.numeric' => 'شماره موبایل باید عدد باشد',
                'sub' => 'رشته مورد نظر خود را وارد کنید',
                'country' => 'لطفا کشور مورد نظر را وارد کنید',
                'grade' => 'مقطع مورد نظر را انتخاب کنید',

    		]);
   		$validator->validate();


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
        $valid->grade = $request->grade;
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

         if(isset($request->input('photo_id')[0])){
        $photo = explode(',', $request->input('photo_id')[0]);
        $photos = photo::findOrFail($photo)->first();
        $photos->resume_id = $valid->id;
        $photos->save();
         }

        Session::flash('evade', ' با تشکر از شما.،فرم مشاوره ای شما ارسال شد.');

        return redirect()->route('validation');
    }

    public function question()
    {
        $country = Country::all();
        $questions = question::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.question', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'questions','country'));
    }

    public function news()
    {
        $country = Country::all();
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.news', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function newSelf($title, $name)
    {
        $country = Country::all();
//        if ($title == 'آزمون' || $title == 'دوره') {
//            $news = news::where('newsTitle', 'LIKE', '%' . $name . '%')
////                ->where('select', 'LIKE', '%' . $title . '%')
//                ->orderBy('created_at', 'desc')->paginate(15);
//        }
//        if ($title == 'دانشگاه') {
//            $news = news::where('newsTitle', 'LIKE', '%' . $name . '%')
////                ->where('select', 'LIKE', '%' . $title . '%')
//                ->orderBy('created_at', 'desc')->paginate(15);
//        }
        $news = news::where('newsTitle', 'LIKE', '%' . $name . '%')
            ->orderBy('created_at', 'desc')->paginate(15);
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.news-self', compact('title','examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function newscategory($title)
    {
                $country = Country::all();
        if ($title == 'اخبار-آزمون ها') {
            $title = 'آزمون';
        }
        if ($title == 'اخبار-دانشگاه-ها') {
            $title = 'دانشگاه';
        }
        if ($title == 'اخبار-دوره ها') {
            $title = 'دوره';
        }
        $news = newstitle::where('select', 'LIKE', '%' . $title . '%')->orderBy('created_at', 'desc')->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.newsCategory', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news', 'title','country'));
    }

    public function about()
    {
                $country = Country::all();
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.about', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function contact()
    {
        $news = news::all();
        $country = Country::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.contact', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
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
        $country = Country::all();
        $news = news::all();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.future', compact('examCountry', 'exam', 'uniCountry', 'uniName', 'news','country'));
    }

    public function country($name)
    {
        $country = Country::where('title', 'LIKE', '%' . $name . '%')->get();
        $examCountry = exam::distinct()->get(['country']);
        $exam = exam::all();
        $uniCountry = university::distinct()->get(['country']);
        $uniName = university::all();
        return view('front.country', compact('examCountry', 'exam', 'uniCountry', 'uniName','country'));
    }

     public function cooming()
    {
       return view('front.cooming');
    }


}
