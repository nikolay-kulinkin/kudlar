<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //   dd(app());
    // dd(app()->make('cache'));
    // $cache=app()->make('cache');
    // $cache->put('test',123);
    // dd($cache->get('test','default'));
    // dd(app('cache'));
    // $cache=app('cache');
    // dd(cache());
    // $cache=cache();
    // dd(Cache::get('test',222));
    
    return view('welcome');
});
