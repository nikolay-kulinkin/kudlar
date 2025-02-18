<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('test.hi',['title'=>'Main page']);
    }
}
