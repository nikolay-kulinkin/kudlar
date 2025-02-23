@extends('layouts.main')

{{--@section('title','Test title from Home page') --}}
@section('title', $title ?? 'Default title2')

@section('content')
<h1>Home page</h1>



@foreach($users as $user)
    <span @class(['text-danger'=>$loop->even])>{{$user->id}}.{{$user->name}}-{{$user->email}}</span><br> 
@endforeach

    @endsection