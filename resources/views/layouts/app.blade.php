@extends('layouts.base')

@section('body')

    <div class="py-2 text-center border-b">
        <h1>App.blade.php</h1>
        <div class="flex items-center justify-center space-x-2">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-link">Logout</button>
            </form>    
        </div>
    </div>

    <div class="py-2 mb-2 text-center border-b">
        <h2>Auth: {{ auth()->user()->email }}</h2>
    </div>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>
    
@endsection