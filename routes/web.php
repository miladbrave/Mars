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
Route::get('newstitles/{name}', 'front\HomeController@newSelf')->name('news-self');
Route::get('allNews/{self}', 'front\HomeController@newssearch')->name('news-search');
Route::get('news/{title}', 'front\HomeController@newscategory')->name('news-category');
Route::get('about', 'front\HomeController@about')->name('about');
Route::get('contact', 'front\HomeController@contact')->name('contact');
// Route::get('validation','front\HomeController@valid')->name('validation ');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::post('valid','front\HomeController@valids')->name('valid');
Route::post('message', 'front\HomeController@message')->name('sendmessage');
Route::post('consult','front\HomeController@consult')->name('consult');
Route::get('validation','front\HomeController@valid')->name('validation');
Route::get('Consultation','front\HomeController@consultation')->name('Consultation');
Route::get('student','front\HomeController@student')->name('student');
Route::get('university/{name}','front\HomeController@uni')->name('countryuni');


Route::get('profile','front\profileController@index')->name('profile.index');
Route::get('profile/message','front\profileController@message')->name('profile.message');
Route::put('profile/update/{id}', 'front\profileController@update')->name('ins.profile.update');
Route::get('profile/update', 'front\profileController@user')->name('ins.profile.user');
Route::get('profile/class', 'front\profileController@class')->name('ins.profile.class');

//Route::get('in', function() {
//    Artisan::call('cache:clear');
//    return "Cache is cleared";
//});


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
        Route::get('newsvit', 'back\newsController@vitrineIndex')->name('news.vit.index');
        Route::get('newsvit/create', 'back\newsController@vitrineCreate')->name('news.vit.create');
        Route::get('newsvit/edit/{id}', 'back\newsController@vitrineedit')->name('news.vit.edit');
        Route::patch('newsvit/update/{id}', 'back\newsController@vitrineupdate')->name('news.vit.update');
        Route::post('newsvit/save', 'back\newsController@vitrineStore')->name('news.vit.save');
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
        Route::get('uni/logo/{id}', 'back\universityController@logodelete')->name('uni.logo');
        Route::get('slider/action/{id}', 'back\sliderController@action')->name('slider.action');
        Route::get('list', 'back\instituteController@index')->name('ins.index');
        Route::get('list/video', 'back\instituteController@video')->name('ins.video');
        Route::post('list/video/save', 'back\instituteController@viddeosave')->name('ins.video.save');
        Route::delete('list/video/delete/{id}', 'back\instituteController@videodelete')->name('ins.video.delete');
        Route::get('list/{id}', 'back\instituteController@profile')->name('ins.profile');
        Route::post('list/savemoney/{id}', 'back\instituteController@money')->name('ins.save.money');
        Route::delete('list/deletemoney/{id}', 'back\instituteController@delete')->name('ins.delete.money');
        Route::post('list/message/{id}', 'back\instituteController@message')->name('ins.message');
        Route::post('list/saveclass/{id}', 'back\instituteController@classtime')->name('ins.save.class');
        Route::delete('list/deleteclass/{id}', 'back\instituteController@classdelete')->name('ins.delete.class');
        Route::delete('list/deleteuser/{id}', 'back\instituteController@userdelete')->name('ins.delete.user');
        Route::post('logo/{id}', 'back\photosController@updatelog')->name('logo.update');
        Route::post('logo', 'back\photosController@save')->name('logo.save');
    });
});

