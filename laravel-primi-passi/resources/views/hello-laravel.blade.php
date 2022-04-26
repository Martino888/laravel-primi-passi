<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello-laravel</title>
</head>
<body>
    <h1>{{$titolo}}</h1>
    <p>{{$descrizione}}</p>
    <!-- @dd($titolo) -->

    <a href="{{route('pagina1')}}">segui</a>

</body>
</html>
