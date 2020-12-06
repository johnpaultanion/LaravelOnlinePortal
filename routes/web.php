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

Route::middleware(['auth','guest'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});


Route::middleware(['auth','guest'])->group(function () {
Route::resource('/admin/lessons','App\Http\Controllers\Admin\LessonController');
});



Route::resource('/site','App\Http\Controllers\Site\IndexController');


//core
Route::middleware(['auth','guest'])->group(function () {
    Route::get('/core/dashboard_core', [App\Http\Controllers\Core\DashboardController::class, 'index'])->name('core.dashboard');
});

Route::middleware(['auth','guest'])->group(function () {
    Route::resource('/core/lessons','App\Http\Controllers\Core\LessonController');
    });






Route::get('login/facebook', [LoginController::class, 'redirectToProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallback']);
