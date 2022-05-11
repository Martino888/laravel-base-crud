
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>

    </header>
    <body>
        {{-- inserito nell href dell header nallla parola comics --}}
        {{-- <a href="{{ route('comics.index') }}"><h1>HOME</h1></a> --}}
    </body>
    <footer>

        @section('header')
            @include('partials.header')
        @endsection

    </footer>
</body>
</html>


        @extends('template.base')

        @section('documentTitle')
            Home
        @endsection
