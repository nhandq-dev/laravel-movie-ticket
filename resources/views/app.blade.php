<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="night">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <link data-rh="true" rel="icon" href="{{ URL::to('/') }}/favicon.ico">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
    <script>
        window.onload = function() {
            // Retrieve user name
            const theme = localStorage.getItem('data-theme');
            if (theme === undefined || theme === null) {
                localStorage.setItem('data-theme', 'light');
            }
            document.querySelector('html').setAttribute('data-theme', theme);
        }
    </script>
</body>

</html>
