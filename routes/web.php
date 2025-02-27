<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\ProductController;

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

// Route::get('/', function () {
    
//     return view('welcome');
// });
// Route::get('/posts/create',function(){
//     return '22222222222222';
// })->name('posts.create');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');


Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/test',[HomeController::class,'test'])->name('home.test');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
Route::post('/store',[HomeController::class,'store'])
                     ->withoutMiddleware(VerifyCsrfToken::class);
Route::post('/update',[HomeController::class,'update'])
                     ->withoutMiddleware(VerifyCsrfToken::class);

