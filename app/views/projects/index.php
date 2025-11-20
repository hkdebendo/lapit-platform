<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Projets de recherche</h2>
  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($projects as $p): ?>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['photo_path'], ENT_QUOTES) ?>" 
             alt="<?= htmlspecialchars($p['title'], ENT_QUOTES) ?>" 
             class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-1"><?= htmlspecialchars($p['title'], ENT_QUOTES) ?></h3>
          <p class="text-gray-600 text-sm mb-2">Coordinateur(s):<br><?= $p['coordinators'] ?></p>
          <p class="text-gray-600 mb-2">Statut: <?= htmlspecialchars($p['status'], ENT_QUOTES) ?></p>
          <a href="<?= config('base_url') ?>/project/show/<?= $p['id'] ?>" 
             class="inline-block mt-2 px-4 py-2 bg-lapit-lightblue text-white rounded hover:bg-lapit-darkblue transition">
            En savoir plus
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
