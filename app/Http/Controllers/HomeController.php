<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
  public function index()
  {
    return view('home.index',['title'=>'Home page','test'=>'Test']);
  }

  public function test()
  {
   
    return view('home.test',['title'=>'Test page']);
  }

  public function contact()
  {
    
    return view('home.contact',['title'=>'Contact page']);
  }
}
