<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blonded</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-fixed" style="background-image: url('../images/background.png');">
    <!-- Navbar -->
    <div class="flex items-center justify-center py-4 relative">
        <a href="/Home">
            <img src="/images/blonded-logo.png" alt="Logo" class="w-24">
        </a>
        <div class="absolute right-0 top-10">
            <a href="/Home" class="text-white text-sm underline">
                Back
            </a>
        </div>
    </div>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="flex items-center justify-center py-5 gap-4 text-opacity-50 text-white">
        <a href="/terms" class="hover:underline text-sm">Terms</a>
        <a href="/privacy" class="hover:underline text-sm">Privacy</a>
        <a href="/help" class="hover:underline text-sm">Help</a>
    </footer>
</body>

</html>
