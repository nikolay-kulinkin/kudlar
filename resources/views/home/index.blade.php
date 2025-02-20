@extends('layouts.main')

@section('content')
   <h1>Home page</h1>
@endsection

{{--@section('title','Test title from Home page') --}}
@section('title', $title ?? 'Default title2')
   
 