<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
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
    
    // $category=Category::query()->find(1);
    // dump($category->toArray());

    // $posts=Post::where('category_id',1)->get();
    // dump($posts->toArray());
    
    // $posts=$category->posts;
    // dump($posts->toArray());

    // $post=Post::find(1);
    // dump($post->category->toArray());

    // $categories=Category::all();
    // dump($categories->toArray());
    // foreach($categories as $category){
    //   echo "{$category->title}<br>";
    //   foreach($category->posts as $post){
    //     echo "{$post->title}<br>";
    //   }
    //   echo "<hr>";
    // }

    // $categories=Category::with('posts')->get();
    // foreach($categories as $category){
    //      echo "{$category->title}<br>";
    //      foreach($category->posts as $post){
    //        echo "{$post->title}<br>";
    //       }
    //      echo "<hr>";
    // }

    // $categories=Category::query()->withCount('posts')->get();
    // dump($categories->toArray());
    // foreach($categories as $category){
    //   echo "{$category->title} ({$category->posts_count})<br>";
    // }

    $category=Category::find(1);
    // dump($category->posts()->orderBy('id','desc')->get()->toArray());
    // dump($category->posts()->where('title','<>','Post4')
    //               ->orderBy('id','desc')->get()->toArray());

    // dump($category->posts->where('title','<>','Post4')->toArray());

    // dump($category->posts()->get()->toArray());
    
     return view('home.index');
  }

  public function store(Request $request)
  {
    // var_dump($request->all());
    // var_dump($request->all('title','content'));
    // var_dump($request->title);
    // $post=new Post();
    // $post->title=$request->title;
    // $post->content=$request->content;
    // $post->category_id=$request->category_id;
    // dump($post->save());
    // Post::query()->create($request->all());
    // return $request->all();
  }

  public function update(Request $request)
  {
    // $post=Post::query()->find($request->id);
    // $post->title=$request->title;
    // $post->content=$request->content;
    // $post->category_id=$request->category_id;
    // $post->status=$request->status;
    // $post->save();
    // return 'OK';

    // $post=Post::query()->findOrFail($request->id);
    // $post->update($request->all());
    // return 'OK';

    // var_dump(
    //   Post::query()
    //   ->where('id',$request->id)
    //   ->update($request->all())
    // );
    // return 'OK';

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
