<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Routing\Router;

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

Route::get('/', [MainController::class, 'index'])->name('main.page');

Route::post('/', [PostController::class, 'store'])->name('login.store');

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);

//Students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/register-student', [StudentController::class, 'create'])->name('students.create');
Route::post('/register-student', [StudentController::class, 'store'])->name('students.store');
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('/update-student/{id}', [StudentController::class, 'update']);
Route::delete('/delete-student/{id}', [StudentController::class, 'destroy']);

//Teachers
Route::resource('/teacher', TeacherController::class)->only(['index', 'update','store','destroy'])->names('teachers');



