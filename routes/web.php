<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApplicationController;
use Inertia\Inertia;

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
Route::get('/account/homework', [AccountController::class, 'homework'])->name('account.homework');
Route::get('/account/materials', [AccountController::class, 'materials'])->name('account.materials');
Route::get('/account/grammar', [AccountController::class, 'grammar'])->name('account.grammar');
Route::get('/account/vocabulary', [AccountController::class, 'vocabulary'])->name('account.vocabulary');
Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
Route::get('/account/news', [AccountController::class, 'news'])->name('account.news');
Route::get('/account/news/item', [AccountController::class, 'itemNews'])->name('account.newsItem');
Route::get('/account/event/item', [AccountController::class, 'eventItems'])->name('account.eventItems');
Route::get('/account/buy/courses', [AccountController::class, 'buyCourses'])->name('account.buyCourses');
Route::get('/account/event/lesson', [AccountController::class, 'eventLesson'])->name('account.eventLesson');

Route::post('/save/print', [AccountController::class, 'avatar_save'])->name('account.print_save');

Route::get('/test/one', [TestController::class, 'one'])->name('test.one');
Route::get('/test/two', [TestController::class, 'two'])->name('test.two');
Route::get('/test/three', [TestController::class, 'three'])->name('test.three');
Route::get('/test/four', [TestController::class, 'four'])->name('test.four');
Route::get('/test/five', [TestController::class, 'five'])->name('test.five');
Route::get('/test/result', [TestController::class, 'result'])->name('test.result');

Route::get('/teacher/courses', [TeacherController::class, 'courses'])->name('teacher.courses');
Route::get('/teacher/homework', [TeacherController::class, 'homework'])->name('teacher.homework');
Route::get('/teacher/profile', [TeacherController::class, 'profile'])->name('teacher.profile');
Route::get('/teacher/calendar', [TeacherController::class, 'calendar'])->name('teacher.calendar');

<<<<<<< HEAD
Route::group(['prefix' => '/student'], function (){
   Route::get('/', [StudentsController::class, 'index']);
=======
//Route::get('/application/create', [ApplicationController::class, 'calendar'])->name('teacher.calendar');
Route::prefix('application')->name('application.')->group(function() {
    Route::post('/create', [ApplicationController::class, 'create'])->name('create');
>>>>>>> db708ede100c27f663aaa62682b82e75a19048e5
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

Route::get('{any}', function (){
    return Inertia::render('Speedhack/Static/Error');
});


<<<<<<< HEAD
/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});
=======

>>>>>>> db708ede100c27f663aaa62682b82e75a19048e5

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
<<<<<<< HEAD
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
=======
        Route::prefix('applications')->name('applications/')->group(static function() {
            Route::get('/',                                             'ApplicationsController@index')->name('index');
            Route::get('/create',                                       'ApplicationsController@create')->name('create');
            Route::post('/',                                            'ApplicationsController@store')->name('store');
            Route::get('/{application}/edit',                           'ApplicationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ApplicationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{application}',                               'ApplicationsController@update')->name('update');
            Route::delete('/{application}',                             'ApplicationsController@destroy')->name('destroy');
        });
>>>>>>> db708ede100c27f663aaa62682b82e75a19048e5
    });
});