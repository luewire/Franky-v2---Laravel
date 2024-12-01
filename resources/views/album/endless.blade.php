<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Endless</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-fixed" style="background-image: url('../images/background.png');">
    <div class="container mx-auto px-4">
        <!-- Navbar -->
        <div class="flex items-center justify-center py-4 relative">
            <a href="/landingpage">
              <img src="images/blonded-logo.png" alt="Logo" class="w-24">
            </a>
            <div class="absolute right-0 flex space-x-4">
                <a href="">
                    <img src="images/icons/shopping-bag 1.png" alt="Shopping Bag Icon" class="w-6 h-6">
                </a>
                <a href="">
                    <img src="images/icons/user.png" alt="User Icon" class="w-6 h-6">
                </a>
            </div>
        </div>

        <!-- Back Link -->
        <a href="/landingpage" class="text-white text-sm underline">
            Back
        </a>

        <!-- SoundCloud Embed -->
        <iframe 
            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/537883152&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true" 
            width="100%" 
            height="500" 
            scrolling="no" 
            frameborder="no" 
            allow="autoplay" 
            class="mt-5 rounded-lg">
        </iframe>
        <div class="text-xs text-gray-400 mt-2">
            <a href="https://soundcloud.com/lisa-jansson-360015449" title="lisa" target="_blank" class="text-gray-400 hover:text-white">
                lisa
            </a> · 
            <a href="https://soundcloud.com/lisa-jansson-360015449/sets/endless-frank-ocean" title="endless, frank ocean" target="_blank" class="text-gray-400 hover:text-white">
                endless, frank ocean
            </a>
        </div>
    </div>
</body>

</html>
