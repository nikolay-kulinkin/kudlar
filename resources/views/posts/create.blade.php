@extends('layouts.main')


@section('content')

<h2>{{$title}}</h2>

@if(session('success'))
<div class="alert alert-success">
   {{session('success')}}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
   <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
   </ul>

</div>
@endif

<form action="{{route('posts.store')}}" method="post">
   @csrf
   <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id" aria-label="Default select example">
         <option value="1">Category1</option>
      </select>
   </div>

   <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" 
             id="title" name="title" value="{{old('title')}}" placeholder="Post title">
      @if($errors->has('title'))
      <div class="invalid-feedback">
         {{$errors->first('title')}}
      </div>
      @endif
   </div>

   <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="Post slug">
   </div>

   <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content" placeholder="Post content" rows="3"></textarea>
   </div>

   <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection