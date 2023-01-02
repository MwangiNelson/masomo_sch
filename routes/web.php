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

//general routes
Route::get('/', function () {
    return view('index');
});
Route::get('/enroll', function () {
    return view('students/enroll');
});
Route::get('/login', [MainController::class, 'login']);
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');


//students routes
Route::get('/student', [MainController::class, 'students'])->name('student');
Route::get('/course/{id}', [MainController::class, 'course']);
Route::get('/register_units', [MainController::class, 'register_units'])->name('register_units');

//lec routes
Route::get('/teacher', [MainController::class, 'lec'])->name('teacher');
Route::get('/unit/{id}', [MainController::class, 'unit'])->name('unit');
Route::post('/add-work/{id}', [MainController::class, 'add_cwork'])->name('add-work');
//admin routes
Route::get('/admin', [MainController::class, 'admin']);

Route::post('/reg_unit/{id}', [MainController::class, 'reg_unit']);
Route::post('/auth/add-staff', [MainController::class, 'add_staff'])->name('auth.add-staff');
Route::get('delete-student/{id}', [MainController::class, 'delete_student']);
Route::get('delete-unit/{id}', [MainController::class, 'delete_unit']);
Route::get('delete-staff/{id}', [MainController::class, 'delete_staff']);
Route::post('/auth/add-unit', [MainController::class, 'add_unit'])->name('auth.add-unit');
Route::post('/auth/add-notice', [MainController::class, 'add_notice'])->name('auth.add-notice');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::get('delete-work/{id}', [MainController::class, 'delete_work']);
