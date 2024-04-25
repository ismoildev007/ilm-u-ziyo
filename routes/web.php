<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentPhotoController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::get('/home', [HomePageController::class, 'index'])->name('home-index');
        Route::resource('/home', HomePageController::class);
        Route::get('/about', [AboutController::class, 'index'])->name('about-index');
        Route::resource('/about', AboutController::class);
        Route::get('/contact', [ContactController::class, 'index'])->name('contact-index');
        Route::resource('/contact', ContactController::class);
        Route::get('/educational', [EducationalController::class, 'index'])->name('educational-index');
        Route::resource('/educational', EducationalController::class);
        Route::get('/partners', [PartnersController::class, 'index'])->name('partners-index');
        Route::resource('/partners', PartnersController::class);
        Route::get('/question', [QuestionController::class, 'index'])->name('question-index');
        Route::resource('/question', QuestionController::class);
        Route::get('/student', [StudentController::class, 'index'])->name('student-index');
        Route::resource('/student', StudentController::class);
        Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher-index');
        Route::resource('/teacher', TeacherController::class);
        Route::get('/document', [DocumentController::class, 'index'])->name('document-index');
        Route::resource('/document', DocumentController::class);
        Route::get('/number', [NumberController::class, 'index'])->name('number-index');
        Route::resource('/number', NumberController::class);
        Route::get('/video', [VideoController::class, 'index'])->name('video-index');
        Route::resource('/video', VideoController::class);
        Route::get('/photo', [StudentPhotoController::class, 'index'])->name('photo-index');
        Route::resource('/photo', StudentPhotoController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('profile');
        Route::resource('/profile', UserController::class);
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/{lang}', function ($lang){
//    return $lang;

    session(['lang' => $lang]);

    return back();
});
//Route::get('/ru', [MainController::class, 'ru'])->name('ru');
//Route::get('/en', [MainController::class, 'en'])->name('en');
