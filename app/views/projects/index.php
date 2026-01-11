<section class="container mx-auto px-4 mt-[28%] lg:mt-[12%]">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Projets de recherche</h2>
  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($projects as $p): ?>
      <div class="group bg-white shadow rounded-lg overflow-hidden flex flex-col transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-transparent hover:border-blue-100">
        
        <div class="overflow-hidden">
          <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['photo_path'], ENT_QUOTES) ?>" 
               alt="<?= htmlspecialchars($p['title'], ENT_QUOTES) ?>" 
               class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
        </div>

        <div class="p-4 flex flex-col flex-grow">
          <h3 class="text-xl font-semibold mb-1"><?= htmlspecialchars($p['title'], ENT_QUOTES) ?></h3>
          <p class="text-gray-600 text-sm mb-2">Coordinateur(s):<br><?= $p['coordinators'] ?></p>
          <p class="text-gray-600 mb-4">Statut: <?= htmlspecialchars($p['status'], ENT_QUOTES) ?></p>
          
          <div class="mt-auto">
            <a href="<?= config('base_url') ?>/project/show/<?= $p['id'] ?>" 
               class="inline-block px-4 py-2 bg-lapit-lightblue text-white rounded hover:bg-lapit-darkblue transition-colors duration-300">
              En savoir plus
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>