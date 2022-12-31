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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/student', function () {
    return view('students/student');
});
Route::get('/enroll', function () {
    return view('students/enroll');
});

Route::get('/unit', function () {
    return view('students/unit');
});

Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/login', [MainController::class, 'login']);
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');