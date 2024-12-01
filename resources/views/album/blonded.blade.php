<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blonded</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-fixed" style="background-image: url('../images/background.png');">
    <div class="container mx-auto px-4">
        <!-- Navbar -->
        <div class="flex items-center justify-center py-4 relative">
            <a href="landingpage.html">
                <img src="/images/blonded-logo.png" alt="Logo" class="w-24">
            </a>
            <div class="absolute right-0 flex space-x-4">
                <a href="">
                    <img src="images/icons/shopping-bag 1.png" alt="" class="w-6 h-6">
                </a>
                <a href="">
                    <img src="images/icons/user.png" alt="" class="w-6 h-6">
                </a>
            </div>
        </div>

        <!-- Back Link -->
        <a href="/landingpage" class="text-white text-sm underline">
            Back
        </a>

        <!-- Spotify Embed -->
        <iframe style="border-radius:12px" 
            src="https://open.spotify.com/embed/album/3mH6qwIy9crq0I9YQbOuDf?utm_source=generator" 
            width="100%" height="500" 
            frameborder="0" 
            allowfullscreen 
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
            loading="lazy" 
            class="mt-5">
        </iframe>
    </div>
</body>

</html>
