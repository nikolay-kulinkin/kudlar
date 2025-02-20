@extends('layouts.main')

@section('content')
   <h1>Contact page</h1>
@endsection

@section('title')
   Test title from Contact page
@endsection

@section('navbar')
  @parent
  <div class="container">
    Additional content
  </div>
@endsection