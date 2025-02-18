<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/',[MainController::class,'index']);
    
// Route::get('/admin',function(){
//     return 'Admin main page';
// });
// Route::get('/admin/posts',function(){
//     return 'Admin posts page';
// });
// Route::get('/admin/posts/{id}',function($id){
//     return "Admin post {$id}";
// });

Route::prefix('admin')->group(function(){
    Route::get('/',function(){
            return 'Admin main page';
    });
    Route::get('/posts',function(){
            return 'Admin posts page';
    });
    Route::get('posts/{id}',function($id){
            return "Admin post {$id}";
    });
});

// Route::fallback(function(){
//     return 'Fallback page';
// });
// Route::fallback(function(){
//     return response('404-Page not found',404);
// });
Route::fallback(function(){
    return response()->json(['answer'=>'404-Page not found'],404);
});

