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
    
    // $posts=Post::query()->get();
    // dump($posts);

    // $posts2=DB::table('posts')->get();
    // dump($posts2);

    // $posts3=DB::select('select * from posts');
    // dump($posts3);
    
    // $data=[1,2,3,4,5];
    // // dump($data);
    // $data=collect($data);
    // dump($data);
    
    // $products=[
    //   ['title'=>'Product 1','price'=>10],
    //   ['title'=>'Product 2','price'=>15],
    //   ['title'=>'Product 3','price'=>10],
    //   ['title'=>'Product 4','price'=>20],
    //   ['title'=>'Product 5','price'=>20],
    // ];
    // $products=collect($products);
    // dump($products);

    // dump($products->avg('price'));
    // dump($products->min('price'));
    // dump($products->max('price'));
    // dump($products->sum('price'));
    // dump($products->count());

    // $filtered=$products->filter(function($value,$key){
    //   return $value['price']>10;
    // });
    // dump($filtered);

    // $countries=Country::query()->limit(10)->get(['Name','Population','Continent']);
    // dump($countries);

    // $filtered=$countries->filter(function($value,$key){
    //   return $value['Population']>3_000_000;
    // });
    // dump($filtered->toArray());

    // dump($countries->avg('Population'));
    // dump($countries->max('Population'));
    // dump($countries->min('Population'));
    // dump($countries->sum('Population'));

    // dump($countries->countBy(function(Country $country){
    //   return $country->Continent;
    // }));




    
     return view('home.index',compact('posts','posts2','posts3'));
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
