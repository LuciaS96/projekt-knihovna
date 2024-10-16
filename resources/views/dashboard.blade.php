<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
       dark .bg-light { background-color: #1f2937; }
        .dark .text-light { color: #d1d5db; }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-800 min-h-screen"></body>
    <!-- Dashboard Container -->
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-indigo-200 to-indigo-500 dark:bg-gray-900 p-4">
            <h2 class="text-3xl font-bold text-orange-700 dark:text-white mb-8">📚 My Bookshelf</h2>
            <nav class="space-y-4">
                <a href="#" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Manage Books</a>
                <a href="#" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Profile</a>
                <a href="#" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow p-8 bg-gray-100 dark:bg-light">
            <!-- Dashboard Header -->
            <header class="flex items-center justify-between mb-8">
                <h1 class="text-4xl font-extrabold text-orange-700 dark:text-white">Welcome, Book Lover!</h1>

                <!-- Dark Mode Toggle - not sure if I am going to add it yet.
                <button @click="darkMode = !darkMode" class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white px-4 py-2 rounded-md">
                    <span x-show="!darkMode">🌙 Dark Mode</span>
                    <span x-show="darkMode">☀️ Light Mode</span>
                </button>
                -->

            </header>

            <!-- Main Dashboard Content -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Total Books -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Total Books</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">45</p>
                </div>

                <!-- Card 2: Books Read This Month -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Books Read This Month</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">5</p>
                </div>

                <!-- Card 3: Favorite Genre -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Favorite Genre</h3>
                    <p class="text-2xl font-bold text-gray-800 dark:text-light">Fantasy</p>
                </div>
            </section>

          <div x-data="{ showModal: false }" class="p-8">
    <!-- Add New Book Button -->
    <div class="mt-8">
        <button @click="showModal = true" class="bg-orange-600 text-white px-6 py-3 rounded-md hover:bg-orange-700">
            + Add New Book
        </button>
    </div>

    <!-- Modal -->
    <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50" 
         @click.away="showModal = false" x-transition>
        <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-bold text-orange-700 dark:text-white mb-4">Add a New Book</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-gray-700 dark:text-light font-semibold mb-2" for="bookTitle">Book Title</label>
                    <input id="bookTitle" type="text" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md" placeholder="Enter book title">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-light font-semibold mb-2" for="bookGenre">Genre</label>
                    <input id="bookGenre" type="text" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md" placeholder="Enter genre">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-light font-semibold mb-2" for="bookStatus">Status</label>
                    <select id="bookStatus" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md">
                        <option value="reading">Currently Reading</option>
                        <option value="read">Read</option>
                        <option value="want-to-read">Want to Read</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" @click="showModal = false" class="px-4 py-2 bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-white rounded-md hover:bg-gray-400 dark:hover:bg-gray-700">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</body>

</html>