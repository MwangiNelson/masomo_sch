<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/student', [MainController::class, 'students']);
Route::get('/enroll', function () {
    return view('students/enroll');
});

Route::get('/unit', function () {
    return view('students/unit');
});

Route::get('/admin', [MainController::class, 'admin']);
Route::get('/login', [MainController::class, 'login']);
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/add-staff', [MainController::class, 'add_staff'])->name('auth.add-staff');
Route::get('delete-student/{id}', [MainController::class, 'delete_student']);
Route::get('delete-unit/{id}', [MainController::class, 'delete_unit']);
Route::get('delete-staff/{id}', [MainController::class, 'delete_staff']);
Route::post('/auth/add-unit', [MainController::class, 'add_unit'])->name('auth.add-unit');
Route::post('/auth/add-notice', [MainController::class, 'add_notice'])->name('auth.add-notice');
Route::post('/auth/add-cwork', [MainController::class, 'add_cwork'])->name('auth.add-cwork');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');
