<section class="container mx-auto px-6 py-16 lg:mt-[10%] mt-[20%] max-w-4xl bg-white rounded-[2.5rem] shadow-[0_40px_100px_-20px_rgba(0,0,0,0.08)] border border-slate-100 relative">
  
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-1.5 bg-blue-600 rounded-b-full"></div>

  <header class="text-center mb-12">
    <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-50 rounded-full mb-6 border border-slate-100">
      <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">
        Publié le <?= date('d/m/Y', strtotime($news['date_posted'])) ?>
      </span>
    </div>

    <h2 class="text-4xl md:text-5xl font-black text-[#0f1a3c] leading-[1.15] tracking-tight mb-8">
      <?= htmlspecialchars($news['title'], ENT_QUOTES) ?>
    </h2>
    
    <div class="w-24 h-1 bg-blue-100 mx-auto rounded-full"></div>
  </header>

  <?php if(!empty($news['photo_path'])): ?>
    <div class="relative group rounded-[2rem] overflow-hidden shadow-2xl mb-16 bg-slate-200">
      <img src="<?= config('base_url') ?>/images/<?= htmlspecialchars($news['photo_path'], ENT_QUOTES) ?>"
           alt="<?= htmlspecialchars($news['title'], ENT_QUOTES) ?>"
           class="w-full h-[500px] object-cover transform transition-transform duration-[3s] group-hover:scale-105">
      
      <div class="absolute inset-0 bg-gradient-to-t from-[#0f1a3c]/20 to-transparent opacity-60"></div>
    </div>
  <?php endif; ?>

  <div class="max-w-3xl mx-auto">
    <div class="prose prose-lg prose-slate max-w-none text-slate-700 leading-[1.8] font-light">
      <div class="first-letter:text-5xl first-letter:font-black first-letter:text-blue-600 first-letter:mr-3 first-letter:float-left">
        <?= nl2br(htmlspecialchars($news['content_full'], ENT_QUOTES)) ?>
      </div>
    </div>

    <footer class="mt-20 pt-10 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-6">
      <a href="javascript:history.back()" 
         class="group inline-flex items-center gap-3 px-8 py-3 bg-slate-900 text-white rounded-xl font-bold text-sm transition-all hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-200">
        <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Retour aux actualités
      </a>

      <div class="flex items-center gap-3 grayscale opacity-40">
        <span class="text-sm font-bold tracking-tighter text-[#0f1a3c]">LaPIT</span>
        <div class="w-1 h-1 rounded-full bg-slate-400"></div>
        <span class="text-xs text-slate-400 uppercase tracking-widest font-medium text-center">Laboratoire de Recherche</span>
      </div>
    </footer>
  </div>
</section>