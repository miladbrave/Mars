<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\Artisan;

Route::get('/','front\HomeController@index')->name('main');
//Route::get('/','front\HomeController@cooming')->name('cooming');

Auth::routes();

Route::get('exam/{name}', 'front\HomeController@getExam')->name('getExam');
Route::get('country/{name}', 'front\HomeController@country')->name('country');
Route::get('university/{uni}/{name}', 'front\HomeController@university')->name('university');
Route::post('comment/{postId}','front\HomeController@comment')->name('comment.exam');
Route::post('comment','front\HomeController@reply')->name('comment.reply');
Route::get('question', 'front\HomeController@question')->name('question');
Route::get('news', 'front\HomeController@news')->name('news');
Route::get('news/{title}/{name}', 'front\HomeController@newSelf')->name('news-self');
Route::get('news/{title}', 'front\HomeController@newscategory')->name('news-category');
Route::get('about', 'front\HomeController@about')->name('about');
Route::get('contact', 'front\HomeController@contact')->name('contact');
// Route::get('validation','front\HomeController@valid')->name('validation ');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::post('valid','front\HomeController@valids')->name('valid');
//Route::post('resume', 'front\HomeController@resume')->name('resume');
Route::post('message', 'front\HomeController@message')->name('sendmessage');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::get('validation','front\HomeController@valid')->name('validation');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::get('student','front\HomeController@student')->name('student');
Route::get('university/{name}','front\HomeController@uni')->name('countryuni');




Route::get('profile','front\profileController@index')->name('profile.index');
Route::get('profile/financial','front\profileController@financial')->name('profile.money');
Route::get('profile/classes','front\profileController@classes')->name('profile.classes');
Route::get('profile/user','front\profileController@user')->name('profile.user');
Route::get('profile/message','front\profileController@message')->name('profile.message');






Route::group(['middleware' => 'admin'], function () {
    Route::prefix('administrator')->group(function () {
        Route::get('/', 'back\dashboardController@index')->name('dashboard');
        Route::resource('exam', 'back\ExamController');
        Route::resource('slider', 'back\sliderController');
        Route::resource('country', 'back\countryController');
        Route::resource('university', 'back\universityController');
        Route::resource('photos', 'back\photosController');
        Route::resource('question', 'back\questionController');
        Route::resource('news', 'back\newsController');
        Route::get('newsTitle', 'back\newsController@titleIndex')->name('news.titleIndex');
        Route::get('newsTitle/create', 'back\newsController@createtitle')->name('news.createtitle');
        Route::post('newsTitle/save', 'back\newsController@storetitle')->name('news.storetitle');
        Route::get('newsTitle/edit/{id}', 'back\newsController@edittitle')->name('news.edittitle');
        Route::patch('newsTitle/update/{id}', 'back\newsController@updatetitle')->name('news.updatetitle');
        Route::get('newsTitle/delete/{id}', 'back\newsController@deletetitle')->name('news.deletetitle');
        Route::resource('comment', 'back\commentController');
        Route::get('comment/action/{id}', 'back\commentController@action')->name('comment.action');
        Route::get('form/consultation', 'back\commentController@cons')->name('cons');
        Route::get('form/evaluation', 'back\commentController@eval')->name('eval');
        Route::get('export', 'back\commentController@export')->name('download');
        Route::get('exporttime', 'back\commentController@exporttime')->name('downloadtime');
        Route::get('resume/{id}', 'back\commentController@resume')->name('resume');
        Route::get('message', 'back\commentController@message')->name('message');
        Route::get('message/{id}', 'back\commentController@messageRead')->name('messageRead');
        Route::delete('messageDestroy/{id}', 'back\commentController@messageDestroy')->name('messageDestroy');
        Route::get('uni/{id}', 'back\universityController@delete')->name('uni');
        Route::get('slider/action/{id}', 'back\sliderController@action')->name('slider.action');
    });
});

