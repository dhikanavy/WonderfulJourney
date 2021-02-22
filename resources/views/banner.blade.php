<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <title>Wonderful Journey</title>
</head>

<body>
    <?php
    use App\category;
    $category = Category::all();
    ?>

    <div class="jumbotron">
        <h1 class="display-4 text-center">Wonderful Journey</h1>
        <hr class="my-4">
        <p class="text-center">Blog of Indonesia Tourism</p>
    </div>
    <div class="container sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Home</a>
                        </li>

                        {{-- @foreach ($category as $item)
                            <a class="nav-link text-white" href="/percategory/{{ $item->id }}"> {{ $item->name }}</a>
                        @endforeach --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($category as $item)
                                    <a class="nav-link text-dark" href="/percategory/{{ $item->id }}">
                                        {{ $item->name }}</a>
                                @endforeach
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">About us</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Home</a>
                        </li>

                        {{-- @foreach ($category as $item)
                            <a class="nav-link text-white" href="/percategory/{{ $item->id }}"> {{ $item->name }}</a>
                        @endforeach --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($category as $item)
                                    <a class="nav-link text-dark" href="/percategory/{{ $item->id }}">
                                        {{ $item->name }}</a>
                                @endforeach
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">About us</a>
                        </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/login">Login</a>
                        </li>
                    @else
                        @if (Auth::user()->role == 'Member')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/yourarticles">Your Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/update">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/logout">Logout</a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/logout">Logout</a>
                            </li>    
                        @endif
                    @endguest

                </ul>
            </div>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
</body>

</html>
