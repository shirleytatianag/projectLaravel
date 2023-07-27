<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto Web</title>
</head>
<body>
    <p>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Blog</a>

        @auth
            <a href="{{ route('dashboard') }}"> Dashboard</a>
        @else
            <a href="{{ route('dashboard') }}"> Login</a>
        @endauth
    </p>
    <hr>

    @yield('content')
</body>
</html>
