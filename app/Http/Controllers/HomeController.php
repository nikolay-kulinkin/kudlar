<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
  public function index()
  {
    return View::make('home.index',[
      'name'=>'John',
      'age'=>35,
      'title'=>'Home Page'
    ]);
  }

  public function test()
  {
    $name='Katy';
    $age=27;
    $title='Test Page';
    return view('home.test',compact('name','age','title'));
  }

  public function contact()
  {
    $title='Contact Page';
    return view('home.contact')->with(['title'=>$title]);
  }
}
