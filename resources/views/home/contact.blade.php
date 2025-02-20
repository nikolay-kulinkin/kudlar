<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>


    <h1>{{$title}}</h1>
    <h2>{!!$title!!}</h2>
    <h3><?= $title ?></h3>

    {{mb_strlen('Привет, мир!','UTF-8')}}

    <p>&copy;{{date('Y')}}</p>

    @{{name}}

    @verbatim
      <div class="container">
        Hello,{{name}}.
      </div>
    @endverbatim

    <script>
        let data1={!!json_encode($data)!!};
        let data2=<?= json_encode($data) ?>;
        {{--let data3={{Js::from($data)}};--}}
    </script>
   
</body>
</html>
