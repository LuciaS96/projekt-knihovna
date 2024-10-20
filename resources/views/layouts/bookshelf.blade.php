<!-- resources/views/layouts/bookshelf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Dashboard</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Main container -->
    <div class="container mx-auto p-6">
        <!-- Content from child views will be injected here -->
        @yield('content')
    </div>

    <script>
        function bookDashboard() {
            return {
                newBook: {
                    title: '',
                    genre: '',
                    description: '',
                    status: 'Reading'
                },
                books: [],
                addBook() {
                    if (this.newBook.title && this.newBook.genre && this.newBook.description) {
                        this.books.push({...this.newBook});
                        this.newBook = { title: '', genre: '', description: '', status: 'Reading' };
                    }
                }
            }
        }
    </script>

</body>
</html>

