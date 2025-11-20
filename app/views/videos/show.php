<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6"><?= htmlspecialchars($album['title'], ENT_QUOTES) ?></h2>
  <div class="space-y-6">
    <?php foreach($videos as $v): ?>
      <div class="bg-white shadow rounded-lg overflow-hidden">
        <iframe class="w-full h-64"
                src="<?= htmlspecialchars($v['video_url'], ENT_QUOTES) ?>"
                frameborder="0" allowfullscreen>
        </iframe>
        <?php if(!empty($v['caption'])): ?>
          <div class="p-4">
            <p class="text-gray-600 text-sm"><?= htmlspecialchars($v['caption'], ENT_QUOTES) ?></p>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>

