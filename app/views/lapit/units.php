<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPIT - Unités de Recherche</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateY(0);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .image-overlay {
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(30, 64, 175, 0.1));
        }
        .btn-glow {
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
            transition: all 0.3s ease;
        }
        .btn-glow:hover {
            box-shadow: 0 6px 20px rgba(30, 64, 175, 0.4);
            transform: translateY(-2px);
        }
        .title-gradient {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .stagger-animation {
            animation-delay: calc(var(--delay) * 0.1s);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">

   
<section class=" bg-white relative lg:mt-[12%] mt-[26%] overflow-hidden">
     <!-- En-tête -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
            style="background-image: radial-gradient(#0a192f 1px, transparent 1px); background-size: 20px 20px;"></div>

        <div class="text-center mb-12 md:mb-20 relative z-10 px-4">
            <div class="inline-flex items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-[#0a192f] rounded-[1.2rem] md:rounded-[1.5rem] mb-6 md:mb-8 shadow-[0_20px_40px_-10px_rgba(10,25,47,0.3)] border border-blue-500/20 transform hover:rotate-6 transition-transform duration-500 group">
                <svg class="w-8 h-8 md:w-10 md:h-10 text-blue-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-[#0f1a3c] mb-4 md:mb-6 tracking-tighter uppercase leading-[1.1] md:leading-none">
                Unités de <span class="text-blue-600 italic">Recherche</span>
            </h2>

            <div class="flex items-center justify-center gap-2 mb-6 md:mb-8">
                <div class="w-12 md:w-16 h-1 bg-blue-600 rounded-full"></div>
                <div class="w-3 md:w-4 h-1 bg-blue-300 rounded-full"></div>
            </div>

            <p class="text-slate-500 text-base md:text-xl max-w-3xl mx-auto font-medium leading-relaxed italic px-2">
                Découvrez nos unités de recherche de pointe qui façonnent l'avenir de la science et de la technologie
            </p>
    </div>
    
    <!-- Grille des unités avec animations décalées -->
<section class="relative py-24 bg-[#020617] overflow-hidden">
    
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none" 
         style="background-image: linear-gradient(#3b82f6 1px, transparent 1px), linear-gradient(90deg, #3b82f6 1px, transparent 1px); background-size: 40px 40px;">
    </div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none">

        </div>

        <div class="max-w-7xl mx-auto px-12 md:px-24 relative z-10">
        
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach($units as $index => $u): ?>
                <div class="relative group flex flex-col h-full fade-in" 
                     style="animation: slideUp 0.8s cubic-bezier(0.2, 1, 0.3, 1) forwards; --delay: <?= $index ?>">
                    
                    <div class="relative aspect-[16/10] overflow-hidden rounded-t-2xl border-x border-t border-white/10">
                        <img 
                            src="<?= config('base_url') ?>/images/<?= htmlspecialchars($u['photo_path'], ENT_QUOTES) ?>" 
                            alt="<?= htmlspecialchars($u['title'], ENT_QUOTES) ?>" 
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a1229] via-transparent to-transparent"></div>
                    </div>

                    <div class="pt-6 px-6 pb-8 flex flex-col flex-grow bg-[#0a1229]/60 backdrop-blur-sm border-x border-b border-white/10 rounded-b-2xl shadow-2xl">
                        
                        <div class="flex items-start gap-3 mb-4">
                            <span class="text-[10px] font-mono font-bold text-blue-400 mt-1">0<?= $index + 1 ?></span>
                            <h3 class="text-lg font-bold text-white leading-tight tracking-tight uppercase group-hover:text-blue-400 transition-colors">
                                <?= htmlspecialchars($u['title'], ENT_QUOTES) ?>
                            </h3>
                        </div>
                        
                        <p class="text-slate-400 leading-relaxed text-sm font-medium mb-8 line-clamp-3 pl-4 border-l border-blue-500/30">
                            <?= htmlspecialchars($u['description_short'], ENT_QUOTES) ?>
                        </p>
                        
                        <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                            <a href="<?= config('base_url') ?>/unit/show/<?= $u['id'] ?>" 
                               class="inline-flex items-center px-5 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg font-bold text-[10px] uppercase tracking-widest transition-all duration-300 shadow-[0_0_20px_rgba(37,99,235,0.2)]">
                                Explorer
                            </a>
                            
                            <div class="text-right">
                                <p class="text-[8px] font-bold text-blue-400/50 uppercase tracking-widest mb-0.5">Réf_Id</p>
                                <p class="text-[10px] font-mono font-bold text-slate-300">LPT-<?= str_pad($u['id'], 3, '0', STR_PAD_LEFT) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

    <!-- Section statistiques optionnelle -->
    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg">
            <div class="text-3xl font-bold text-lapit-darkblue mb-2"><?= count($units) ?></div>
            <div class="text-gray-600 text-sm font-medium">Unités Actives</div>
        </div>
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg">
            <div class="text-3xl font-bold text-lapit-lightblue mb-2">100%</div>
            <div class="text-gray-600 text-sm font-medium">Recherche d'Excellence</div>
        </div>
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 text-center shadow-lg">
            <div class="text-3xl font-bold text-gradient mb-2">24/7</div>
            <div class="text-gray-600 text-sm font-medium">Innovation Continue</div>
        </div>
    </div>
</section>

<script>
// Animation au scroll avec décalage
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, index * 100);
        }
    });
}, observerOptions);

document.addEventListener('DOMContentLoaded', () => {
    // Observer les éléments fade-in
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));
    
    // Animation de la barre de titre
    const titleBar = document.querySelector('.w-32.h-1');
    if (titleBar) {
        titleBar.style.transform = 'scaleX(0)';
        titleBar.style.transformOrigin = 'left';
        titleBar.style.transition = 'transform 1s ease-out';
        
        setTimeout(() => {
            titleBar.style.transform = 'scaleX(1)';
        }, 800);
    }
    
    // Animation des cartes avec délai personnalisé
    const cards = document.querySelectorAll('.stagger-animation');
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
});

// Effet parallax léger sur les images des cartes
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const cards = document.querySelectorAll('.card-hover img');
    
    cards.forEach((img, index) => {
        const speed = 0.1 + (index % 3) * 0.05;
        const yPos = -(scrolled * speed);
        img.style.transform = `translateY(${yPos}px) scale(1)`;
    });
});
</script>

</body>
</html>