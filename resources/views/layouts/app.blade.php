@extends('layouts.base')

@section('body')

    <header class="sticky top-0 bg-gradient-to-r from-indigo-300 to-purple-500">
        
        <div class="border-indigo-700 bg-gradient-to-r from-indigo-500 to-purple-500">
            <div class="flex items-center justify-between max-w-3xl p-3 mx-auto space-x-2">
                
                <!-- Logo -->
                <h1>
                    <a href="{{ route('dashboard') }}" class="font-mono font-bold tracking-tight text-transparent text-white hover:no-underline hover:text-white">
                        Link Vault 🔒
                    </a>
                </h1>

                <!-- Account Actions Dropdown -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-link" aria-label="Logout" title="Logout">
                        <x-icon-logout class="w-6 h-6 text-white hover:text-opacity-75" />
                    </button>
                </form>    
                
            </div>
        </div>

        <div class="border-b border-indigo-700 bg-gradient-to-r from-indigo-500 to-purple-500">
            <div class="max-w-3xl mx-auto">
                <livewire:components.inputs.create-link />
            </div>
        </div>

        <div class="mb-2 text-center bg-indigo-400 border-b border-indigo-700">
            <div class="flex items-center justify-between max-w-3xl mx-auto border-l border-r border-indigo-700 divide-x divide-indigo-700">
                
                <a href="{{ route('dashboard') }}" class="z-0 w-full py-2 text-center text-white hover:bg-indigo-300 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Dashboard
                </a>

                <a href="{{ route('dashboard.links.index') }}" class="z-0 w-full py-2 text-center text-white hover:bg-indigo-300 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Links
                </a>

                <a href="{{ route('dashboard.tags.index') }}" class="z-0 w-full py-2 text-center text-white hover:bg-indigo-300 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Tags
                </a>

                <a href="{{ route('dashboard.search') }}" class="z-0 w-full py-2 text-center text-white hover:bg-indigo-300 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600">
                    Search
                </a>

            </div>
        </div>
        
    </header>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>

@endsection