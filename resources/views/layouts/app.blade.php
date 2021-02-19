@extends('layouts.base')

@section('body')

    <header class="sticky top-0">
        
        <div class="bg-white border-b">
            <div class="flex items-center justify-between max-w-3xl p-3 mx-auto space-x-2">
                <h1>
                    <a href="{{ route('dashboard') }}" class="font-mono font-semibold tracking-tight text-gray-900 hover:no-underline hover:text-gray-900">
                        Link Vault 🔒
                    </a>
                </h1>
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
                <a href="{{ route('dashboard') }}" class="z-0 w-full py-2 text-center hover:bg-gray-200 hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Dashboard
                </a>
                <a href="{{ route('dashboard.links.index') }}" class="z-0 w-full py-2 text-center hover:bg-gray-200 hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Links
                </a>
                <a href="{{ route('dashboard.tags.index') }}" class="z-0 w-full py-2 text-center hover:bg-gray-200 hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Tags
                </a>
            </div>
        </div>
        
    </header>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>

@endsection