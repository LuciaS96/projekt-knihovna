<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://unpkg.com/alpinejs" defer></script>
  </head>

  <body>
   
    <!-- Login Form Section -->
    <section class="flex items-center justify-center py-12 my-14">
      <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">
          Login to Your Account
        </h2>
        <form action="/login" method="POST" class="space-y-6">
          @csrf

          <div>
            <label for="email" class="block text-gray-700">Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600"
            />
          </div>
          <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600"
            />
          </div>
          <div class="flex items-center justify-between">
            <div>
              <label class="inline-flex items-center">
                <input
                  type="checkbox"
                  class="text-indigo-600 focus:ring-indigo-500"
                  name="remember"
                />
                <span class="ml-2 text-gray-600">Remember me</span>
              </label>
            </div>

            
          </div>
          <button
            type="submit"
            class="w-full px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600"
          >
            Login
          </button>
        </form>
        <p class="mt-6 text-center text-gray-600">
          Don't have an account?
          <a href="/register" class="text-indigo-600 hover:underline"
            >Sign up</a
          >
        </p>
      </div>
    </section>


    <div class="flex items-center justify-center py-8 ">
    <a href="/landing"
        class="px-12 py-3 text-white bg-indigo-600 rounded-full hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600"
        >ReadR
    </a>
    </div>
        

    <!-- Footer class="bg-indigo-600 py-12"-->
    <footer ></footer>
  </body>
</html>