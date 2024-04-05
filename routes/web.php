<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TeacherController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// TeacherのCRUD
Route::resource('teachers', TeacherController::class);

// Teacherの認証関連
Route::get('/teacher/register', [TeacherController::class, 'showRegistrationForm'])->name('teacher.register');
Route::post('/teacher/register', [TeacherController::class, 'register']);
Route::get('/teacher/login', [TeacherController::class, 'showLoginForm'])->name('teacher.login');
Route::post('/teacher/login', [TeacherController::class, 'login']);
Route::post('/teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');

// StudentのCRUD
Route::resource('students', StudentController::class);

// Studentの認証関連
Route::get('/student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'register']);
Route::get('/student/login', [StudentController::class, 'showLoginForm'])->name('student.login');
Route::post('/student/login', [StudentController::class, 'login']);
Route::post('/student/logout', [StudentController::class, 'logout'])->name('student.logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth:teachers')->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
});

// 生徒用ダッシュボードへのルート
Route::middleware('auth:students')->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
});
require __DIR__.'/auth.php';
