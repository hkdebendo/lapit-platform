<section class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
  <!-- Hero Section -->
  <div class="relative overflow-hidden bg-gradient-to-r from-lapit-darkblue to-lapit-lightblue">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
      <div class="text-center">
        <div class="inline-flex items-center justify-center p-3 bg-white/20 backdrop-blur-sm rounded-full mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
          Centre de 
          <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
            Téléchargement
          </span>
        </h1>
        <p class="text-xl sm:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
          Accédez à tous vos documents importants en quelques clics
        </p>
      </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
      <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
      <div class="absolute -bottom-16 -left-16 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    </div>
  </div>

  <!-- Documents Section -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
    <?php if (!empty($documents)): ?>
      <!-- Stats Bar -->
      <div class="mb-12">
        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/20">
          <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-center sm:text-left">
              <p class="text-3xl sm:text-4xl font-bold text-gray-800">
                <?= count($documents) ?>
              </p>
              <p class="text-gray-600 font-medium">
                Document<?= count($documents) > 1 ? 's' : '' ?> disponible<?= count($documents) > 1 ? 's' : '' ?>
              </p>
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
              </svg>
              Téléchargement sécurisé
            </div>
          </div>
        </div>
      </div>

      <!-- Documents Grid -->
      <div class="grid gap-6 sm:gap-8">
        <?php foreach($documents as $index => $doc): ?>
          <div class="group relative">
            <!-- Main card -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl border border-white/30 overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:bg-white/90">
              <!-- Card content -->
              <div class="p-6 sm:p-8">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                  <!-- Document icon & info -->
                  <div class="flex items-center gap-4 flex-1 min-w-0">
                    <!-- Animated icon -->
                    <div class="flex-shrink-0 w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-lapit-lightblue to-lapit-darkblue rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                      <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                      </svg>
                    </div>
                    
                    <!-- Document details -->
                    <div class="flex-1 min-w-0">
                      <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-1 truncate group-hover:text-lapit-darkblue transition-colors">
                        <?= htmlspecialchars($doc['name'], ENT_QUOTES) ?>
                      </h3>
                      <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 text-sm text-gray-500">
                        <span class="flex items-center gap-1">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                          </svg>
                          PDF Document
                        </span>
                        <span class="hidden sm:block">•</span>
                        <span class="flex items-center gap-1">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                          Vérifié
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Download button -->
                  <div class="flex-shrink-0 w-full sm:w-auto">
                    <a href="<?= config('base_url') ?>/uploads/<?= htmlspecialchars($doc['file_path'], ENT_QUOTES) ?>" 
                       class="group/btn w-full sm:w-auto inline-flex items-center justify-center gap-3 px-6 py-3 sm:px-8 sm:py-4 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-lapit-lightblue/30" 
                       download>
                      <svg class="w-5 h-5 group-hover/btn:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                      </svg>
                      <span class="text-base sm:text-lg">Télécharger</span>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Hover gradient overlay -->
              <div class="absolute inset-0 bg-gradient-to-r from-lapit-lightblue/5 to-lapit-darkblue/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl"></div>
            </div>

            <!-- Floating number badge -->
            <div class="absolute -top-3 -left-3 w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 text-white text-sm font-bold rounded-full flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform duration-300">
              <?= $index + 1 ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Bottom CTA Section -->
      <div class="mt-16 text-center">
        <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20">
          <div class="max-w-2xl mx-auto">
            <div class="inline-flex items-center justify-center p-3 bg-green-100 rounded-full mb-4">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Tous vos documents sont prêts !</h3>
            <p class="text-gray-600">
              Cliquez sur "Télécharger" pour accéder instantanément à vos fichiers. 
              Tous les téléchargements sont sécurisés et vérifiés.
            </p>
          </div>
        </div>
      </div>

    <?php else: ?>
      <!-- Empty state -->
      <div class="text-center py-16 sm:py-20 lg:py-24">
        <div class="max-w-md mx-auto">
          <!-- Empty state illustration -->
          <div class="relative mb-8">
            <div class="w-32 h-32 mx-auto bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center shadow-inner">
              <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
            </div>
            <!-- Floating elements -->
            <div class="absolute top-0 right-0 w-4 h-4 bg-blue-300 rounded-full animate-ping"></div>
            <div class="absolute bottom-4 left-4 w-3 h-3 bg-purple-300 rounded-full animate-pulse"></div>
          </div>
          
          <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
            Aucun document disponible
          </h3>
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Les documents seront bientôt disponibles. 
            Revenez plus tard pour accéder à vos fichiers.
          </p>
          
          <!-- Decorative card -->
          <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/20">
            <div class="flex items-center justify-center gap-2 text-sm text-gray-500">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Vérifiez régulièrement pour les mises à jour
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<style>
  /* Custom animations */
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }
  
  .animate-float {
    animation: float 3s ease-in-out infinite;
  }
  
  /* Glassmorphism effect enhancement */
  .backdrop-blur-sm {
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
  }
  
  /* Smooth hover transitions */
  .group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
  }
  
  /* Responsive text scaling */
  @media (max-width: 640px) {
    .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
    .text-5xl { font-size: 3rem; line-height: 1; }
    .text-6xl { font-size: 3.75rem; line-height: 1; }
  }
</style>