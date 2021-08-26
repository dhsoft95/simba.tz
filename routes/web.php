<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/events', [App\Http\Controllers\PagesController::class, 'events'])->name('events');
Route::get('/singe_events', [App\Http\Controllers\PagesController::class, 'singe_events'])->name('singe_events');
Route::get('/management', [App\Http\Controllers\PagesController::class, 'management'])->name('management');
Route::get('/member_single', [App\Http\Controllers\PagesController::class, 'member_single'])->name('member_single');




