<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        <b>this</b> is the header
    </header>

    <img src="{{asset('images/pic1.png')}}" width="120" height="100">

    <footer>
        @yield('maincontent')

        2026 allright <i>reserve</i>
    </footer>
</body>
</html>