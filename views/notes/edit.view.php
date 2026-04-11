<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Note</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Update your note. Everything is private to you.
                    </p>
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" class="shadow sm:rounded-md overflow-hidden" action="/note">
                    
                    <input type="hidden" name="_method" value="PATCH">
                    
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">

                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="body" class="block text-sm font-medium text-gray-700">Your Note</label>
                                <div class="mt-1">
                                    <textarea 
                                        id="body" 
                                        name="body" 
                                        rows="5" 
                                        class="block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm <?= isset($errors['body']) ? 'border-red-500' : 'border-gray-300' ?>" 
                                        placeholder="What's on your mind?"><?= $_POST['body'] ?? $note['body'] ?></textarea>

                                    <?php if (isset($errors['body'])) : ?>
                                        <p class="text-red-500 text-xs mt-2 flex items-center">
                                            <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            <?= $errors["body"] ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Maximum 1,000 characters.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex justify-end gap-x-4">
                        <a href="/notes" class="inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none">
                            Cancel
                        </a>
                        
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>