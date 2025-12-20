<section class="container mx-auto px-4 py-10">

    <!-- Titre -->
    <h2 class="text-3xl font-bold text-gray-800 mb-8">
        <?= htmlspecialchars($project['title'], ENT_QUOTES) ?>
    </h2>

    <!-- Bloc principal -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

        <!-- Image du projet -->
        <div class="w-full bg-gray-100 flex justify-center items-center">
            <img 
                src="<?= config('base_url') ?>/images/<?= htmlspecialchars($project['photo_path'], ENT_QUOTES) ?>"
                alt="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>"
                class="max-h-[450px] w-auto object-contain transition duration-300 hover:scale-105"
            >
        </div>

        <!-- Contenu -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Infos projet -->
            <div class="space-y-4 text-gray-700">
                <p>
                    <span class="font-semibold text-gray-900">Coordinateur(s)</span><br>
                    <?= $project['coordinators'] ?>
                </p>

                <p>
                    <span class="font-semibold text-gray-900">Équipe</span><br>
                    <?= $project['team'] ?>
                </p>

                <p>
                    <span class="font-semibold text-gray-900">Date de début :</span>
                    <?= htmlspecialchars($project['start_date'] ?? '', ENT_QUOTES) ?>
                </p>

                <p>
                    <span class="font-semibold text-gray-900">Date de fin :</span>
                    <?= htmlspecialchars($project['end_date'] ?? 'En cours', ENT_QUOTES) ?>
                </p>

                <p>
                    <span class="font-semibold text-gray-900">Financement :</span>
                    <?= htmlspecialchars($project['financing'], ENT_QUOTES) ?>
                </p>

                <p>
                    <span class="font-semibold text-gray-900">Statut :</span>
                    <span class="inline-block px-3 py-1 rounded-full text-sm 
                        <?= $project['status'] === 'En cours' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' ?>">
                        <?= htmlspecialchars($project['status'], ENT_QUOTES) ?>
                    </span>
                </p>
            </div>

            <!-- Vidéo -->
            <?php if (!empty($project['video_url'])): ?>
                <div class="w-full">
                    <div class="relative w-full overflow-hidden rounded-lg aspect-video">
                        <iframe 
                            src="<?= htmlspecialchars($project['video_url'], ENT_QUOTES) ?>"
                            class="absolute inset-0 w-full h-full"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <!-- Description -->
    <div class="bg-white shadow-lg rounded-xl p-6 mt-8">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800">Description</h3>
        <p class="text-gray-700 leading-relaxed">
            <?= nl2br(htmlspecialchars($project['description_full'], ENT_QUOTES)) ?>
        </p>
    </div>

</section>
