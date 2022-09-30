<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();
Route::resource('/student', StudentController::class)->except('show');
Route::resource('/teacher', TeacherController::class)->except('show');
Route::resource('/discipline', DisciplineController::class)->except('show');
Route::resource('/course', CourseController::class)->except('show');
Route::resource('/team', TeamController::class)->except('show');

Route::get('/home', [HomeController::class, 'index'])->name('home');
