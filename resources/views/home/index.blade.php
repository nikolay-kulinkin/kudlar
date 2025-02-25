@extends('layouts.main')

{{--@section('title','Test title from Home page') --}}
@section('title', $title ?? 'Default title2')

@section('content')
<h1>Home page</h1>

{{-- <div class="row my-3">
    @foreach($products as $product)
    <div class="col-md-4">
        {{$product['title']}}
</div>
@endforeach
</div> --}}

{{-- @foreach($products->chunk(3) as $chunk)
<div class="row my-3">
    @foreach($chunk as $product)
    <div class="col-md-4">
        {{$product['title']}}
</div>
@endforeach
</div>
@endforeach --}}



 {{-- @foreach($posts as $post)
   {{$post->title}}|{{$post->status?'Published':'Not published'}}<br>
@endforeach 

 @foreach($posts as $post) 
   {{$post->title}}|{{$post->isPublished()}}<br>
@endforeach
<hr>
 @foreach($posts2 as $post)
   {{$post->title}}<br>
@endforeach
<hr>
@foreach($posts3 as $post)
   {{$post->title}}<br>
@endforeach  --}}







@endsection