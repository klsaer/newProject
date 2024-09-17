<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Pervaya </h1>    
    <a href="{{route('home')}}"> На первую</a><br>;

    @for ($i = 2000; $i < 2030; $i++)
       <p>{{ $i }}
    @if($i%4==0 && $i % 100 !=0 || $i % 400 == 0)
        <span >leap</span>
    @endif
    </p>
    @endfor
</body>

</html>