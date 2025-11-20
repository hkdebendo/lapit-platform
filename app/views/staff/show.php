<section class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-100 py-8 px-4">
  <div class="max-w-6xl mx-auto">
    
    <!-- En-tête du profil -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
      <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-6 py-8 md:px-8 md:py-12">
        <div class="flex flex-col md:flex-row items-center gap-6">
          <!-- Photo de profil -->
          <div class="relative group">
            <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden ring-4 ring-white/20 shadow-2xl">
              <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($staff['photo_path'], ENT_QUOTES) ?>" 
                   alt="<?= htmlspecialchars($staff['first_name'].' '.$staff['last_name'], ENT_QUOTES) ?>" 
                   class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            </div>
            <div class="absolute inset-0 rounded-full bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
          
          <!-- Informations personnelles -->
          <div class="text-center md:text-left text-white flex-1">
            <h1 class="text-3xl md:text-4xl font-bold mb-2 tracking-tight">
              <?= htmlspecialchars($staff['first_name'].' '.$staff['last_name'], ENT_QUOTES) ?>
            </h1>
            <p class="text-blue-100 text-lg md:text-xl font-medium mb-4">
              <?= htmlspecialchars($staff['position'], ENT_QUOTES) ?>
            </p>
            
            <!-- Contacts -->
            <div class="flex flex-col sm:flex-row gap-3 items-center justify-center md:justify-start">
              <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                <span class="text-sm font-medium"><?= htmlspecialchars($staff['email'], ENT_QUOTES) ?></span>
              </div>
              
              <?php if(!empty($staff['phone'])): ?>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                  </svg>
                  <span class="text-sm font-medium"><?= htmlspecialchars($staff['phone'], ENT_QUOTES) ?></span>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation par onglets -->
    <div x-data="{tab: 'profil'}" class="bg-white rounded-2xl shadow-xl overflow-hidden">
      
      <!-- Onglets -->
      <nav class="border-b border-gray-100">
        <div class="flex overflow-x-auto scrollbar-hide">
          <button @click="tab='profil'" 
                  :class="tab==='profil' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'" 
                  class="flex-shrink-0 px-6 py-4 border-b-2 font-semibold text-sm transition-all duration-200 whitespace-nowrap">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
              </svg>
              Profil
            </div>
          </button>
          
          <button @click="tab='projets'" 
                  :class="tab==='projets' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'" 
                  class="flex-shrink-0 px-6 py-4 border-b-2 font-semibold text-sm transition-all duration-200 whitespace-nowrap">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
              </svg>
              Projets
            </div>
          </button>
          
          <button @click="tab='encadrements'" 
                  :class="tab==='encadrements' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'" 
                  class="flex-shrink-0 px-6 py-4 border-b-2 font-semibold text-sm transition-all duration-200 whitespace-nowrap">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
              </svg>
              Encadrements
            </div>
          </button>
          
          <button @click="tab='publications'" 
                  :class="tab==='publications' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'" 
                  class="flex-shrink-0 px-6 py-4 border-b-2 font-semibold text-sm transition-all duration-200 whitespace-nowrap">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
              </svg>
              Publications
            </div>
          </button>
        </div>
      </nav>

      <!-- Contenu des onglets -->
      <div class="p-6 md:p-8">
        
        <!-- Onglet Profil -->
        <div x-show="tab==='profil'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
          <div class="max-w-4xl">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
              <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
              </div>
              Profil Professionnel
            </h2>
            
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-900 mb-2">Spécialité</h3>
                  <p class="text-gray-700 text-lg"><?= htmlspecialchars($staff['position'], ENT_QUOTES) ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Onglet Projets -->
        <div x-show="tab==='projets'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
          <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
              </svg>
            </div>
            Projets de Recherche
          </h2>
          
          <div class="space-y-4">
            <?php foreach($projects as $p): ?>
            <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow duration-200">
              <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                  <h3 class="font-semibold text-gray-900 mb-2"><?= htmlspecialchars($p['title'], ENT_QUOTES) ?></h3>
                  <p class="text-gray-600 text-sm"><?= htmlspecialchars($p['description_short'], ENT_QUOTES) ?></p>
                </div>
                <div>
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    <?= htmlspecialchars($p['role_in_proj'], ENT_QUOTES) ?>
                  </span>
                </div>
                <div>
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium <?= $p['status'] === 'En cours' ? 'bg-yellow-100 text-yellow-800' : ($p['status'] === 'Terminé' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800') ?>">
                    <?= htmlspecialchars($p['status'], ENT_QUOTES) ?>
                  </span>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Onglet Encadrements -->
        <div x-show="tab==='encadrements'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
          <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
              </svg>
            </div>
            Encadrements Scientifiques
          </h2>
          
          <div class="space-y-4">
            <?php foreach($supervisions as $s): ?>
            <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                <div class="flex-1">
                  <h3 class="font-semibold text-gray-900 mb-1"><?= htmlspecialchars($s['project_title'], ENT_QUOTES) ?></h3>
                  <p class="text-gray-600 text-sm mb-2"><?= htmlspecialchars($s['description'], ENT_QUOTES) ?></p>
                  <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-indigo-100 text-indigo-800">
                      <?= htmlspecialchars($s['first_name'].' '.$s['last_name'], ENT_QUOTES) ?>
                    </span>
                    <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-purple-100 text-purple-800">
                      <?= htmlspecialchars($s['level'], ENT_QUOTES) ?>
                    </span>
                    <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                      <?= htmlspecialchars($s['year'], ENT_QUOTES) ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Onglet Publications -->
        <div x-show="tab==='publications'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
          <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
              </svg>
            </div>
            Publications Scientifiques
          </h2>
          
          <div class="space-y-6">
            <?php foreach($publications as $pub): ?>
            <article class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow duration-200">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div class="flex-1">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-3">
                    <p class="font-semibold text-gray-900"><?= htmlspecialchars($pub['authors'], ENT_QUOTES) ?></p>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 self-start sm:self-center">
                      <?= htmlspecialchars($pub['pub_date'], ENT_QUOTES) ?>
                    </span>
                  </div>
                  <h3 class="text-lg font-medium text-gray-900 mb-3 italic"><?= htmlspecialchars($pub['title'], ENT_QUOTES) ?></h3>
                  <p class="text-gray-700 leading-relaxed"><?= htmlspecialchars($pub['content_full'], ENT_QUOTES) ?></p>
                </div>
              </div>
            </article>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
</style>