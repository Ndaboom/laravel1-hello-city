<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', env('APP_NAME'))</title>

    </head>
    <body>
        @yield('content')

        <footer>
          <p>&copy; Copyright {{ date('Y') }} &middot; 
          @if(!Route::is('about_page'))
          <a href="{{route('about_page')}}">About Us</a></p>
          @endif
        </footer>
    </body>
</html>
