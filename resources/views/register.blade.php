<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  
    <body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg px-8 py-10 max-w-md w-full">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-indigo-600">Create an Account</h2>
                <p class="text-gray-500 mt-2">Join ReadR and start managing your bookshelf!</p>
            </div>

            <!-- Form -->
            <form action="/register" method="POST">
                 @csrf
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 px-4 py-2 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Your Name" />
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 px-4 py-2 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="you@example.com" />
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 px-4 py-2 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter your password" />
                </div>

                <!-- Register Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full py-3 px-6 text-white bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                        Create Account
                    </button>
                </div>
            </form>

            <!-- Redirect to Login -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="/login" class="text-indigo-600 hover:underline">Log in</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>