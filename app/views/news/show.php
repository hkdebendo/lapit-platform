<section class="container mx-auto px-4 py-8 max-w-3xl">
  <h2 class="text-3xl font-bold text-gray-800 mb-4"><?= htmlspecialchars($news['title'], ENT_QUOTES) ?></h2>
  <p class="text-gray-500 text-sm mb-6">Publié le <?= date('d/m/Y', strtotime($news['date_posted'])) ?></p>
  <?php if(!empty($news['photo_path'])): ?>
    <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($news['photo_path'], ENT_QUOTES) ?>"
         alt="<?= htmlspecialchars($news['title'], ENT_QUOTES) ?>"
         class="w-full h-64 object-cover mb-6 rounded">
  <?php endif; ?>
  <div class="prose prose-lg">
    <?= nl2br(htmlspecialchars($news['content_full'], ENT_QUOTES)) ?>
  </div>
</section>


