<!DOCTYPE html>
<html>
<head>
    <title>Cuba Theme</title>
    <link rel="stylesheet" href="{{ asset('themes/cuba/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>