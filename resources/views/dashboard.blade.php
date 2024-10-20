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
                <a href="/profile" method="GET" class="block text-lg text-gray-700 dark:text-light hover:text-orange-700">Profile</a>
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
                <!-- Logout Button -->
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button
              type="submit"
              class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700"
            >
              Logout
            </button>
          </form>
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

            <!-- Add New Book Button used from layouts - bookshelf.blade.php -->
<div x-data="bookDashboard()" class="container mx-auto p-6">
  <div class="flex flex-col">
    <!-- Form to add a book -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 mb-4"> <!-- Adjusted width and margin -->
      <h2 class="text-2xl font-bold mb-4">Add a New Book</h2>
      <form @submit.prevent="addBook" class="space-y-4">
        <div>
          <label for="title" class="block font-medium">Title</label>
          <input
            x-model="newBook.title"
            type="text"
            id="title"
            class="w-full p-2 border border-gray-300 rounded"
          />
        </div>
        <div>
          <label for="genre" class="block font-medium">Genre</label>
          <input
            x-model="newBook.genre"
            type="text"
            id="genre"
            class="w-full p-2 border border-gray-300 rounded"
          />
        </div>
        <div>
          <label for="description" class="block font-medium">Description</label>
          <textarea
            x-model="newBook.description"
            id="description"
            class="w-full p-2 border border-gray-300 rounded"
          ></textarea>
        </div>
        <div>
          <label for="status" class="block font-medium">Status</label>
          <select
            x-model="newBook.status"
            id="status"
            class="w-full p-2 border border-gray-300 rounded"
          >
            <option value="Reading">Reading</option>
            <option value="Completed">Completed</option>
            <option value="Wishlist">Want to read</option>
          </select>
        </div>
        <button
          type="submit"
          class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600"
        >
          Add Book
        </button>
      </form>
    </div>

    <!-- Dashboard displaying book cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <template x-for="(book, index) in books" :key="index">
        <div class="bg-white p-4 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold" x-text="book.title"></h3>
          <p class="text-sm text-gray-600" x-text="book.genre"></p>
          <p class="mt-2 text-gray-800" x-text="book.description"></p>
          <span
            class="block mt-4 px-2 py-1 text-xs font-semibold bg-green-200 rounded-full"
            x-text="book.status"
          ></span>
        </div>
      </template>
    </div>
  </div>
</div>

<script>
  function bookDashboard() {
    return {
      newBook: {
        title: "",
        genre: "",
        description: "",
        status: "Reading",
      },
      books: [],
      addBook() {
        if (
          this.newBook.title &&
          this.newBook.genre &&
          this.newBook.description
        ) {
          this.books.push({ ...this.newBook });
          this.newBook = {
            title: "",
            genre: "",
            description: "",
            status: "Reading",
          };
        }
      },
    };
  }
</script>

      
           

                    
          
            </div>
        </div>
    </div>
</body>
</html>