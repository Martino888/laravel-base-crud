
        <a href="{{ route('comics.index') }}"><h1>HOME</h1></a>


        @extends('template.base')

        @section('documentTitle')
            Home
        @endsection

        @section('header')
            @include('partials.header')
        @endsection
