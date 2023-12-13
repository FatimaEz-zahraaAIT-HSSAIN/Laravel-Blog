<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\StaticController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Auth;

//Auth::routes();

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
Route::get('/', [ArticleController::class, 'index'] )->name('home');
Route::get('/auth', [StaticController::class, 'auth'] )->name('auth');
Route::post('/auth', [AuthManager::class, 'loginPost'])->name('login');
Route::post('/auth', [AuthManager::class, 'registerPost'])->name('register');
Route::get('/articles', [ArticleController::class, 'index'] )->name('articles');
Route::get('/create-article', [StaticController::class, 'createArticle'] )->name('create');
Route::post('/create-article', [ArticleController::class, 'createPost'] )->name('create.post');


