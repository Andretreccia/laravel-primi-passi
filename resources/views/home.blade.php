<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>{{$title}}</h1>
        <ul>
            @foreach($ingredients as $ingredient)
            <li>{{$ingredient}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>