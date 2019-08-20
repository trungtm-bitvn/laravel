<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Laracast')</title>
</head>
<body>
    <ul>
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a href="/about">About us</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>