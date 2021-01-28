<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TestController;
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

Route::get('/account/courses', [AccountController::class, 'courses'])->name('account.courses');
Route::get('/account/course', [AccountController::class, 'course'])->name('account.course');
Route::get('/account/lesson', [AccountController::class, 'lesson'])->name('account.lesson');
Route::get('/account/calendar', [AccountController::class, 'calendar'])->name('account.calendar');
Route::get('/account/events', [AccountController::class, 'events'])->name('account.events');
Route::get('/account/homework', [AccountController::class, 'homework'])->name('homework');
Route::get('/account/materials', [AccountController::class, 'materials'])->name('account.materials');
Route::get('/account/grammar', [AccountController::class, 'grammar'])->name('account.grammar');
Route::get('/account/vocabulary', [AccountController::class, 'vocabulary'])->name('account.vocabulary');
Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
Route::get('/account/news', [AccountController::class, 'news'])->name('account.news');
Route::get('/account/news/item', [AccountController::class, 'itemNews'])->name('account.newsItem');
Route::get('/account/event/item', [AccountController::class, 'eventItems'])->name('account.eventItems');
Route::get('/account/buy/courses', [AccountController::class, 'buyCourses'])->name('account.buyCourses');

Route::post('/save/print', [AccountController::class, 'avatar_save'])->name('account.print_save');

Route::get('/test/one', [TestController::class, 'one'])->name('test.one');
Route::get('/test/two', [TestController::class, 'two'])->name('test.two');
Route::get('/test/three', [TestController::class, 'three'])->name('test.three');
Route::get('/test/four', [TestController::class, 'four'])->name('test.four');
Route::get('/test/five', [TestController::class, 'five'])->name('test.five');
Route::get('/test/result', [TestController::class, 'result'])->name('test.result');

Route::get('/teacher/courses', [TeacherController::class, 'courses'])->name('teacher.courses');
Route::get('/teacher/homework', [TeacherController::class, 'homework'])->name('teacher.homework');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
