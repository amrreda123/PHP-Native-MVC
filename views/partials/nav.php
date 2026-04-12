<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="/" aria-current="page" class="<?= active('/') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
            <a href="/about" class="<?= active('/about') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
            <?php if(isset($_SESSION['user'])): ?>
            <a href="/notes" class="<?= active('/notes') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Notes</a>
            <?php endif; ?>
            <a href="/contact" class="<?= active('/contact') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <?php if(isset($_SESSION['user'])): ?>
            <div class="ml-3">
              <form action="/session" method="post">
                <input type="hidden" name="_method" value="delete">
                <button class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Logout</button>
              </form>
            </div>
          <?php else: ?>
            <a href="/register" class="<?= active('/register') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Register</a>
            <a href="/login" class="<?= active('/login') ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
</nav>