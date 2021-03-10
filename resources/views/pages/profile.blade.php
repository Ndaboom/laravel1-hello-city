<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City - Profile</title>

    </head>
    <body>
        <h1>{{session('user')}} Profile page</h1>

        <p>It's currently {{ date('h:i A') }}.</p>

        <p><a href="/logout">Logout</a></p>

        <footer>
          <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About Us</a></p>
        </footer>
    </body>
</html>
