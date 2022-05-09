<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('documentTitle')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
</body>
</html>