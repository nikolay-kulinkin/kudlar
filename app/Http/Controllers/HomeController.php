<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
  public function index()
  {
    $users=[];
    // $users=DB::select("select * from users");
    // $users=DB::select('select id,name,email from users');
    // $users=DB::select('select id,name,email from users where id=?',[1]);
    // $users=DB::select('select id,name,email from users where id>? and name !=?',[1,'Kleopatra']);
    // $users=DB::select('select id,name,email from users where id>:id and name != :name',['name'=>'Kleopatra','id'=>1]);
    // $data=[
    //   'id'=>1,
    //   'name'=>'Kleopatra'
    // ];
    // $users=DB::select('select id,name,email from users where id>:id and name != :name',$data);
    // $cnt=DB::select('select count(*) as cnt from users');
    // dump($cnt[0]->cnt);
    // $cnt=DB::scalar('select count(*) from users');
    // dump($cnt);
    // dump(DB::insert('insert into users(name,email,password) VALUES (?,?,?)',['d\'Arc','darc@mail.com',555]));
    // dump(DB::update('update users set avatar=? where id=?',['image.jpg',5]));
    // dump(DB::update('update users set created_at=?,updated=?',[NOW(),date('Y-m-d H:i:s')]));
    // dump(DB::delete('delete from users where id=?',[5]));
    try{
      DB::beginTransaction();
      DB::insert('insert into users(name,email,password) VALUES (?,?,?)',['d\'Arc','darc@mail.com',555]);
      DB::insert('insert into users(name,email,password) VALUES (?,?,?)',['d\'Arc','darc2@mail.com',555]);
      DB::commit();  
      
    }catch (\Exception $e){
      DB::rollback();
      dump($e->getMessage());
    }
    
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
