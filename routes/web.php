<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/register/main', [RegisterController::class, 'show'])->name('register_show');
Route::get('/login/main', [RegisterController::class, 'login_show'])->name('login_show');
Route::get('/all/courses', [HomeController::class, 'all_courses'])->name('all_courses');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/teacher', [HomeController::class, 'teacher'])->name('teacher');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/item', [HomeController::class, 'news_item'])->name('news_item');
Route::get('/comments', [HomeController::class, 'comments'])->name('comments');
Route::get('/error', [HomeController::class, 'error'])->name('error');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
