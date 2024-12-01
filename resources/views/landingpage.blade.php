<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-fixed overflow-x-hidden" style="background-image: url('/images/background.png');">
    <div class="container mx-auto">
        <!-- Navbar -->
        <div class="flex items-center justify-center py-4 relative">
            <h1>
                <a href="/landingpage">
                    <img src="/images/blonded-logo.png" alt="Logo" id="logo" class="mx-auto mb-8">
                </a>
            </h1>
            <div class="absolute right-0 flex items-center gap-4">
                <a href="/cart" class="relative text-white group">
                    <img src="/images/icons/shopping-bag 1.png" alt="Shopping Bag" class="h-6">
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-1 rounded-full">0</span>
                    
                    <!-- Tooltip atau dropdown yang muncul ketika hover -->
                    <div class="absolute z-10 hidden group-hover:block bg-white text-black shadow-lg rounded mt-2 p-4">
                        <p class="text-sm">Tidak ada produk di keranjang.</p>
                        <!-- Jika ada produk, bisa ditambahkan disini -->
                    </div>
                </a>
                </a>
                <a href="#modal-user" class="text-white">
                    <img src="/images/icons/user.png" alt="User" class="h-6">
                </a>
            </div>
        </div>
    </div>
</body>


        <!-- Tabs -->
        <div class="flex flex-col items-center">
            <ul class="flex space-x-4 border-none">
                <li>
                    <a href="#all-tab-pane" class="text-white opacity-50 hover:opacity-100 transition" role="tab" aria-selected="true">All</a>
                </li>
                <li>
                    <a href="#album-tab-pane" class="text-white opacity-50 hover:opacity-100 transition" role="tab" aria-selected="false">Album</a>
                </li>
                <li>
                    <a href="#photo-tab-pane" class="text-white opacity-50 hover:opacity-100 transition" role="tab" aria-selected="false">Photo</a>
                </li>
                <li>
                    <a href="/video" class="text-white opacity-50 hover:opacity-100 transition" role="tab" aria-selected="false">Video</a>
                </li>
            </ul>

            <div class="tab-content mt-5" id="myTabContent">


  <!-- All Tab -->
<div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        @foreach ($products as $product)
        <!-- Product -->
        <div class="flex flex-col items-center space-y-3 p-4 group relative">
            <div class="relative w-full">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full">
                
                <!-- Layer hitam dengan tautan -->
                <a href="#" 
                   class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Add to Cart</span>
                </a>
            </div>
            <p class="text-center text-white text-sm w-3/4">
                {{ $product->description }}
            </p>
        </div>
        @endforeach
    </div>
</div>


            
                        
                    
                        <!-- YouTube Video -->
                        <<iframe style="border-radius:12px" src="https://www.youtube.com/embed/mXiFHDfvn4A?si=nFeBvb1P3jfMGQ3U" width="100%" height="500" frameborder="0" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy" class="mt-5"></iframe>
                    </div>
                    </div>
                </div>


                <!-- Album Tab -->
<div class="tab-pane fade" id="album-tab-pane" role="tabpanel" aria-labelledby="album-tab" tabindex="0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <!-- Album 1 -->
        <div class="flex flex-col items-center space-y-3 p-4 group relative">
            <div class="relative w-full">
                <img src="images/albums/image 7.png" alt="" class="w-full">
                
                <!-- Layer hitam dengan tautan -->
                <a href="/blonded" 
                   class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Want Listen?</span>
                </a>
            </div>
            <p class="text-center text-sm text-white">
                BLOND FRANK OCEAN A SIDE ACOUSTIC ALL RIGHTS RESERVED, COPYRIGHT 2019
            </p>
        </div>

        <!-- Album 2 -->
        <div class="flex flex-col items-center space-y-3 p-4 group relative">
            <div class="relative w-full">
                <img src="images/albums/image 8 (1).png" alt="" class="w-full">
                
                <!-- Layer hitam dengan tautan -->
                <a href="/endless" 
                   class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Want Listen?</span>
                </a>
            </div>
            <p class="text-center text-sm text-white">
                BLOND FRANK OCEAN A SIDE ACOUSTIC ALL RIGHTS RESERVED, COPYRIGHT 2019
            </p>
        </div>

        <!-- Album 3 -->
        <div class="flex flex-col items-center space-y-3 p-4 group relative">
            <div class="relative w-full">
                <img src="images/albums/image 9 (1).png" alt="" class="w-full">
                
                <!-- Layer hitam dengan tautan -->
                <a href="/chanelorange" 
                   class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-lg font-bold">Want Listen?</span>
                </a>
            </div>
            <p class="text-center text-sm text-white">
                BLOND FRANK OCEAN A SIDE ACOUSTIC ALL RIGHTS RESERVED, COPYRIGHT 2019
            </p>
        </div>
    </div>
</div>


                <!-- Photo Tab -->
                <div class="tab-pane fade" id="photo-tab-pane" role="tabpanel" aria-labelledby="photo-tab" tabindex="0">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <img src="images/photos/image 7 (1).png" alt="" class="w-full">
                        <img src="images/photos/image 8 (2).png" alt="" class="w-full">
                        <img src="images/photos/image 9 (2).png" alt="" class="w-full">
                        <img src="images/photos/image 10 (1).png" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="flex items-center justify-center py-5 gap-4 text-opacity-50 text-white">
            <a href="#" class="hover:underline text-sm">Terms</a>
            <a href="#" class="hover:underline text-sm">Privacy</a>
            <a href="#" class="hover:underline text-sm">Help</a>
        </footer>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
