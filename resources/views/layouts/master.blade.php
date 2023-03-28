<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('main.css')}}" >
</head>
<body>

    <header>
        <h2>Mein Eventportal</h2>
        <ul class="navbar">
            <li><a href="/">Alle Events</a></li>
        </ul>

        @auth
            <div class="main">
                <a href="/logout"><button class="buttonlogin">Logout</button></a>
            </div>
        @endauth

        @guest
        <div class="main">
            <a href="/login">Login</a>
            <a href="/register"><button class="buttonlogin">Register</button></a>
        </div>
        @endguest
    </header>

    @yield('content')

</body>
</html>
