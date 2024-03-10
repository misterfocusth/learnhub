<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LecturerRouteGuard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// LOGIN / REGISTER / LOGOUT
Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/video', function(){
    return view('coursevideo');
});

<<<<<<< HEAD

    route::get('/test2', function(){
        return view('test2');
});
=======
route::get('/test', function(){
    return view('chapter');
});
// Create Course
Route::get('/courses/create', [CourseController::class, 'create'])->middleware('auth');
Route::post('/courses', [CourseController::class, 'store'])->middleware('auth');

// Show Course / Update Course
Route::get('/courses/manage', [CourseController::class, 'manage'])->middleware(['auth', LecturerRouteGuard::class]);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->middleware(['auth', LecturerRouteGuard::class]);
Route::put('/courses/{course}', [CourseController::class, 'update'])->middleware(['auth', LecturerRouteGuard::class]);

Route::get('/learn', function () {
    return view('courses.index');
})->middleware('auth');
>>>>>>> 31aa3c1ec6bf23f1641a0965187a9c24d00f525d
