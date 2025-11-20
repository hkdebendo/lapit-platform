<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Photothèque</h2>
  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($albums as $a): ?>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($a['cover_photo_path'], ENT_QUOTES) ?>" 
             alt="<?= htmlspecialchars($a['title'], ENT_QUOTES) ?>" 
             class="w-full h-48 object-cover">
        <div class="p-4 text-center">
          <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($a['title'], ENT_QUOTES) ?></h3>
          <a href="<?= config('base_url') ?>/photos/show/<?= $a['id'] ?>" 
             class="inline-block px-4 py-2 bg-lapit-lightblue text-white rounded hover:bg-lapit-darkblue transition">
            Voir l’album
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
