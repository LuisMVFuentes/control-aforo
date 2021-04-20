<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Locals</h1>
    <ul>
        @if (!empty($users))
            @foreach ($locals as $local)
                <li>{{ $local }}</li>
            @endforeach
        @else
            <p>No hay elementos</p>
        @endif
    </ul>
</body>

</html>