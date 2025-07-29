<?php

use App\Http\Controllers\Auth\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\ElementController;
use App\Http\Controllers\Auth\FormController;
use App\Http\Controllers\Auth\IconController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/posts/{post}', [WebsiteController::class, 'show'])->name('website.posts.show');
Route::view('contact-us', 'website.contact')->name('contact');

Auth::routes();

Route::get('auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard')->middleware('auth');


Route::get('/element/button', [ElementController::class, 'showButton'])->name('element.button');
Route::get('/element/type', [ElementController::class, 'showType'])->name('element.type');
Route::get('/forms/form', [FormController::class, 'showForm'])->name('forms.form');
Route::get('/charts/chart', [ChartController::class, 'showChart'])->name('charts.chart');
Route::get('/icons/icon', [IconController::class, 'showIcon'])->name('icons.icon');





Route::resource('auth/posts', PostController::class);
Route::resource('auth/element', ElementController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', App\Http\Controllers\Auth\CategoryController::class);
    Route::resource('users', App\Http\Controllers\Auth\UserController::class);
    Route::resource('media', App\Http\Controllers\Auth\MediaController::class);
    Route::resource('comments', App\Http\Controllers\Auth\CommentController::class)->only(['index','update','destroy']);
    Route::get('settings', [App\Http\Controllers\Auth\SettingController::class, 'show'])->name('settings.show');
    Route::post('settings', [App\Http\Controllers\Auth\SettingController::class, 'update'])->name('settings.update');
    Route::get('profile', [App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profile.update');
});

