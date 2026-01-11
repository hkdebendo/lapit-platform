<section class="container mx-auto px-4 lg:mt-[10%] mt-[20%] py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Actualités</h2>
  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($newsList as $n): ?>
      <div class="group bg-white shadow rounded-lg overflow-hidden flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-transparent hover:border-blue-100">
        
        <div class="overflow-hidden">
          <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($n['photo_path'], ENT_QUOTES) ?>"
               alt="<?= htmlspecialchars($n['title'], ENT_QUOTES) ?>"
               class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
        </div>

        <div class="p-4 flex flex-col flex-grow">
          <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($n['title'], ENT_QUOTES) ?></h3>
          <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($n['summary'], ENT_QUOTES) ?></p>
          <p class="text-gray-500 text-xs mb-4">Le <?= date('d/m/Y', strtotime($n['date_posted'])) ?></p>
          
          <div class="mt-auto">
            <a href="<?= config('base_url') ?>/news/show/<?= $n['id'] ?>"
               class="inline-block px-4 py-2 bg-lapit-lightblue text-white rounded hover:bg-lapit-darkblue transition-colors duration-300">
              Lire la suite
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>