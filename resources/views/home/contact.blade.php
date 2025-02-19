<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$site_title}}::{{$title}}</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="{{route('home.index')}}" >Home</a></li>
            <li><a href="{{route('home.test')}}" >Test</a></li>
            <li><a href="{{route('home.contact')}}" >Contact</a></li>
        </ul>
</nav>

    <h1>{{$title}}</h1>
    <p>Count:{{$count}}</p>
   
</body>
</html>
