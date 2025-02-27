<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create',['title'=>'Add post']);
    }

    public function store(StorePostRequest $request)
    {
       
         
        
        Post::query()->create($request->all());
        return redirect()->route('posts.create')->with('success','Post saved');
    }
}
