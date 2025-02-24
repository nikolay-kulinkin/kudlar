<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;

class HomeController extends Controller
{
  public function index()
  {
    $users=[];
    $cities=[];
    // $posts=Post::all()->toArray();
    // dump($posts);
    // $post=Post::first()->toArray();
    // dump($post);
    // $post=Post::query()->find(2,['id','title','slug'])->toArray();
    // dump($post);
    // $countries=Country::all()->toArray();
    // dump($countries);
    // $countries=Country::where('Population','>',100_000_000)
    //                   ->orderBy('Population','desc')
    //                   ->limit(10)
    //                   ->get()
    //                   ->toArray();

    
    // dump($countries);
    // $country=Country::first();
    // dump($country->toArray());
    // dump($country->Code);
    // dump($country->Name);
    $country=Country::find('ABW');
    dump($country->toArray());
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
