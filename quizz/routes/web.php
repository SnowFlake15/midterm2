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


Route::middleware('auth')->group(function (){

    Route::get("/quiz", [\App\http\Controllers\LoginController::class, 'index'] )->name('quiz');

    Route::get("/quiz/create", [\App\http\Controllers\LoginController::class, 'create'] )->name('quiz.create');

    Route::post('/quiz/save_film', [\App\http\Controllers\LoginController::class, 'save'])->name('quiz.save');


});
//
//Route::get('/', 'HomeController@index');
//Route::get('/quiz', 'HomeController@quiz');
//Route::get('/quizplay/{id}', 'HomeController@quizplay');
//Route::get('/quizend/{perc}', ['uses' =>'HomeController@quizend']);
//
//
//Route::get('/admin', 'AdminController@index');
//Route::post('/edit-content/{id}', 'AdminController@editContent');
//Route::get('/admin-quizz', 'AdminController@adminquizz');
//
//Route::get('admin-quizz/category/{id}', 'AdminController@Category');
//
//Route::get('admin-quizz/edit-category/{id}','AdminController@editCategory');
//Route::post('/edit-category-action/{id}', 'AdminController@editCategoryAction');
//
//Route::get('admin-quizz/delete-category/{id}','AdminController@deleteCategory');
//
//Route::get('admin-quizz/create-category', 'AdminController@createCategory');
//Route::post('/create-category-action', 'AdminController@storeCategory');
//
//Route::get('question/{id}', 'AdminController@Question');
//
//Route::get('/admin-quizz/create-question/{id}', 'AdminController@createQuestion');
//Route::post('/create-question-action/{id}', 'AdminController@storeQuestion');
//
//Route::get('/admin-quizz/edit-question/{id}','AdminController@editQuestion');
//Route::post('/edit-question-action/{cid}/{qid}', 'AdminController@editQuestionAction');
//
//Route::get('/admin-quizz/delete-question/{cid}/{qid}','AdminController@deleteQuestion');
//
//Auth::routes();
//
//Route::get('logout', 'AdminController@logout');
//
//Route::get('/home', 'HomeController@index')->name('home');
