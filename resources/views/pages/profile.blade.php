@extends('base')

@section('title')
Profile | Hello City
@endsection

@section('content')
        <h1>{{session('user')}} Profile page</h1>

        <p>It's currently {{ date('h:i A') }}.</p>

        <p><a href="/logout">Logout</a></p>

@endsection