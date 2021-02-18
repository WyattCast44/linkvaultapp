<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    <livewire:scripts />
    <script src="{{ mix('js/livewire-turbolinks.js') }}" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    
    @yield('body')
    
    <livewire:components.modals.command-palette />
    @stack('scripts')
</body>
</html>