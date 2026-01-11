
<head>
    
    <title>Vision & Missions</title>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'lapit-lightblue': '#3B82F6',
                        'lapit-darkblue': '#1E40AF'
                    }
                }
            }
        }
    </script>
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">

<!-- Section: Missions du Laboratoire -->
<section class="container mx-auto px-4 py-8 fade-in lg:mt-[10%] mt-[20%]">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Missions du Laboratoire</h2>
        <div class="w-24 h-1 bg-lapit-lightblue mx-auto rounded-full"></div>
    </div>
    
    <div class="flex justify-center">
        <div class="max-w-6xl w-full">
            <img 
                src="<?= config('base_url') ?>/images/mission.png" 
                alt="Missions du Laboratoire LaPIT" 
                class="w-full h-auto shadow-lg rounded-lg"
                loading="lazy"
            >
        </div>
    </div>
</section>

<section class="container mx-auto px-4 py-20">
  <div class="relative max-w-6xl mx-auto">
    
    <div class="mb-16 text-center">
      <h2 class="text-5xl font-black text-slate-900 mt-2">Mission <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">&</span> Vision</h2>
    </div>

    <div class="flex flex-col lg:flex-row gap-12 items-stretch">
      
      <div class="flex-1 relative group">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-[2rem] blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
        <div class="relative h-full bg-white border border-slate-100 rounded-[2rem] p-10 shadow-xl shadow-blue-900/5">
          <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-blue-50 text-blue-600 mb-8 transform group-hover:rotate-6 transition-transform duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          </div>
          <h3 class="text-3xl font-bold text-slate-800 mb-6">Notre Mission</h3>
          <div class="h-1.5 w-12 bg-blue-600 rounded-full mb-6"></div>
          <p class="text-slate-600 leading-relaxed text-lg font-medium">
            <?= nl2br(htmlspecialchars($mission, ENT_QUOTES)) ?>
          </p>
        </div>
      </div>

      <div class="flex-1 relative group">
        <div class="absolute inset-0 bg-blue-400 rounded-[2rem] blur opacity-20 group-hover:opacity-40 transition duration-500"></div>
        <div class="relative h-full bg-[#0F172A] rounded-[2rem] p-10 shadow-2xl overflow-hidden">
          <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/hexellence.png');"></div>
          
          <div class="relative">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl text-blue-400 mb-8 border border-white/10">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
            </div>
            <h3 class="text-3xl font-bold text-white mb-6">Notre Vision</h3>
            <div class="h-1.5 w-12 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mb-6"></div>
            <p class="text-slate-300 leading-relaxed text-lg">
              <?= nl2br(htmlspecialchars($vision, ENT_QUOTES)) ?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<script>
// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observer tous les éléments avec la classe fade-in
document.addEventListener('DOMContentLoaded', () => {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));
    
    // Animation de la barre colorée
    const colorBar = document.querySelector('.w-24.h-1');
    if (colorBar) {
        colorBar.style.transform = 'scaleX(0)';
        colorBar.style.transformOrigin = 'left';
        colorBar.style.transition = 'transform 0.8s ease-out';
        
        setTimeout(() => {
            colorBar.style.transform = 'scaleX(1)';
        }, 500);
    }
});
</script>
