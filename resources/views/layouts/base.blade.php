<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    <livewire:scripts />
    <script src="{{ mix('js/livewire-turbolinks.js') }}" data-turbo-eval="false" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    
    @yield('body')
    
    <livewire:components.modals.command-palette />

    @stack('scripts')

    <script>
        document.addEventListener("turbo:load", function() {
            document.activeElement.blur();
        })
    </script>
</body>
</html>