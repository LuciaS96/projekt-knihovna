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

           
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Main Dashboard Content -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Total Books</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">{{ count($books) }}</p>
                </div>
                
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Books Read This Month</h3>
                    <p class="text-4xl font-bold text-gray-800 dark:text-light">{{ count($books) }}</p> 
                </div>
             
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-orange-700 dark:text-white mb-4">Favorite Genre</h3>
                    <p class="text-2xl font-bold text-gray-800 dark:text-light">Fantasy</p> 
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
                        
                         <!-- edit and delete icons in book car -->
                <div class="mt-4 flex space-x-2">
                    <!-- icon for editing book card - pen -->
                    <button 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" 
                        onclick="openEditForm({{ $book->id }}, '{{ $book->title }}', '{{ $book->genre }}', '{{ $book->description }}', '{{ $book->status }}')">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>

                    </button>

                    <!-- delete icon for deleting the book card - bin-->
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>

                        </button>
                    </form>
                </div>
            
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</body>
</html>