<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
              <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>

			  <?php if ($_SESSION['user'] ?? false) : ?>
              	<a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Notes</a>
			  <?php endif; ?>


              <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex md:ml-6">


			<?php if ($_SESSION['user'] ?? false) : ?>
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">

			<form action="/session" method="POST">
				<input type="hidden" name="_method" value="DELETE"/>
				<button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mx-3">Log Out</button>
			</form>



			<?php else : ?>
				<a href="/register" class="flex w-full justify-center rounded-md bg-transparent px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mx-3">Register</a>
				<a href="/login" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>

			<?php endif; ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </nav>

