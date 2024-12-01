<html>
<head>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: url('{{ asset('images/background.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-[#1f1f1] bg-opacity-50">
    <div class="bg-[#1f1f1f] bg-opacity-50 p-8 rounded-lg shadow-lg text-center max-w-md mx-auto">
        <img src="images/blonded-logo.png" alt="Logo" id="logo" class="mx-auto mb-8">
        <form>
            <div class="mb-4">
                <input type="text" placeholder="Username" class="w-full p-3 rounded bg-gray-300 text-white placeholder-gray-100">
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" class="w-full p-3 rounded bg-gray-300 text-white placeholder-gray-100">
            </div>
            <button
            type="submit"
        <button 
  id="tombol" 
  type="submit" 
  class="w-full p-3 rounded bg-[#30150B] text-white hover:bg-[#30150B] hover:shadow-md hover:shadow-[#30150B] transition duration-300 ease-in-out">
  Login
</button>
        </form>
        <a href='/Home' class="block mt-4 text-sm text-gray-400 hover:text-white transition duration-300 ease-in-out">continue without login</a>
    </div>

    <script>
        // "Continue without login" functionality
        document.getElementById("continue-link").addEventListener("click", function () {
            localStorage.setItem("isLoggedIn", "false");
        });
    </script>

<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>