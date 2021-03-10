@extends('base')

@section('title', 'Hello City')

@section('content')
        <h1>Hello from Goma!</h1>

        <p>It's currently {{ date('h:i A') }}.</p>

@endsection   
