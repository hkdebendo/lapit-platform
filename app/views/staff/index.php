<section class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
  <!-- Hero Section -->
  <div class="relative overflow-hidden bg-gradient-to-r from-lapit-darkblue via-blue-600 to-lapit-lightblue">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute -top-16 -right-16 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
      <div class="absolute top-1/2 -left-32 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-float"></div>
      <div class="absolute -bottom-16 right-1/4 w-80 h-80 bg-white/8 rounded-full blur-3xl"></div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
      <div class="text-center max-w-4xl mx-auto">
        <!-- Icon container -->
        <div class="inline-flex items-center justify-center p-4 bg-white/20 backdrop-blur-sm rounded-2xl mb-8 group">
          <svg class="w-10 h-10 text-white group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
          </svg>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
          Équipe
          <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent block sm:inline">
            LaPIT
          </span>
        </h1>
        
        <p class="text-xl sm:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-8">
          Découvrez nos enseignants-chercheurs passionnés qui façonnent l'avenir de la recherche
        </p>

        <!-- Stats section -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8 max-w-2xl mx-auto">
          <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4 sm:p-6">
            <div class="text-2xl sm:text-3xl font-bold text-white mb-1">
              <?= count($researchers) ?>
            </div>
            <div class="text-sm sm:text-base text-blue-100">
              Chercheur<?= count($researchers) > 1 ? 's' : '' ?>
            </div>
          </div>
          <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4 sm:p-6">
            <div class="text-2xl sm:text-3xl font-bold text-white mb-1">
              <svg class="w-6 h-6 sm:w-8 sm:h-8 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <div class="text-sm sm:text-base text-blue-100">
              Excellence
            </div>
          </div>
          <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4 sm:p-6">
            <div class="text-2xl sm:text-3xl font-bold text-white mb-1">
              <svg class="w-6 h-6 sm:w-8 sm:h-8 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="text-sm sm:text-base text-blue-100">
              Innovation
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Team Section -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
    <!-- Section header -->
    <div class="text-center mb-12 sm:mb-16">
      <div class="inline-flex items-center gap-2 bg-white/70 backdrop-blur-sm rounded-full px-6 py-3 mb-6 shadow-lg">
        <svg class="w-5 h-5 text-lapit-darkblue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
        <span class="text-lapit-darkblue font-semibold">Notre Équipe</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">
        Enseignants-Chercheurs du LaPIT
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Une équipe d'experts dédiés à l'excellence académique et à l'innovation scientifique
      </p>
    </div>

    <!-- Team Grid -->
    <div class="grid gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach($researchers as $index => $r): ?>
        <div class="group relative">
          <!-- Main card -->
          <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl border border-white/30 overflow-hidden transition-all duration-500 hover:scale-105 hover:bg-white/90">
            
            <!-- Image container with overlay -->
            <div class="relative overflow-hidden">
              <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($r['photo_path'], ENT_QUOTES) ?>" 
                   alt="<?= htmlspecialchars($r['first_name'].' '.$r['last_name'], ENT_QUOTES) ?>" 
                   class="w-full h-64 sm:h-72 object-cover transition-transform duration-700 group-hover:scale-110">
              
              <!-- Gradient overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              
              <!-- Floating badge -->
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full p-2 shadow-lg transform translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                <svg class="w-5 h-5 text-lapit-darkblue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>

              <!-- Status indicator -->
              <div class="absolute top-4 left-4 flex items-center gap-2">
                <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse shadow-lg"></div>
                <span class="text-xs font-medium text-white bg-black/30 backdrop-blur-sm px-2 py-1 rounded-full">
                  Actif
                </span>
              </div>
            </div>

            <!-- Card content -->
            <div class="p-6 sm:p-8">
              <div class="text-center mb-6">
                <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2 group-hover:text-lapit-darkblue transition-colors">
                  <?= htmlspecialchars($r['first_name'].' '.$r['last_name'], ENT_QUOTES) ?>
                </h3>
                
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-lapit-lightblue/10 to-lapit-darkblue/10 rounded-full px-4 py-2 mb-4">
                  <svg class="w-4 h-4 text-lapit-darkblue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                  <span class="text-sm font-medium text-lapit-darkblue">
                    <?= htmlspecialchars($r['position'], ENT_QUOTES) ?>
                  </span>
                </div>
              </div>

              <!-- Expertise indicators -->
              <div class="flex flex-wrap justify-center gap-2 mb-6">
                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">
                  Recherche
                </span>
                <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">
                  Enseignement
                </span>
                <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                  Innovation
                </span>
              </div>

              <!-- CTA Button -->
              <div class="text-center">
                <a href="<?= config('base_url') ?>/staff/show/<?= $r['id'] ?>" 
                   class="group/btn inline-flex items-center justify-center gap-3 w-full px-6 py-3 sm:px-8 sm:py-4 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-lapit-lightblue/30">
                  <span class="text-base">Découvrir le profil</span>
                  <svg class="w-5 h-5 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Decorative corner -->
            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-lapit-lightblue/20 to-transparent"></div>
          </div>

          <!-- Card number badge -->
          <div class="absolute -top-3 -left-3 w-10 h-10 bg-gradient-to-br from-yellow-400 to-orange-500 text-white text-sm font-bold rounded-full flex items-center justify-center shadow-lg transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
            <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
          </div>

          <!-- Hover glow effect -->
          <div class="absolute inset-0 bg-gradient-to-r from-lapit-lightblue/10 to-lapit-darkblue/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom CTA Section -->
    <div class="mt-16 sm:mt-20 text-center">
      <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 sm:p-12 shadow-lg border border-white/20 max-w-4xl mx-auto">
        <div class="inline-flex items-center justify-center p-3 bg-lapit-lightblue/20 rounded-full mb-6">
          <svg class="w-8 h-8 text-lapit-darkblue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
        </div>
        
        <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
          Rejoignez notre communauté académique
        </h3>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
          Découvrez les profils complets de nos enseignants-chercheurs, leurs domaines d'expertise 
          et leurs contributions à la recherche scientifique.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <div class="flex items-center gap-2 text-sm text-gray-500">
            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Profils détaillés
          </div>
          <div class="hidden sm:block w-1 h-1 bg-gray-300 rounded-full"></div>
          <div class="flex items-center gap-2 text-sm text-gray-500">
            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Informations à jour
          </div>
          <div class="hidden sm:block w-1 h-1 bg-gray-300 rounded-full"></div>
          <div class="flex items-center gap-2 text-sm text-gray-500">
            <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
            </svg>
            Expertise reconnue
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Custom animations */
  @keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-10px) rotate(1deg); }
    50% { transform: translateY(-5px) rotate(-1deg); }
    75% { transform: translateY(-15px) rotate(0.5deg); }
  }
  
  .animate-float {
    animation: float 6s ease-in-out infinite;
  }
  
  /* Enhanced glassmorphism */
  .backdrop-blur-sm {
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
  }
  
  /* Smooth transitions */
  .group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
  }
  
  .group:hover .group-hover\:rotate-12 {
    transform: rotate(12deg) scale(1.1);
  }
  
  /* Custom gradient text */
  .bg-clip-text {
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  /* Responsive improvements */
  @media (max-width: 640px) {
    .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
    .text-5xl { font-size: 3rem; line-height: 1; }
    .text-6xl { font-size: 3.75rem; line-height: 1; }
  }
  
  /* Card hover effects */
  .group:hover .translate-x-full {
    transform: translateX(0);
  }
  
  /* Pulse animation for status */
  @keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
  }
</style>