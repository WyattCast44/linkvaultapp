@extends('layouts.base')

@section('body')

    <div class="py-2 mb-2 text-center border-b">
        <h1>Auth.blade.php</h1>
        <div class="flex items-center justify-center space-x-2">
            <a href="{{ route('welcome') }}">Welcome</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>

@endsection