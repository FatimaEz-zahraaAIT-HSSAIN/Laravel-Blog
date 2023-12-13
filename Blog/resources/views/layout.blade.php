<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    @yield('links')
</head>
<body>
    <nav>
        <ul class="topnav">
            <li><a  href="{{route('articles')}}"><ion-icon name="albums-outline"></ion-icon> Articles</a></li>
            <li class="right auth-btn"><a href="{{route('auth')}}">Login</a></li>
        </ul>
    </nav>

    @yield('content')
    @yield('aside')
</body>
@yield('js')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>