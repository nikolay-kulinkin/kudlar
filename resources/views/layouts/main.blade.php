<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{$title??'Default title'}}</title> -->
     <title>@yield('title','Default title')</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('main.css')}}"> -->
    @vite(['resources/bootstrap/bootstrap.bundle.js',
                   'resources/bootstrap/bootstrap.css',
                   'resources/css/main.css'
        ])
</head>

<body>

    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home.index')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @show

    <div class="container mt-3">
       @yield('content')
    </div>

    <!-- @include('layouts.incs.footer',['test'=>'Hello from layout']) -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> -->
    <script src="{{asset('bootstrap/bootstrap.bundle.js')}}"> 
    </script>
</body>

</html>