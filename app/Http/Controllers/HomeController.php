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
    $cities=[];
    // $cities=DB::table('city')->whereIn('Name',['Kabul','Paris','Madrid'])
    //                           ->select('Name')
    //                          ->get();
    // $cities=DB::table('city')->where('Name','like','a%')->get();
    // $cities=DB::table('city')->where('CountryCode','like','N%')->get();
    // $cities=DB::table('city')->where('Name','like','_b%')->get();
    // $cities=DB::table('city')->where('Name','like','%b_')->get();
    // $cities=DB::table('city')->where('CountryCode','like','_b_')->get();
    // $users=DB::table('users')->whereDate('created_at','>','2025-02-22')->get();
    // $cities=DB::table('city')->select('city.ID','city.Name','city.CountryCode',
    //                                  'country.Name as country_name')
    //                           ->leftJoin('country','city.CountryCode','=','country.Code')
    //                           ->limit(10)
    //                           ->get();

    // DB::statement("set sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'");                         
    //  $cities=DB::table('city')->selectRaw('sum(Population) as s_p,CountryCode,max(Name)')
    //                           ->groupBy('CountryCode')
    //                           ->having('s_p','>',10000000)
    //                           ->get();
    // dump(DB::select('select @@sql_mode'));

    // dump(DB::table('users')->insert([
    //      'name'=>'User1',
    //      'email'=>'user1@mail.com',
    //      'password'=>111
    // ]));
    // dump(DB::table('users')->insert([[
    //      'name'=>'User2',
    //      'email'=>'user2@mail.com',
    //      'password'=>222
    // ],[
    //      'name'=>'User3',
    //      'email'=>'user3@mail.com',
    //      'password'=>333
    // ]]));
    // dump(DB::table('users')->insertOrIgnore([[
    //   'name'=>'User5',
    //   'email'=>'user2@mail.com',
    //   'password'=>555
    // ],[
    //   'name'=>'User4',
    //   'email'=>'user4@mail.com',
    //   'password'=>444
    // ]]));
    // dump(DB::table('users')->insertGetId([
    //   'name'=>'User5',
    //   'email'=>'user5@mail.com',
    //   'password'=>555
    // ]));
    // dump(DB::table('users')->where('id',12)->update([
    //   'name'=>'Darc',
    //   'email'=>'darc_new@mail.com'
    // ]));
    // dump(DB::table('users')->updateOrInsert(
    //   ['email'=>'darc_new@mail.com'],
    //   ['name'=>'Darc New','password'=>'new_password']

    // ));
    // dump(DB::table('users')->updateOrInsert(
    //   ['email'=>'darc_new2@mail.com'],
    //   ['name'=>'Darc New2','password'=>'new_password2']

    // ));
    dump(DB::table('users')->delete(19));
    dump($cities);
   
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
