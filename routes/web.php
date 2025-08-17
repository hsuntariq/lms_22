<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\UserController;
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


// Route group for teacher

Route::prefix('/teacher')->group(function(){
    Route::view('/dashboard','teachers.pages.Dashboard')->name('teacher-dashboard');
    Route::view('/upload-assignments','teachers.pages.upload-assignment')->name('teacher-upload-assignment');




    // post routes
    Route::post('/upload-assignment',[AssignmentController::class,'UploadAssignment']);
});


// Route group for admin

Route::prefix('/admin')->group(function(){
    Route::view('/add-user','admin.pages.add-user');
    Route::post('/add-user',[AdminController::class,'AddUser']);
});


// route group for user

Route::prefix('/user')->group(function(){
    Route::post('/login',[UserController::class,'Login']);
});