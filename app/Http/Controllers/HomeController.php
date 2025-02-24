<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;

class HomeController extends Controller
{
  public function index()
  {
    $users=[];
    // $users=DB::table('users')->get(['id','name','email']);
    // $user=DB::table('users')->first();
    // $user=DB::table('users')->where('id','=',3)->first();
    // $user=DB::table('users')->where('name','Caesar')->first();
    // $user=DB::table('users')->where('id','>','2')->value('name');
    // $users=DB::table('users')->where('id','>',1)->orderBy('id')->get();
    // $user=DB::table('users')->find(2,['id','name']);
    // $users=DB::table('users')->pluck('name','email');
    // $cities=DB::table('city')->limit(10)->get();
    // $cities=DB::table('city')
    //         ->where('ID','>',3)
    //         ->where('ID','<',10)
    //         ->get();
    // $cities=DB::table('city')
    //             ->where([['ID','>',3],['ID','<',10]])
    //             ->orWhere('Population','>',2000000)
    //             ->get();
      // $cities=DB::table('city')->count();
      // $cities=DB::table('city')->max('Population');
      $cities=DB::table('city')->orderBy('Population','desc')->first();
    dump($cities->Population);
   
     return view('home.index',compact('users'));
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
