@extends('base')

@section('title', ''.config('app.name'))

@section('content')
        <img src="{{ asset('/images/city.jpg') }}" alt="city image" style="width:100px;">
        <h1>Hello from Goma!</h1>

        <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>

@endsection   
