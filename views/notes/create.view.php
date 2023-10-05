<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

  <main class="">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->

          <div class="md:grid md:grid-cols-3 md:gap-4">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/notes">
                  <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">

                          <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?php if (isset($_POST['body'])) { echo $_POST['body']; } else {echo'';} ?></textarea>
                        </div>
                        <?php if (isset($errors['body'])) : ?>
                          <p class="mt-3 text-xs text-red-600">
                            <?= $errors['body'] ?>
                          </p>
                        <?php endif; ?>
                      </div>
                  <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/notes" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                  </div>
            </form>
            </div>
          </div>
    </div>
  </main>

<?php require base_path('views/partials/footer.php'); ?>