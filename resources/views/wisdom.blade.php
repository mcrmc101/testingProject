<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased font-mono">
    @include('partials.navbar')
    @livewire('flash-message')
    <div class="flex flex-col h-screen my-auto items-center">
        <div class="p-8 w-11/12 md:w-8/12 max-h-10/12 bg-neutral-100 rounded-lg shadow prose">
            @livewire('get-wisdom')
            @livewire('list-wisdom')
        </div>
    </div>
    @include('partials.footer')
    @livewireScripts
</body>

</html>
