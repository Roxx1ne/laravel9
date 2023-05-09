<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | @yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bg.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #66347F">
        <div class="container-fluid">
            <a class="navbar-brand" href="back">A R Ticle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($tittle === 'home')? 'active' : '' }}" href="back">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($tittle ===  'users') ? 'active' : '' }}" href="users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($tittle === 'porto') ? 'active' : '' }}" href="porto">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($tittle === 'about') ? 'active' : '' }}" href="about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="isicontent" style="color:white">
        {{-- isi home --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- isi porto --}}
        <br>
        <div class="container">
            @yield('portofolio')
        </div>

        {{-- isi project --}}
        <div class="container">
            @yield('users')
        </div>

        {{-- isi about --}}
        <div class="container">
            @yield('about')
        </div>
    </div>

    {{-- akhir navbar --}}

    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>