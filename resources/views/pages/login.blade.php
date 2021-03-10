<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City - Login</title>

    </head>
    <body>
       <h1>User login</h1>
       <form action="user" method="POST">
             @csrf 
             <input type="text" name="user" placeholder="Enter username"><br><br>
             <input type="password" name="password" placeholder="Enter your password"><br><br>
             <button type="submit"> Login</button>
       </form>

        <footer>
          <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About Us</a></p>
        </footer>
    </body>
</html>
