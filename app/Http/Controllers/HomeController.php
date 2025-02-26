<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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
    
    // $post=Post::find(1);
    // dump($post->toArray());
    // $tags=$post->tags;
    // dump($tags);

    // foreach($tags as $tag){
    //   echo "{$tag->title}<br>";
    // }

    // foreach($tags as $tag){
    //   echo "{$tag->title}|{$tag->pivot->created_at}<br>";
    // }

    // $tag=Tag::find(5);
    // dump($tag->posts->toArray());
    
    // $posts=Post::all();
    // foreach($posts as $post){
    //   echo "{$post->title}<br><br>";
    //   foreach($post->tags as $tag){
    //     echo "{$tag->title}<br>";
    //   }
    //   echo "<hr>";
    // }

    // $posts=Post::with('tags')->get();
    // foreach($posts as $post){
    //   echo "{$post->title}<br><br>";
    //   foreach($post->tags as $tag){
    //     echo "{$tag->title}<br>";
    //   }
    //   echo "<hr>";
    // }

    $category=Category::find(1);
    dump($category->posts->toArray());
    dump($category->latestPost->toArray());
    dump($category->oldestPost->toArray());
    dump($category->latestActivePost->toArray());
   
    
    
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
