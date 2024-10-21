<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
      
  </head>
<body class="bg-gradient-to-br from-white to-white min-h-screen flex items-center justify-center py-12"></body>
    <!-- Profile Card -->
    <div class="bg-white shadow-xl rounded-lg overflow-hidden w-full max-w-3xl border border-whiet">
        <!-- Header with Bookshelf Illustration -->
        <div class="bg-indigo-600 p-6 flex justify-between items-center">
            <div>
                <h1 class="text-4xl font-bold text-white">User name</h1>
                <p class="text-white">useremail@example.com</p>
            </div>
            <div class="text-white text-3xl">📚</div>
        </div>

        <!-- Profile Content -->
        <div class="py-8 px-6 space-y-8 bg-white">
            <!-- Favorite Books Section -->
            <div>
                <h2 class="text-2xl font-semibold text-indigo-600 mb-4">Favourites</h2>

                <div class="grid grid-cols-3 gap-4">
                    <!-- Book Card 1 -->
                    <div class="bg-indigo-50 border border-white-300 rounded-lg p-4 flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x150" alt="Book cover" class="mb-4 rounded-lg shadow-md" />
                        <h3 class="text-lg font-medium text-orange-800 text-center">"To Kill a Mockingbird"</h3>
                        <p class="text-sm text-gray-600 text-center">by Harper Lee</p>
                    </div>
                    <!-- Book Card 2 -->
                    <div class="bg-indigo-50 border border-white-300 rounded-lg p-4 flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x150" alt="Book cover" class="mb-4 rounded-lg shadow-md" />
                        <h3 class="text-lg font-medium text-orange-800 text-center">"1984"</h3>
                        <p class="text-sm text-gray-600 text-center">by George Orwell</p>
                    </div>
                    <!-- Book Card 3 -->
                    <div class="bg-indigo-50 border border-white-300 rounded-lg p-4 flex flex-col items-center">
                        <img src="https://via.placeholder.com/100x150" alt="Book cover" class="mb-4 rounded-lg shadow-md" />
                        <h3 class="text-lg font-medium text-orange-800 text-center">"The Great Gatsby"</h3>
                        <p class="text-sm text-gray-600 text-center">by F. Scott Fitzgerald</p>
                    </div>
                </div>
            </div>

            <!-- Personal Info -->
            <div>
                <h3 class="text-xl font-medium text-orange-700 mb-2">About Me</h3>
                <p class="text-gray-700">Avid reader, lover of classic literature, and always on the lookout for a good story. I love cozy evenings with a cup of tea and a great book.</p>
            </div>

            <!-- Favorite Genres -->
            <div>
                <h3 class="text-xl font-medium text-orange-700 mb-2">Favorite Genres</h3>
                <p class="text-gray-700">Classics, Fiction, Historical Fiction, Mystery</p>
            </div>

            <!-- Reading Goal -->
            <div>
                <h3 class="text-xl font-medium text-orange-700 mb-2">Reading Goal</h3>
                <p class="text-gray-700">Read 50 books this year</p>
            </div>
        </div>

        <!-- Buttons for editing profile, viewing the reading list -->
        <div class="bg-indigo-600 p-4 flex justify-between items-center">
            <button class="bg-indigo-500 text-white py-2 px-6 rounded-lg hover:bg-yellow-600">Edit Profile</button>
            <button class="bg-white text-black py-2 px-6 rounded-lg hover:bg-orange-700 hover:text-white">View Reading List</button>
        </div>
    </div>
</body>
</html>