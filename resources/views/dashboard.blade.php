<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .dark .bg-light { background-color: #1f2937; }
        .dark .text-light { color: #d1d5db; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-800 min-h-screen">
    <!-- Dashboard Container -->
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-indigo-200 to-indigo-500 dark:bg-gray-900 p-4">
            <h2 class="text-3xl font-bold text-orange-700 dark:text-white mb-8">📚 My Bookshelf</h2>
            <nav class="space-y-4">
                <a href="#" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Manage Books</a>
                <a href="/profile" method="GET" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Profile</a>
                <a href="#" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow p-8 bg-gray-100 dark:bg-light">
            <!-- Dashboard Header -->
            <header class="flex items-center justify-between mb-8">
                <h1 class="text-4xl font-extrabold text-orange-700 dark:text-white">Welcome, Book Lover!</h1>
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Logout
                    </button>
                </form>
            </header>

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Main Dashboard Content -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Total Books -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Total Books</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">{{ count($books) }}</p>
                </div>
                <!-- Card 2: Books Read This Month (placeholder data, can be dynamic) -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Books Read This Month</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">5</p> <!-- Update dynamically if needed -->
                </div>
                <!-- Card 3: Favorite Genre (placeholder data, can be dynamic) -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Favorite Genre</h3>
                    <p class="text-2xl font-bold text-gray-800 dark:text-light">Fantasy</p> <!-- Update dynamically if needed -->
                </div>
            </section>

            <!-- Add New Book Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 mx-auto mt-8">
                <h2 class="text-2xl font-bold mb-4">Add a New Book</h2>
                <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="title" class="block font-medium">Title</label>
                        <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label for="genre" class="block font-medium">Genre</label>
                        <input type="text" id="genre" name="genre" class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div>
                        <label for="description" class="block font-medium">Description</label>
                        <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded"></textarea>
                    </div>
                    <div>
                        <label for="status" class="block font-medium">Status</label>
                        <select id="status" name="status" class="w-full p-2 border border-gray-300 rounded" required>
                            <option value="read">Read</option>
                            <option value="currently_reading">Currently Reading</option>
                            <option value="want_to_read">Want to Read</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        Add Book
                    </button>
                </form>
            </div>

            <!-- Display Books -->
            <section class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Your Books</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($books as $book)
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <h3 class="text-xl font-bold">{{ $book->title }}</h3>
                            <p class="text-sm text-gray-600">{{ $book->genre }}</p>
                            <p class="mt-2 text-gray-800">{{ $book->description }}</p>
                            <span class="block mt-4 px-2 py-1 text-xs font-semibold bg-green-200 rounded-full">{{ $book->status }}</span>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</body>
</html>