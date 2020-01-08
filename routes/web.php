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

Auth::routes();

Route::get('exam/{name}', 'front\HomeController@getExam')->name('getExam');
Route::get('university/{name}', 'front\HomeController@university')->name('uni');
Route::post('comment/{postId}','front\HomeController@comment')->name('comment.exam');
Route::post('comment','front\HomeController@reply')->name('comment.reply');
Route::get('question', 'front\HomeController@question')->name('question');
Route::get('news', 'front\HomeController@news')->name('news');
Route::get('news/{title}', 'front\HomeController@newSelf')->name('news-self');
Route::get('about', 'front\HomeController@about')->name('about');
Route::get('contact', 'front\HomeController@contact')->name('contact');
Route::get('validation','front\HomeController@valid')->name('validation');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::post('valid','front\HomeController@valids')->name('valid');
Route::post('resume', 'front\HomeController@resume')->name('resume');
Route::post('message', 'front\HomeController@message')->name('sendmessage');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::post('valid','front\HomeController@valids')->name('valid');
Route::get('validation','front\HomeController@valid')->name('validation');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::get('student','front\HomeController@student')->name('student');




Route::group(['middleware' => 'admin'], function () {
    Route::prefix('administrator')->group(function () {
        Route::get('/', 'back\dashboardController@index')->name('dashboard');
        Route::resource('exam', 'back\ExamController');
        Route::resource('university', 'back\universityController');
        Route::resource('photos', 'back\photosController');
        Route::resource('question', 'back\questionController');
        Route::resource('news', 'back\newsController');
        Route::resource('comment', 'back\commentController');
        Route::get('comment/action/{id}', 'back\commentController@action')->name('comment.action');
        Route::get('form/consultation', 'back\commentController@cons')->name('cons');
        Route::get('form/evaluation', 'back\commentController@eval')->name('eval');
        Route::get('export', 'back\commentController@export')->name('download');
        Route::get('message', 'back\commentController@message')->name('message');
        Route::get('message/{id}', 'back\commentController@messageRead')->name('messageRead');
    });
});

Route::get('example',function() {
    Artisan::call('storage:link');
});
