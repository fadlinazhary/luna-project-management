<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Luna Project Management' }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="app__body">
        <livewire:components.sidebar>
        
        <section class="app__container">
            <livewire:components.topbar>
            {{ $slot }}
        </section>
    </main>


    @livewireScripts
    @stack('scripts')
</body>
</html>