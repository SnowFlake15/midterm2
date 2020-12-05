<?php

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
})->name('none');
Route::get('/login', [\App\http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/quiz_login', [\App\http\Controllers\LoginController::class, 'quizLogin'])->name('quiz.login');
Route::post('/logout', [\App\http\Controllers\LoginController::class, 'logout'])->name('logout');


//Route::middleware('auth')->group(function (){

    Route::get("/quizz", [\App\http\Controllers\QuizzController::class, 'index'] )->name('quizz');

    Route::get("/quiz/create", [\App\http\Controllers\QuizzController::class, 'create'] )->name('quiz.create');

    Route::post('/quiz/save_quiz', [\App\http\Controllers\QuizzController::class, 'save'])->name('quiz.save');


//});
