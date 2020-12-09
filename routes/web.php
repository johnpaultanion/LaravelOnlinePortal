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

Route::get('/', [IndexController::class, 'index'])->name('site.index');

Auth::routes();

//admin lecturers
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth','guest'])->group(function () {
Route::resource('/admin/lessons','App\Http\Controllers\Admin\LessonController');
});

Route::resource('/site','App\Http\Controllers\Site\IndexController');

//admin section vids
Route::middleware(['auth','guest'])->group(function () {
    Route::resource('/admin/sectionvideo','App\Http\Controllers\Admin\SectionVideoController');
    });

Route::middleware(['auth','guest'])->group(function () {
    Route::get('/admin/sectionvideo/create{section_id?}','App\Http\Controllers\Admin\SectionVideoController@create');
    });

//admin sections
Route::middleware(['auth','guest'])->group(function () {
Route::resource('/admin/sections','App\Http\Controllers\Admin\SectionController');
    });
Route::middleware(['auth','guest'])->group(function () {
Route::get('/admin/sections/create{lesson_id?}','App\Http\Controllers\Admin\SectionController@create');
        });




//core
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/core/dashboard_core', [App\Http\Controllers\Core\DashboardController::class, 'index'])->name('core.dashboard');
});

Route::middleware(['auth','guest'])->group(function () {
    Route::resource('/core/lessons','App\Http\Controllers\Core\LessonController');
});

Route::middleware(['auth','guest'])->group(function () {
    Route::resource('/core/categories','App\Http\Controllers\Core\CategoryController');
});






Route::get('login/facebook', [LoginController::class, 'redirectToProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallback']);
