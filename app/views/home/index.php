<!--slider -->
<div 
  x-data="slider()" 
  x-init="init()" 
  @mouseover="pause()" 
  @mouseleave="play()" 
  class="relative w-full overflow-hidden h-96 md:h-[500px] lg:h-[600px] rounded-xl shadow-2xl group"
>
  <template x-for="(slide, i) in slides" :key="i">
    <div
      x-show="current === i"
      x-transition:enter="transition-all duration-700 ease-out"
      x-transition:enter-start="opacity-0 scale-105"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition-all duration-700 ease-in"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
      class="absolute inset-0"
    >
      <img 
        :src="slide.image" 
        :alt="slide.title" 
        class="w-full h-full object-cover transform transition-transform duration-[10s] hover:scale-110"
      >
      <!-- Overlay gradient  -->
      <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
      
      <!-- Contenu principal -->
      <div class="absolute inset-0 flex items-center justify-start pl-8 md:pl-16 lg:pl-24">
        <div class="text-left text-white max-w-2xl transform transition-all duration-1000 delay-300" 
             x-show="current === i"
             x-transition:enter="transition-all duration-1000 delay-500"
             x-transition:enter-start="opacity-0 translate-y-10"
             x-transition:enter-end="opacity-100 translate-y-0">
          
          <!-- Badge -->
          <div class="inline-flex items-center px-4 py-2 bg-blue-600/20 backdrop-blur-sm border border-blue-400/30 rounded-full text-blue-200 text-sm font-medium mb-4">
            <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 animate-pulse"></span>
            <span x-text="'Slide ' + (i + 1) + ' / ' + slides.length"></span>
          </div>
          
          <!-- Titre principal -->
          <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight" x-text="slide.title">
          </h2>
          
          <!-- Ligne décorative animée -->
          <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mb-6 rounded-full transform origin-left transition-all duration-1000 delay-700"
               x-show="current === i"
               x-transition:enter="transition-all duration-1000 delay-700"
               x-transition:enter-start="scale-x-0" 
               x-transition:enter-end="scale-x-100">
          </div>
          
          <!-- Description -->
          <p class="text-lg md:text-xl text-gray-200 leading-relaxed mb-8 max-w-lg" x-text="slide.text">
          </p>
          
          <!-- button -->
          <div class="flex flex-wrap gap-4">
            <button class="group/btn bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-3 rounded-full font-semibold transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25">
              <span class="flex items-center">
                En savoir plus
                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </span>
            </button>
            
            <button class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-3 rounded-full font-semibold backdrop-blur-sm hover:bg-white/10 transform transition-all duration-300 hover:scale-105">
              Découvrir
            </button>
          </div>
        </div>
      </div>
      
      <!-- Particles d'animation -->
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white/20 rounded-full animate-ping" style="animation-delay: 0s;"></div>
        <div class="absolute top-3/4 left-1/3 w-1 h-1 bg-blue-400/30 rounded-full animate-ping" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 right-1/4 w-3 h-3 bg-purple-400/20 rounded-full animate-pulse" style="animation-delay: 4s;"></div>
      </div>
    </div>
  </template>

  <!-- Contrôles gauche/droite améliorés -->
  <button 
    @click="prev()" 
    class="absolute left-4 md:left-6 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full p-3 md:p-4 hover:bg-white/20 hover:border-white/40 transition-all duration-300 opacity-0 group-hover:opacity-100 hover:scale-110 shadow-lg"
  >
    <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
    </svg>
  </button>
  
  <button 
    @click="next()" 
    class="absolute right-4 md:right-6 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full p-3 md:p-4 hover:bg-white/20 hover:border-white/40 transition-all duration-300 opacity-0 group-hover:opacity-100 hover:scale-110 shadow-lg"
  >
    <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
    </svg>
  </button>

  <!-- Indicateurs -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3">
    <template x-for="(slide, i) in slides" :key="i">
      <button 
        @click="go(i)" 
        class="relative group/indicator"
      >
        <!-- Barre de progression -->
        <div class="w-12 h-1.5 bg-white/30 rounded-full overflow-hidden">
          <div 
            class="h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-full transition-all duration-300 transform origin-left"
            :class="current === i ? 'scale-x-100' : 'scale-x-0'"
          ></div>
        </div>
        
        <!-- Tooltip -->
        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-1 bg-black/80 backdrop-blur-sm text-white text-xs rounded-lg opacity-0 group-hover/indicator:opacity-100 transition-opacity duration-200 pointer-events-none whitespace-nowrap">
          <span x-text="slide.title"></span>
          <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-2 h-2 bg-black/80 rotate-45"></div>
        </div>
      </button>
    </template>
  </div>
  
  <!-- Progress bar globale -->
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10">
    <div 
      class="h-full bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-100 ease-linear"
      :style="'width: ' + ((current + 1) / slides.length * 100) + '%'"
    ></div>
  </div>
</div>


<style>
  /* Animation de Ken Burns pour les images */
  @keyframes kenburns-top {
    0% { transform: scale(1) translateY(0); }
    100% { transform: scale(1.1) translateY(-20px); }
  }
  
  /* Animation des particules */
  @keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
  }
  
  /* Effet de glow sur les boutons */
  .group:hover .group\/btn {
    box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);
  }
  
  /* Animation smooth pour les transitions */
  * {
    scroll-behavior: smooth;
  }
</style>

<script>
  function slider() {
    return {
      current: 0,
      slides: [
        { image: '<?= config('base_url') ?>/images/slide1.jpg', title: 'LaPIT', text: 'ORGANISATION DES JOURNEES DE PARTAGE POUR APPROPRIATION DES RESULTATS DE RECHERCHE ET D\'INNOVATION' },
        { image: '<?= config('base_url') ?>/images/slide2.jpg', title: 'Recherche', text: 'Des projets de recherche avancée qui façonnent les technologies de demain et transforment notre société.' },
        { image: '<?= config('base_url') ?>/images/slide3.jpg', title: 'Innovation', text: 'L\'innovation au service de la communauté avec des solutions technologiques révolutionnaires et accessibles.' },
      ],
      timer: null,
      init() { 
        this.play();
        // Preload des images
        this.slides.forEach(slide => {
          const img = new Image();
          img.src = slide.image;
        });
      },
      play() { 
        this.timer = setInterval(() => this.next(), 6000) // Augmenté à 6s pour laisser plus de temps
      },
      pause() { 
        clearInterval(this.timer) 
      },
      next() { 
        this.current = (this.current + 1) % this.slides.length 
      },
      prev() { 
        this.current = (this.current - 1 + this.slides.length) % this.slides.length 
      },
      go(i) { 
        this.current = i;
        this.pause();
        setTimeout(() => this.play(), 1000); // Reprend l'auto-play après 1s
      }
    }
  }
</script>
<br>
<br>

  <!-- Les dernières nouvelles -->
<section class="mb-16 relative">
  <!-- Header de section avec animation -->
  <div class="text-center mb-12">
    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mb-4 shadow-lg">
      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"/>
      </svg>
    </div>
    <h3 class="text-4xl font-bold text-gray-800 mb-3">Les dernières nouvelles du LaPIT</h3>
    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full"></div>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Découvrez les dernières actualités, innovations et réalisations de notre laboratoire</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach($latestNews as $index => $news): ?>
      <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 hover:scale-105 border border-gray-100">
        <!-- Image avec overlay et badge -->
        <div class="relative h-56 overflow-hidden">
          <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($news['photo_path']) ?>"
               alt="<?= htmlspecialchars($news['title']) ?>" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          
          <!-- Gradient overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          
          <!-- Badge "Nouveau" -->
          <div class="absolute top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg animate-pulse">
            <span class="flex items-center">
              <span class="w-2 h-2 bg-white rounded-full mr-2"></span>
              Nouveau
            </span>
          </div>
          
          <!-- Date -->
          <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-medium shadow-lg">
            <time><?= date('d M', strtotime($news['created_at'] ?? 'now')) ?></time>
          </div>
          
          <!-- Quick preview overlay -->
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="bg-white/20 backdrop-blur-sm rounded-full p-4 transform scale-0 group-hover:scale-100 transition-transform duration-300 delay-100">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </div>
          </div>
        </div>
        
        <!-- Contenu -->
        <div class="p-6 relative">
          <!-- Catégorie -->
          <div class="flex items-center mb-3">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Actualité
            </span>
          </div>
          
          <h4 class="font-bold text-xl text-gray-800 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
            <?= htmlspecialchars($news['title']) ?>
          </h4>
          
          <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">
            <?= htmlspecialchars($news['summary']) ?>
          </p>
          
          <!-- Footer de la carte -->
          <div class="flex items-center justify-between">
            <a href="<?= config('base_url') ?>/news/show/<?= $news['id'] ?>"
               class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 transform hover:scale-105">
              <span>Voir plus</span>
              <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            
            <!-- Actions secondaires -->
            <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <button class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-full transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
              </button>
              <button class="p-2 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-full transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Barre de couleur en bas -->
        <div class="h-1 bg-gradient-to-r from-blue-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- Unités de recherche -->
<section class="mb-16 relative bg-gradient-to-br from-gray-50 via-white to-blue-50 py-16 rounded-3xl">
  <!-- Background decoration -->
  <div class="absolute inset-0 overflow-hidden rounded-3xl">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-purple-400/10 to-pink-400/10 rounded-full blur-3xl"></div>
  </div>
  
  <div class="relative px-8">
    <!-- Header de section -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mb-4 shadow-lg">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
        </svg>
      </div>
      <h3 class="text-4xl font-bold text-gray-800 mb-3">Unités de Recherche</h3>
      <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full"></div>
      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Explorez nos domaines d'expertise et nos équipes de recherche de pointe</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach($units as $index => $unit): ?>
        <div class="group bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-3 border border-white/50 hover:border-purple-200">
          <!-- Image avec overlay -->
          <div class="relative h-40 overflow-hidden">
            <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($unit['photo_path']) ?>"
                 alt="<?= htmlspecialchars($unit['title']) ?>" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            
            <!-- Numéro de l'unité -->
            <div class="absolute top-3 left-3 w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
              <?= sprintf('%02d', $index + 1) ?>
            </div>
            
            <!-- Overlay avec icône -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
              <div class="bg-white/20 backdrop-blur-sm rounded-full p-3 transform scale-0 group-hover:scale-100 transition-transform duration-300 delay-100">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
            </div>
          </div>
          
          <!-- Contenu -->
          <div class="p-5 relative">
            <!-- Indicateur de statut -->
            <div class="flex items-center justify-between mb-3">
              <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                Actif
              </span>
              <div class="flex items-center text-xs text-gray-500">
                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                </svg>
                Équipe
              </div>
            </div>
            
            <h4 class="font-bold text-lg text-gray-800 mb-2 line-clamp-2 group-hover:text-purple-600 transition-colors duration-300">
              <?= htmlspecialchars($unit['title']) ?>
            </h4>
            
            <p class="text-sm text-gray-600 mb-4 line-clamp-3 leading-relaxed">
              <?= htmlspecialchars($unit['description_short']) ?>
            </p>
            
            <!-- CTA -->
            <a href="<?= config('base_url') ?>/unit/show/<?= $unit['id'] ?>"
               class="group/btn inline-flex items-center justify-center w-full px-4 py-2.5 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/25 transform hover:scale-105">
              <span>En savoir plus</span>
              <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
          
          <!-- Barre de progression en bas -->
          <div class="h-1 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Vidéo statique -->
<section class="mb-16">
  <div class="text-center mb-12">
    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-red-500 to-orange-500 rounded-full mb-4 shadow-lg">
      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.5a2.5 2.5 0 000-5H9m3 0H9m3 0h1.5a2.5 2.5 0 010 5M9 10v6m3-6v6"/>
      </svg>
    </div>
    <h3 class="text-4xl font-bold text-gray-800 mb-3">Présentation vidéo</h3>
    <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto rounded-full"></div>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Découvrez LaPIT en images et plongez dans notre univers de recherche et d'innovation</p>
  </div>

  <div class="relative max-w-5xl mx-auto">
    <!-- Container avec effet glassmorphism -->
    <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
      <!-- Decoration circles -->
      <div class="absolute -top-4 -left-4 w-24 h-24 bg-gradient-to-r from-red-400/20 to-orange-400/20 rounded-full blur-xl"></div>
      <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-gradient-to-r from-orange-400/20 to-red-400/20 rounded-full blur-xl"></div>
      
      <div class="relative aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-2xl group">
        <!-- Play button overlay -->
        <div class="absolute inset-0 bg-black/20 flex items-center justify-center z-10 group-hover:bg-black/10 transition-all duration-300">
          <div class="w-20 h-20 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform duration-300 cursor-pointer">
            <svg class="w-8 h-8 text-red-500 ml-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z"/>
            </svg>
          </div>
        </div>
        
        <iframe src="https://www.youtube.com/embed/ID_VIDEO"
                frameborder="0" 
                class="w-full h-full rounded-2xl" 
                allowfullscreen>
        </iframe>
      </div>
      
      <!-- Stats sous la vidéo -->
      <div class="grid grid-cols-3 gap-6 mt-8">
        <div class="text-center">
          <div class="text-2xl font-bold text-gray-800">2.5M+</div>
          <div class="text-sm text-gray-600">Vues</div>
        </div>
        <div class="text-center">
          <div class="text-2xl font-bold text-gray-800">15K+</div>
          <div class="text-sm text-gray-600">Partages</div>
        </div>
        <div class="text-center">
          <div class="text-2xl font-bold text-gray-800">98%</div>
          <div class="text-sm text-gray-600">Satisfaction</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision -->
<section class="mb-16">
  <div class="relative bg-gradient-to-r from-blue-900 via-purple-900 to-blue-900 rounded-3xl overflow-hidden shadow-2xl">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, white 2px, transparent 2px), radial-gradient(circle at 75% 75%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative flex flex-col lg:flex-row items-center p-8 lg:p-12">
      <!-- Image section -->
      <div class="w-full lg:w-2/5 mb-8 lg:mb-0 lg:mr-12">
        <div class="relative group">
          <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
          <img src="<?= config('base_url') ?>/images/mission.jpg"
               alt="Mission & Vision" 
               class="relative w-full h-72 lg:h-80 object-cover rounded-2xl shadow-2xl transform transition-transform duration-500 group-hover:scale-105">
          
          <!-- Overlay avec icône -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
            <div class="text-white text-center">
              <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <span class="text-sm font-medium">Voir en détail</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Content section -->
      <div class="w-full lg:w-3/5 text-white">
        <!-- Badge -->
        <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-medium mb-6">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
          Notre Identité
        </div>
        
        <h3 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
          Mission & Vision
        </h3>
        
        <!-- Ligne décorative -->
        <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-purple-400 mb-6 rounded-full"></div>
        
        <div class="text-lg text-blue-100 mb-8 leading-relaxed">
          <p class="mb-4">
            Une partie du texte sur la mission & vision de LaPIT. Notre laboratoire s'engage dans l'excellence scientifique et l'innovation technologique pour un avenir durable et inclusif.
          </p>
          <p>
            Nous façonnons l'avenir à travers la recherche de pointe, la collaboration internationale et le développement de solutions innovantes qui transforment notre société.
          </p>
        </div>
        
        <!-- Stats rapides -->
        <div class="grid grid-cols-3 gap-6 mb-8">
          <div class="text-center">
            <div class="text-3xl font-bold text-white">25+</div>
            <div class="text-sm text-blue-200">Années</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-white">150+</div>
            <div class="text-sm text-blue-200">Projets</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-white">50+</div>
            <div class="text-sm text-blue-200">Chercheurs</div>
          </div>
        </div>
        
        <!-- CTA -->
        <div class="flex flex-wrap gap-4">
          <a href="<?= config('base_url') ?>/vision"
             class="group/btn inline-flex items-center px-8 py-4 bg-white text-blue-900 rounded-xl font-bold transition-all duration-300 hover:bg-blue-50 hover:shadow-xl transform hover:scale-105">
            <span>Lire la suite</span>
            <svg class="w-5 h-5 ml-2 transform transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          
          <button class="inline-flex items-center px-8 py-4 border-2 border-white/30 text-white rounded-xl font-bold hover:border-white hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            Télécharger la brochure
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Laboratoires partenaires -->
<section class="mb-16">
  <!-- Titre et intro -->
  <div class="text-center mb-12">
    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full mb-4 shadow-lg">
      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2
                 c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0
                 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0
                 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0
                 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0
                 11-4 0 2 2 0 014 0z"/>
      </svg>
    </div>
    <h3 class="text-4xl font-bold text-gray-800 mb-3">Laboratoires partenaires</h3>
    <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-teal-500 mx-auto rounded-full mb-4"></div>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
      Un réseau de collaborations stratégiques avec les institutions les plus prestigieuses
    </p>
  </div>

  <!-- Carousel logos -->
  <div class="relative bg-white rounded-2xl shadow-lg border border-gray-100 p-8 overflow-hidden">
    <!-- Masques de dégradé -->
    <div class="pointer-events-none absolute inset-y-0 left-0 w-16 bg-gradient-to-r from-white to-transparent"></div>
    <div class="pointer-events-none absolute inset-y-0 right-0 w-16 bg-gradient-to-l from-white to-transparent"></div>

    <!-- Bande défilante -->
    <div class="flex space-x-8 animate-[scroll_20s_linear_infinite]">
      <?php foreach($partners as $p): ?>
        <div class="flex-shrink-0">
          <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['logo_path']) ?>"
               alt="<?= htmlspecialchars($p['name']) ?>"
               class="max-w-[100px] h-auto grayscale hover:grayscale-0 transition">
        </div>
      <?php endforeach; ?>
      <!-- Dupliquez les logos pour le scroll infini -->
      <?php foreach($partners as $p): ?>
        <div class="flex-shrink-0">
          <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['logo_path']) ?>"
               alt="<?= htmlspecialchars($p['name']) ?>"
               class="max-w-[100px] h-auto grayscale hover:grayscale-0 transition">
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="text-center mt-6">
    <a href="<?= config('base_url') ?>/partner"
       class="inline-block px-6 py-3 bg-lapit-lightblue text-white rounded-full font-medium hover:bg-lapit-darkblue transition">
      En savoir plus
    </a>
  </div>
</section>

<style>
  @keyframes scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-\[scroll_20s_linear_infinite\] {
    animation: scroll 20s linear infinite;
  }
</style>
