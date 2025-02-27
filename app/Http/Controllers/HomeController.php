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
   
    // Post::create([
    //   'title'=>'Post 6',
    //   'slug'=>'post-6',
    //   'content'=>'Lorem ipsum...',
    //   'category_id'=>4
    // ]);

    // $category=Category::find(2);
    // $category->posts()->save(
    //   new Post([
    //     'title'=>'Post7',
    //     'slug'=>'post-7',
    //     'content'=>'Lorem ipsum...'
    //   ])
    // );

    // $category->posts()->saveMany([
    //   new Post(['title'=>'Post8','slug'=>'post-8',
    //             'content'=>'Lorem ipsum...']),
    //   new Post(['title'=>'Post9','slug'=>'post-9',
    //             'content'=>'Lorem ipsum...'])
      
    // ]);

    // $category=Category::find(3);
    // $category->posts()->create([
    //   'title'=>'Post10',
    //   'slug'=>'post-10',
    //   'content'=>'Lorem ipsum...'
    // ]);
    // $category->posts()->create([
    //   'title'=>'Post11',
    //   'slug'=>'post-11',
    //   'content'=>'Lorem ipsum...'
    // ]);
    // dump($category->posts->toArray());

    // $category->posts()->save(new Post([
    //   'title'=>'Post12',
    //   'slug'=>'post-12',
    //   'content'=>'Lorem ipsum...'
    // ]));
    // dump($category->posts->toArray());

    // $category=Category::find(3);
    // dump($category->posts->toArray());
    // $category->posts()->save(new Post([
    //   'title'=>'Post13',
    //   'slug'=>'post-13',
    //   'content'=>'Lorem ipsum...'
    // ]));
    // dump($category->posts->toArray());

    // $category=Category::find(3);
    // dump($category->posts->toArray());
    // $category->posts()->save(new Post([
    //   'title'=>'Post14',
    //   'slug'=>'post-14',
    //   'content'=>'Lorem ipsum...'
    // ]));
    // $category->refresh();
    // dump($category->posts->toArray());

    // $category=Category::find(4);
    // $post=Post::find(15);
    // $post->category()->associate($category);
    // $post->save();

    
    // $post=Post::find(15);
    // $post->category()->dissociate();
    // $post->save();

    $post=Post::find(10);
    // $post->tags()->attach(2);
    // $post->tags()->attach([1,4]);
    // $post->tags()->detach(2);
    // $post->tags()->sync([1,2,4]);
    // $post->tags()->toggle([1,2,4,5]);




   

   

   
    
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
