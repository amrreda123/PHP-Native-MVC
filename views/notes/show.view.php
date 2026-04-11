<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/notes" class="inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500 transition">
                <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to all notes
            </a>
        </div>

        <div class="bg-white shadow sm:rounded-lg overflow-hidden border border-gray-200">
            <div class="px-4 py-5 sm:p-6">
                <div class="prose max-w-none text-gray-800 text-lg leading-relaxed">
                    <?= nl2br(htmlspecialchars($note['body'])) ?>
                </div>

                <div class="mt-6 border-t border-gray-100 pt-4 flex items-center justify-between">
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="mr-1.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Created on <?= date("F j, Y", strtotime($note['created_at'])) ?>
                    </div>

                    <form method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $note['id'] ?>">
                        <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none transition">
                            <svg class="mr-1 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete Note
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="mt-4 flex justify-end">
             <a href="/note/edit?id=<?= $note['id'] ?>" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition">Edit this note</a>
        </div>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>