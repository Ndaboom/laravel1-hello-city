@extends('base')

@section('title','Login | '.config('app.name'))

@section('content')
       <h1>User login</h1>
       <form action="user" method="POST">
             @csrf 
             <input type="text" name="user" placeholder="Enter username"><br><br>
             <input type="password" name="password" placeholder="Enter your password"><br><br>
             <button type="submit"> Login</button>
       </form>

@endsection