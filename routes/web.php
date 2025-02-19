<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\Admin\PostController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/test',[HomeController::class,'test']);
Route::get('/single',TestController::class);

Route::prefix('admin')->name('admin.')->group(function(){

//      Route::get('/products',[ProductController::class,'index'])
//             ->name('products.index');
//      Route::get('/products/create',[ProductController::class,'create'])
//              ->name('products.create');
//      Route::post('/products',[ProductController::class,'store'])
//              ->name('products.store')
//              ->withoutMiddleware(VerifyCsrfToken::class);
//      Route::get('/products/{product}',[ProductController::class,'show'])
//              ->name('products.show');
//      Route::get('/products/{product}/edit',[ProductController::class,'edit'])
//              ->name('products.edit');
//      Route::put('/products/{product}',[ProductController::class,'update'])
//              ->name('products.update')
//              ->withoutMiddleware(VerifyCsrfToken::class);
//      Route::delete('/products/{product}',[ProductController::class,'destroy'])
//              ->name('products.destroy')
//              ->withoutMiddleware(VerifyCsrfToken::class);

//      Route::resource('posts',PostController::class);

        // Route::resource('products',ProductController::class);
        // Route::resource('products',ProductController::class)
        //        ->only(['index','show']);
        Route::resource('products',ProductController::class)
               ->except(['create','store','destroy','update','edit']);
});