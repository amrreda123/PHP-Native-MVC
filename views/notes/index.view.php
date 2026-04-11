<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
                <?php if (count($notes) > 0): ?>
                    <?php foreach($notes as $note): ?>
                        <li>
                            <a href="/note?id=<?= $note['id'] ?>" class="block hover:bg-gray-50 transition duration-150 ease-in-out">
                                <div class="px-4 py-4 sm:px-6 flex items-center justify-between">
                                    <p class="text-sm font-medium text-blue-600 truncate">
                                        <?= htmlspecialchars($note['body']) ?>
                                    </p>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            View Note
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="px-4 py-10 text-center text-gray-500">
                        No notes found. Start by creating one!
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="mt-8">
            <a href="/notes/create" 
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Create New Note
            </a>
        </div>

    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>