<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-sm fade-in-up">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

        <form action="#">
            <!-- Username -->
            <div class="mb-5">
                <label for="username" class="block text-gray-700 text-sm mb-2">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition-all duration-300">
            </div>

            <!-- Password -->
            <div class="mb-5">
                <label for="password" class="block text-gray-700 text-sm mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition-all duration-300">
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 focus:outline-none transition-colors duration-300">
                Login
            </button>

            <!-- Forgot Password -->
            <p class="text-center text-sm mt-4 text-blue-500">
                <a href="#" class="hover:underline">Forgot Password?</a>
            </p>
        </form>
    </div>

</body>
</html>