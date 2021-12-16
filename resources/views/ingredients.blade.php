<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route ('home')}}">
                    <img src="http://www.ruralhack.org/wp-content/uploads/2018/01/Pizza-PNG-Picture.png" alt=""
                        width="30" height="24" class="d-inline-block align-text-top">
                    Pizza
                </a>
                <a class="nav-link" href="{{ route ('ingredients')}}">Ingredients</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container text-light d-flex">
            <div>
                <h1>{{$title}}</h1>
                <ul>
                    @foreach ($ingredients as $ingredient)
                    <li>{{$ingredient}}</li>
                    @endforeach
                </ul>
            </div>
            <img src="http://www.isimcalabria.it/wp-content/uploads/2019/03/MARGHERITA-1030x763.png" alt="">
        </div>
    </main>
</body>

</html>