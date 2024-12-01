<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex justify-center items-center bg-cover bg-center" style="background-image: url('{{ asset('images/background.png') }}');">
    <div class="bg-[#140F0F] bg-opacity-80 p-10 rounded-xl shadow-lg text-center w-96">
        <!-- Logo -->
        <img src="{{ asset('images/blonded-logo.png') }}" alt="Logo" id="logo" class="w-32 mx-auto opacity-90 mb-6">

        <!-- Login Form -->
        <form id="loginForm">
            <div class="mb-5">
                <input id="username" type="text" name="username" placeholder="Username" class="w-full p-4 rounded bg-gray-600 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#30150B] transition duration-200">
                <span id="errorMessage" class="text-red-500 text-sm hidden"></span>
            </div>
            <div class="mb-6 relative">
                <input id="password" type="password" name="password" placeholder="Password" class="w-full p-4 rounded bg-gray-600 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#30150B] transition duration-200">
                <button id="togglePassword" type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-[#140F0F] focus:outline-none">
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12c0 4.418 5.373 9 9 9s9-4.582 9-9-5.373-9-9-9-9 4.582-9 9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" />
                    </svg>
                </button>
            </div>            
            <button 
                id="tombol" 
                type="submit" 
                class="w-full p-4 rounded bg-[#30150B] text-white hover:bg-[#4A2C2C] hover:shadow-md transition duration-300 ease-in-out">
                Login
            </button>
        </form>
        
        <!-- Continue without login link -->
        <a href="/Home" id="continue-link" class="block mt-4 text-sm text-gray-400 hover:text-white transition duration-300 ease-in-out">
            Continue without login
        </a>
    </div>

    <script>
        // Hardcoded users for validation (for demo purposes)
        const users = [
            { username: "admin", password: "1234" },
            { username: "user", password: "abcd" }
        ];
    
        // Login logic
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault();  // Prevent form submission to Laravel backend
    
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
    
            const user = users.find(u => u.username === username && u.password === password);
    
            if (user) {
                // Store the username in localStorage
                localStorage.setItem("username", user.username);
                alert("Login successful!");
                window.location.href = "/Home";  // Redirect to /home after successful login
            } else {
                const errorMessage = document.getElementById("errorMessage");
                errorMessage.textContent = "Invalid username or password.";
                errorMessage.classList.remove("hidden");
            }
        });

        // Eye Icon Functionality for Password Toggle
        const togglePasswordButton = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        togglePasswordButton.addEventListener('click', function () {
            // Toggle the input type between password and text
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Toggle the eye icon (open/closed)
            if (type === 'password') {
                eyeIcon.setAttribute('stroke', 'currentColor');
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12c0 4.418 5.373 9 9 9s9-4.582 9-9-5.373-9-9-9-9 4.582-9 9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" />
                `;
            } else {
                eyeIcon.setAttribute('stroke', 'currentColor');
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 12s3-5 11-5 11 5 11 5-3 5-11 5-11-5-11-5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" />
                `;
            }
        });
    </script>
</body>
</html>
