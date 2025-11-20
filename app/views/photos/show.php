<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6"><?= htmlspecialchars($album['title'], ENT_QUOTES) ?></h2>
  <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    <?php foreach($photos as $p): ?>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['photo_path'], ENT_QUOTES) ?>" 
             alt="<?= htmlspecialchars($p['caption'] ?? '', ENT_QUOTES) ?>" 
             class="w-full h-40 object-cover">
        <?php if(!empty($p['caption'])): ?>
          <div class="p-2">
            <p class="text-gray-600 text-sm"><?= htmlspecialchars($p['caption'], ENT_QUOTES) ?></p>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
