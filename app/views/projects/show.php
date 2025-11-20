<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-6"><?= htmlspecialchars($project['title'], ENT_QUOTES) ?></h2>
  <div class="bg-white shadow rounded-lg overflow-hidden mb-6">
    <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($project['photo_path'], ENT_QUOTES) ?>" 
         alt="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>" 
         class="w-full h-60 object-cover">
    <div class="p-6 space-y-4">
      <p><strong>Coordinateur(s):</strong><br><?= $project['coordinators'] ?></p>
      <p><strong>Équipe:</strong><br><?= $project['team'] ?></p>
      <p><strong>Date de début:</strong> <?= htmlspecialchars($project['start_date'], ENT_QUOTES) ?></p>
      <p><strong>Date de fin:</strong> <?= htmlspecialchars($project['end_date'] ?? 'En cours', ENT_QUOTES) ?></p>
      <p><strong>Financement:</strong> <?= htmlspecialchars($project['financing'], ENT_QUOTES) ?></p>
      <p><strong>Statut:</strong> <?= htmlspecialchars($project['status'], ENT_QUOTES) ?></p>
      <?php if(!empty($project['video_url'])): ?>
        <div class="mt-4">
          <iframe width="100%" height="400" src="<?= htmlspecialchars($project['video_url'], ENT_QUOTES) ?>" 
                  frameborder="0" allowfullscreen></iframe>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="bg-white shadow rounded-lg p-6">
    <h3 class="text-2xl font-semibold mb-4">Description</h3>
    <p class="text-gray-700 leading-relaxed"><?= nl2br(htmlspecialchars($project['description_full'], ENT_QUOTES)) ?></p>
  </div>
</section>

