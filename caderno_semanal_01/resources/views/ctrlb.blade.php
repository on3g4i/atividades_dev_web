<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($clientes as $c)
            <li>{{ $c['id'] }}:{{ $c['nome'] }} </li>
        @endforeach
    </ul>
</body>

</html>