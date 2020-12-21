<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Site\IndexController;

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
//landingpage
Route::resource('/','App\Http\Controllers\GetnotifiedController');
//enrollment
Route::resource('enrollment','App\Http\Controllers\LandingpageController');
//ContactUs
Route::resource('/contact','App\Http\Controllers\ContactUsController');




Auth::routes();

//admin lecturers
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    //lesson
    //Route::resource('/admin/lessons', 'App\Http\Controllers\Admin\LessonController');
    Route::resource('/admin/lessons/lesson', 'App\Http\Controllers\Admin\LessonController');
   
    //students
    Route::resource('/admin/students/student', 'App\Http\Controllers\Admin\StudentController');
    //inquired student
    Route::resource('/admin/students/inquired', 'App\Http\Controllers\Admin\InquiredStudentController');
    //create_lesson category_id
    Route::get('/admin/lessons/create{category_id?}','App\Http\Controllers\Admin\LessonsController@create');
    //edit_lesson categort_id
    Route::get('/admin/lessons/edit{category_id?}','App\Http\Controllers\Admin\LessonsController@edit');
    //admin section vids
    Route::resource('/admin/sectionvideo','App\Http\Controllers\Admin\SectionVideoController');
    Route::get('/admin/sectionvideo/createvids/{lesson_id?}','App\Http\Controllers\Admin\SectionVideoController@createvids');
    Route::get('/admin/sectionvideo/createvids{section_id?}','App\Http\Controllers\Admin\SectionVideoController@create');
    Route::resource('/admin/sections','App\Http\Controllers\Admin\SectionController');
    Route::get('/admin/sections/create{lesson_id?}','App\Http\Controllers\Admin\SectionController@create');



});

///studentportal
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/site/studentportal','App\Http\Controllers\Site\IndexController@index');
    

    Route::post('search', ['as' => 'search', 'uses' => 'App\Http\Controllers\Site\IndexController@index']);
    Route::get('/site/{id?}','App\Http\Controllers\Site\IndexController@viewlecture');
    Route::post('searchvid', ['as' => 'searchvid', 'uses' => 'App\Http\Controllers\Site\IndexController@viewlecture']);
    Route::get('/site/viewvideos/{video_id?}','App\Http\Controllers\Site\IndexController@viewvideos');
    Route::post('/site/viewvideos/{video_id?}','App\Http\Controllers\Site\CommentVideoController@store');
    
});




//core
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/core/dashboard_core', [App\Http\Controllers\Core\DashboardController::class, 'index'])->name('core.dashboard');
    Route::resource('/core/lessons','App\Http\Controllers\Core\LessonController');
    Route::resource('/core/category','App\Http\Controllers\Core\CategoryController');
});







Route::get('login/facebook', [LoginController::class, 'redirectToProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallback']);
