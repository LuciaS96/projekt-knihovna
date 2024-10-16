<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
  </head>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>ReadR - Your Personal Virtual Bookshelf</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="//unpkg.com/alpinejs" defer></script>

    </head>
    <body class="bg-gray-100">
    

      <!--<section class="w-full px-6 pb-12 antialiased bg-white"></section> -->
    <div class="mx-auto max-w-7xl">

        <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
                <div class="flex items-center justify-start w-1/4 h-full pr-4">
                            
                       
                       
                </div>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                        <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">
                            <svg class="w-auto h-5" viewBox="0 0 355 99" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M119.1 87V66.4h19.8c34.3 0 34.2-49.5 0-49.5-11 0-22 .1-33 .1v70h13.2zm19.8-32.7h-19.8V29.5h19.8c16.8 0 16.9 24.8 0 24.8zm32.6-30.5c0 9.5 14.4 9.5 14.4 0s-14.4-9.5-14.4 0zM184.8 87V37.5h-12.2V87h12.2zm22.8 0V61.8c0-7.5 5.1-13.8 12.6-13.8 7.8 0 11.9 5.7 11.9 13.2V87h12.2V61.1c0-15.5-9.3-24.2-20.9-24.2-6.2 0-11.2 2.5-16.2 7.4l-.8-6.7h-10.9V87h12.1zm72.1 1.3c7.5 0 16-2.6 21.2-8l-7.8-7.7c-2.8 2.9-8.7 4.6-13.2 4.6-8.6 0-13.9-4.4-14.7-10.5h38.5c1.9-20.3-8.4-30.5-24.9-30.5-16 0-26.2 10.8-26.2 25.8 0 15.8 10.1 26.3 27.1 26.3zM292 56.6h-26.6c1.8-6.4 7.2-9.6 13.8-9.6 7 0 12 3.2 12.8 9.6zm41.2 32.1c14.1 0 21.2-7.5 21.2-16.2 0-13.1-11.8-15.2-21.1-15.8-6.3-.4-9.2-2.2-9.2-5.4 0-3.1 3.2-4.9 9-4.9 4.7 0 8.7 1.1 12.2 4.4l6.8-8c-5.7-5-11.5-6.5-19.2-6.5-9 0-20.8 4-20.8 15.4 0 11.2 11.1 14.6 20.4 15.3 7 .4 9.8 1.8 9.8 5.2 0 3.6-4.3 6-8.9 5.9-5.5-.1-13.5-3-17-6.9l-6 8.7c7.2 7.5 15 8.8 22.8 8.8z" id="a"></path></defs><g fill="none" fill-rule="evenodd"><g fill="currentColor"><path d="M19.742 49h28.516L68 83H0l19.742-34z"></path><path d="M26 69h14v30H26V69zM4 50L33.127 0 63 50H4z"></path></g><g fill-rule="nonzero"><use fill="currentColor" xlink:href="#a"></use><use fill="currentColor" xlink:href="#a"></use></g></g></svg>
                        </a>
                        <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a href="#_" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Features</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Blog</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">Contact</a>
                            <a href="#_" class="absolute top-0 left-0 hidden py-2 mt-6 ml-10 mr-2 text-gray-600 lg:inline-block md:mt-0 md:ml-2 lg:mx-3 md:relative">
                                <svg class="inline w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </a>
                        </div>
                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <a href="/login" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">Sign In</a>
                            <a href="/register" class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-gray-900 md:w-auto md:rounded-full hover:bg-gray-800 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
        </nav>

        <!-- Main Hero Content -->
        <div class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
            <h1 class="text-3xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-7xl lg:text-8xl"> ReadR </h1> <br class="hidden sm:block"> <h1 class="text-xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-xl lg:text-4xl"">Your Personal Virtual Bookshelve</h1>
            <div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">Organize, track, and enjoy your book collection in one place.!</div>
            <div class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="/register" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                        Register
                    </a>
                </span>
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="/login" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">Log in</a>
                </span>
            </div>
        </div>
      

    </div>
</section>

         <!-- Story Section -->
<section class="bg-indigo-600 text-white py-20 text-center" x-data="{ modalOpen: false }">
    <h1 class="text-4xl font-bold mb-4">The Story Behind ReadR</h1>
    <p class="text-xl mb-8 italic px-14 py-6">
        "Books have always been a constant companion in my life, but keeping them organized and tracking my progress felt like a chore. I wanted to create something that not only simplified this process but made it enjoyable. ReadR is designed with the reader in mind, offering an intuitive and personalized way to manage your literary adventures. I'm excited for you to make it your own!"
        — Lucia, Founder of ReadR
    </p>
    <button @click="modalOpen = true" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100">Our story</button>

    <!-- Modal -->
    <div x-show="modalOpen" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
        <div class="fixed inset-0 bg-black opacity-50" @click="modalOpen = false"></div>
        <div class="bg-white rounded-lg shadow-lg p-6 z-10">
            <h2 class="text-2xl font-bold mb-4">Our Story</h2>
            <p class="text-gray-700 mb-4">
                Lucia had always been a bookworm, her small apartment overflowing with paperbacks and hardcovers. One day, after tripping over yet another pile of books, an idea sparked in her mind. What if she could create a web app—a virtual bookshelf where her entire collection could be neatly organized, easy to browse, and always available?
            </p>
            <p class="text-gray-700 mb-4">
                Excited, Lucia dusted off her coding skills and got to work. She imagined a sleek, interactive interface where users could scroll through book covers, click on them for details, and even leave personal reviews. It had to be clean, easy to navigate, and most importantly, reflect her deep love for literature.
            </p>
            <p class="text-gray-700 mb-4">
                She began by crafting the front-end using HTML, CSS, and Tailwind. The app’s design was simple yet elegant, each genre represented by a colourful row of book covers. Tailwind’s utility classes helped her create a responsive layout, making sure the virtual bookshelf looked perfect on any device.
            </p>
            <p class="text-gray-700 mb-4">
                The real challenge was making it more than just a static page. She wanted users to be able to add books, search through collections, and save notes about their favourite reads. So, Lena learned how to implement a database and connected it to her web app. Soon, users could log in, add books, and personalize their shelves.
            </p>
            <p class="text-gray-700 mb-4">
                She added small touches—a search bar with auto-suggestions, a "Read Next" feature that recommended books based on a user’s reading history, and an interactive filter to sort by genre, author, or rating. With each feature, her virtual bookshelf grew more dynamic.
            </p>
            <p class="text-gray-700 mb-4">
                After months of coding, testing, and refining, Lena’s virtual bookshelf was alive. What started as a simple project to solve her overflowing book problem became a fully functional web app, where books could be added, explored, and shared with others. The app was everything she’d hoped for—a digital library that grew as her love for reading did, limitless and always accessible.
            </p>
            <button @click="modalOpen = false" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Close</button>
        </div>
    </div>
</section>


      <!-- Features Section -->
      <section class="py-16 max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Why Use ReadR?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <div class="p-6 bg-white rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-2">Add Your Books</h3>
            <p class="text-gray-600">
              Easily add books to your shelf with just a few clicks.
            </p>
          </div>
          <div class="p-6 bg-white rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-2">Organize Your Shelf</h3>
            <p class="text-gray-600">
              Group your books by genres, authors, or custom shelves.
            </p>
          </div>
          <div class="p-6 bg-white rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-2">Track Your Progress</h3>
            <p class="text-gray-600">
              See how far you've come in your reading journey.
            </p>
          </div>
        </div>
      </section>

      <!--Image section-->
      <section class="flex justify-center pb-16">
        <img src="./images/rusticshelve.JPG" alt="rusticshelve" class="" />
      </section>

      <!-- How It Works Section
      <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-6">How It Works</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
              <h3 class="text-xl font-bold mb-2">1. Create an Account</h3>
              <p class="text-gray-600">Sign up in just a few seconds.</p>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2">2. Add Books</h3>
              <p class="text-gray-600">
                Start building your virtual bookshelf.
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2">3. Track Your Reading</h3>
              <p class="text-gray-600">Keep track of your reading progress.</p>
            </div>
          </div>
        </div>
      </section>
       -->

      <!-- Call to Action Section -->
      <section class="bg-indigo-600 text-white py-16 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Build Your Shelf?</h2>
        <a
          href="/register"
          class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-bold hover:bg-gray-100"
          >Sign Up Now</a
        >
      </section>

      <!-- Footer -->
      <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto text-center">
          
      <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
        </div>
    
</div> 

      </footer>
    </body>
  </html>
</html>