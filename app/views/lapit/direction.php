
<head>
    
    <title>LaPIT - Laboratoire</title>
    
    
</head>
<body class="bg-gray-50 min-h-screen ">

<!-- Section 1: Structuration du Laboratoire -->
<section class="container mx-auto px-6 py-20 lg:mt-[9.5%] mt-[20%] relative">
  
  <div class="text-center mb-16">
    <span class="text-blue-600 font-mono text-xs tracking-[0.3em] uppercase mb-3 block">Organization & Governance</span>
    <h2 class="text-4xl md:text-5xl font-black text-[#0f1a3c] tracking-tighter uppercase">
      Structuration du <span class="text-blue-600 italic">Laboratoire</span>
    </h2>
    <div class="mt-4 w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
    <p class="mt-6 text-slate-500 text-lg max-w-2xl mx-auto font-medium">
      Aperçu de l'organisation interne du Laboratoire de Physique et d'Informatique Théorique (LaPIT)
    </p>
  </div>

  <div class="flex justify-center">
    <div class="relative max-w-6xl w-full group">
      
      <div class="absolute -inset-4 bg-blue-500/5 blur-3xl rounded-[3rem] -z-10 group-hover:bg-blue-500/10 transition-colors duration-700"></div>

      <div class="bg-white border border-slate-100 rounded-[2.5rem] shadow-[0_40px_100px_-20px_rgba(0,0,0,0.06)] overflow-hidden">
        
        <figure class="relative overflow-hidden bg-slate-50">
          <img 
            src="<?= config('base_url') ?>/images/lapit_structure.png" 
            alt="Structuration du Laboratoire LaPIT" 
            class="w-full h-auto lg:min-h-[500px] object-contain  transform transition-transform duration-700 group-hover:scale-[1.02]"
            loading="lazy"
          >
          
          <div class="absolute bottom-6 right-6 bg-[#0a192f]/90 backdrop-blur-md text-white text-[10px] font-bold py-2 px-4 rounded-full uppercase tracking-widest border border-white/10 shadow-xl">
            Official Structural Map 2024
          </div>
        </figure>

        <div class="p-10 md:p-12 bg-white border-t border-slate-50 relative">
          
          <div class="max-w-4xl mx-auto">
            <h4 class="text-blue-600 font-bold uppercase text-xs tracking-widest mb-4">Architecture Institutionnelle</h4>
            <p class="text-slate-600 text-justify leading-[1.8] text-lg font-light">
              Cette illustration présente la structuration complète du Laboratoire de Physique et d'Informatique Théorique (LaPIT), 
              mettant en évidence les départements, les axes de recherche, les conseils scientifiques et les interactions entre les équipes. 
              Elle reflète la <span class="text-[#0f1a3c] font-bold italic">rigueur académique</span> et la <span class="text-[#0f1a3c] font-bold italic">dynamique collaborative</span> du laboratoire.
            </p>
          </div>
        </div>
      </div>
      
      <div class="hidden lg:block absolute -top-4 -left-4 w-12 h-12 border-t-2 border-l-2 border-blue-600/20 rounded-tl-2xl"></div>
      <div class="hidden lg:block absolute -bottom-4 -right-4 w-12 h-12 border-b-2 border-r-2 border-blue-600/20 rounded-br-2xl"></div>
    </div>
  </div>
</section>


<!--Section 3 -->
<section class="bg-[#020617] py-24 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-full opacity-20 pointer-events-none">
        <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent"></div>
        <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-transparent via-blue-500 to-transparent"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 mb-15 reveal">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-blue-900/30 pb-10">
            <div>
                <h2 class="text-6xl md:text-7xl font-black text-white tracking-tighter uppercase leading-none">
                    La <span class="text-blue-600">Direction</span>
                </h2>
                <p class="text-slate-500 font-mono text-sm tracking-[0.3em] uppercase mt-4">Laboratoire LaPIT • Governance Unit</p>
            </div>
            <div class="hidden md:block text-right">
                <div class="text-blue-500 font-black text-6xl opacity-10 uppercase tracking-tighter">Executive</div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-12">
        
        <div class="flex flex-col md:flex-row items-center gap-8 group reveal">
            <div class="relative flex-shrink-0">
                <div class="absolute -top-4 -left-4 w-16 h-16 border-t-4 border-l-4 border-blue-600 z-10 transition-all group-hover:w-full group-hover:h-full group-hover:rounded-2xl opacity-50"></div>
                
                <div class="w-64 h-80 bg-slate-800 relative overflow-hidden rounded-bl-[4rem] group-hover:rounded-2xl transition-all duration-700">
                    <img src="<?= config('base_url') ?>/images/dr.jpg" 
                         alt="Prof Alain Alexis C. N. ADOMOU" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-blue-900/20 mix-blend-multiply opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>

            <div class="flex-grow">
                <span class="text-blue-500 font-black text-xs uppercase tracking-widest block mb-2">Directeur</span>
                <h3 class="text-white text-3xl font-black uppercase leading-tight mb-4 tracking-tight">
                    Prof Alain Alexis <br> <span class="text-slate-400">C. N. ADOMOU</span>
                </h3>
                
                <a href="mailto:adomounicaise@unstim.bj" 
                   class="inline-flex items-center gap-4 p-4 bg-blue-600/5 border border-blue-500/20 rounded-xl hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 group/link shadow-xl">
                    <div class="w-10 h-10 bg-blue-600/20 rounded-lg flex items-center justify-center group-hover/link:bg-white/20">
                        <svg class="w-5 h-5 text-blue-500 group-hover/link:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest group-hover/link:text-blue-100">Contact Institutionnel</p>
                        <span class="text-white text-sm font-semibold">adomounicaise@unstim.bj</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 group lg:mt-24 reveal">
            <div class="relative flex-shrink-0">
                <div class="absolute -top-4 -left-4 w-16 h-16 border-t-4 border-l-4 border-blue-600 z-10 transition-all group-hover:w-full group-hover:h-full group-hover:rounded-2xl opacity-50"></div>
                
                <div class="w-64 h-80 bg-slate-800 relative overflow-hidden rounded-bl-[4rem] group-hover:rounded-2xl transition-all duration-700">
                    <img src="<?= config('base_url') ?>/images/dra.jpg" 
                         alt="MC Gildas David Farid ADAMON" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-blue-900/20 mix-blend-multiply opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>

            <div class="flex-grow">
                <span class="text-blue-500 font-black text-xs uppercase tracking-widest block mb-2">Directeur Ajoint</span>
                <h3 class="text-white text-3xl font-black uppercase leading-tight mb-4 tracking-tight">
                    MC Gildas David <br> <span class="text-slate-400">Farid ADAMON</span>
                </h3>
                
                <a href="mailto:adamon.david@unstim.bj" 
                   class="inline-flex items-center gap-4 p-4 bg-blue-600/5 border border-blue-500/20 rounded-xl hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 group/link shadow-xl">
                    <div class="w-10 h-10 bg-blue-600/20 rounded-lg flex items-center justify-center group-hover/link:bg-white/20">
                        <svg class="w-5 h-5 text-blue-500 group-hover/link:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest group-hover/link:text-blue-100">Contact Institutionnel</p>
                        <span class="text-white text-sm font-semibold">adamon.david@unstim.bj</span>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');
        
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // On ajoute un délai progressif (stagger) basé sur l'ordre d'apparition
                    setTimeout(() => {
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                    }, index * 200); // 200ms entre chaque élément
                    
                    observer.unobserve(entry.target); // On arrête d'observer une fois animé
                }
            });
        }, observerOptions);

        reveals.forEach((el) => {
            // État initial caché
            el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-1000', 'ease-out');
            observer.observe(el);
        });
    });
</script>
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
});



// Animation des barres de couleur sous les titres
document.addEventListener('DOMContentLoaded', () => {
    const colorBars = document.querySelectorAll('.w-24.h-1');
    colorBars.forEach((bar, index) => {
        setTimeout(() => {
            bar.style.transform = 'scaleX(0)';
            bar.style.transformOrigin = 'left';
            bar.style.transition = 'transform 0.8s ease-out';
            
            setTimeout(() => {
                bar.style.transform = 'scaleX(1)';
            }, 100);
        }, index * 200);
    });
});
</script>

