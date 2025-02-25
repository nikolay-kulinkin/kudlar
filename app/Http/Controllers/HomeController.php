<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Country;
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
    
    
    
    // $country=Country::find('AFG');
    // dump($country->toArray());
    // dump('Count:'.Country::query()->count());
    // dump('Count:'.Country::query()->where('Population','>',1_000_000)->count());
    // dump('Max:'.Country::query()->max('Population'));
    // dump('Min:'.Country::query()->min('Population'));
    // dump('Avg:'.Country::query()->avg('Population'));
    // $country=Country::find('AFG2');
    // if(!$country){
    //   abort(404);
    // }
    // // dump($country);
    // $country=Country::query()->findOrFail('AFG2');
    // dump($country);
    // $post=new Post();
    // $post->title='Post4';
    // $post->content='Post4 content';
    // $post->category_id=rand(1,2);
    // dump($post->save());
    // dump($post);
    // $post=new Post();
    // $post->title='Post5';
    // $post->content='Post5 content';
    // $post->category_id=rand(1,2);
    // dump($post->save());
    // dump($post->id);
    // dump(Post::query()->create([
    //   'title'=>'Post7',
    //   'content'=>'Post7 content',
    //   'category_id'=>rand(1,2),
    //   'status'=>0
    // ]));

    // $post=Post::query()->find(2);
    // dump($post->delete());

    // dump(Post::destroy(3));
    // dump(Post::destroy(7,9));
     return view('home.index',compact('users'));
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
