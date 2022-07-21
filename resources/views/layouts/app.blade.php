<!DOCTYPE html>
<html class="antialiased [font-feature-settings:'ss01'] dark js-focus-visible" data-theme="dark"
      lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="__next" class="bg-white dark:bg-slate-900">

        <x-jet-banner />

        @livewire('navigation-menu')

        <main>
            {{ $slot }}
        </main>

        @stack('modals')

        @livewireScripts
    </body>
</html>
