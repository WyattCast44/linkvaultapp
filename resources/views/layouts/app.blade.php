@extends('layouts.base')

@section('body')

    <div class="py-2 text-center bg-white border-b">
        <div class="flex items-center justify-center space-x-2">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-link">Logout</button>
            </form>    
        </div>
    </div>

    <div class="bg-white border-b">
        <div class="max-w-3xl mx-auto">
            <livewire:components.inputs.create-link />
        </div>
    </div>

    <div class="mb-2 text-center bg-white border-b">
        <div class="flex items-center justify-between max-w-3xl mx-auto border-l border-r divide-x">
            <a href="{{ route('dashboard') }}" class="w-full py-2 text-center hover:bg-gray-200 hover:no-underline">Dashboard</a>
            <a href="{{ route('dashboard.links.index') }}" class="w-full py-2 text-center hover:bg-gray-200 hover:no-underline">Links</a>
            <a href="{{ route('dashboard.tags.index') }}" class="w-full py-2 text-center hover:bg-gray-200 hover:no-underline">Tags</a>
        </div>
    </div>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>
    
@endsection