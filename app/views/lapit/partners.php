<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPIT - Laboratoires Partenaires</title>
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
        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .partner-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(59, 130, 246, 0.15);
            border-color: rgba(59, 130, 246, 0.3);
        }
        .partner-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3B82F6, #1E40AF);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .partner-card:hover::before {
            transform: scaleX(1);
        }
        .logo-container {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border: 2px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
        }
        .partner-card:hover .logo-container {
            border-color: rgba(59, 130, 246, 0.3);
            background: linear-gradient(135deg, #ffffff 0%, #f0f8ff 100%);
        }
        .title-gradient {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .contact-link {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .contact-link:hover {
            transform: translateX(4px);
        }
        .website-btn {
            background: linear-gradient(135deg, #3B82F6, #1E40AF);
            transition: all 0.3s ease;
        }
        .website-btn:hover {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        }
        .stagger-animation {
            animation-delay: calc(var(--delay) * 0.1s);
        }
        .partnership-badge {
            background: linear-gradient(135deg, #10b981, #059669);
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">

<section class="container mx-auto px-4 mt-[26%] lg:mt-[10%]  lg:py-12 mt-[10%]">
    <!-- En-tête moderne avec statistiques -->
    <div class="text-center mb-20 fade-in">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-lapit-lightblue to-lapit-darkblue rounded-[2rem] mb-8 shadow-2xl shadow-lapit-darkblue/20 ring-4 ring-white">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
        </div>
        
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black title-gradient mb-6 tracking-tight">
            Laboratoires Partenaires
        </h2>
        
        <div class="flex justify-center mb-8">
            <div class="w-24 h-1.5 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-full opacity-80"></div>
        </div>
        
        <p class="text-slate-500 text-lg sm:text-xl max-w-2xl mx-auto leading-relaxed mb-12 font-medium">
            Découvrez notre réseau de partenaires académiques et scientifiques qui contribuent à l'excellence de nos recherches
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto px-4">
            
            <div class="group bg-blue-50/50 backdrop-blur-sm rounded-[1.8rem] p-6 border border-blue-100 shadow-sm hover:shadow-blue-200/50 transition-all duration-300">
                <div class="text-3xl font-black text-blue-700 mb-1 group-hover:scale-110 transition-transform tracking-tighter">
                    <?= count($partnersList) ?>
                </div>
                <div class="text-[10px] text-blue-900/60 font-black uppercase tracking-[0.2em]">Partenaires Actifs</div>
            </div>

            <div class="group bg-indigo-50/50 backdrop-blur-sm rounded-[1.8rem] p-6 border border-indigo-100 shadow-sm hover:shadow-indigo-200/50 transition-all duration-300">
                <div class="text-3xl font-black text-indigo-700 mb-1 group-hover:scale-110 transition-transform tracking-tighter">
                    100%
                </div>
                <div class="text-[10px] text-indigo-900/60 font-black uppercase tracking-[0.2em]">Collaboration</div>
            </div>

            <div class="group bg-emerald-50/50 backdrop-blur-sm rounded-[1.8rem] p-6 border border-emerald-100 shadow-sm hover:shadow-emerald-200/50 transition-all duration-300">
                <div class="text-4xl font-black text-emerald-700 mb-1 group-hover:scale-110 transition-transform leading-none">
                    ∞
                </div>
                <div class="text-[10px] text-emerald-900/60 font-black uppercase tracking-[0.2em]">Opportunités</div>
            </div>

        </div>
    </div>

    <!-- Grille des partenaires -->
<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach($partnersList as $index => $p): ?>
        <div class="group bg-white border border-slate-200 rounded-xl p-8 transition-all duration-300 hover:border-blue-500 hover:shadow-xl fade-in shadow-sm relative overflow-hidden" 
             style="--delay: <?= $index ?>">
            
            <div class="absolute top-0 left-0 w-full h-1 bg-slate-100 group-hover:bg-blue-500 transition-colors"></div>

            <div class="h-24 w-full flex items-center justify-center mb-8 bg-white">
                <img 
                    src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['logo_path']?? "", ENT_QUOTES) ?>" 
                    alt="<?= htmlspecialchars($p['name'], ENT_QUOTES) ?>" 
                    class="max-h-full max-w-[160px] object-contain transition-transform duration-500 group-hover:scale-105"
                >
            </div>

            <div class="text-center mb-8">
                <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight leading-tight min-h-[3rem] flex items-center justify-center">
                    <?= htmlspecialchars($p['name']?? "", ENT_QUOTES) ?>
                </h3>
            </div>

            <div class="space-y-3 border-t border-slate-50 pt-6">
                <?php if(!empty($p['university'])): ?>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <div class="min-w-0">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Institution</p>
                            <p class="text-xs font-bold text-slate-700 truncate"><?= htmlspecialchars($p['university']?? "", ENT_QUOTES) ?></p>
                        </div>
                    </div>
                <?php endif; ?>

               
            </div>

            <div class="mt-8 grid grid-cols-2 gap-3">
                
                
                <?php if(!empty($p['website_url'])): ?>
                    <a href="<?= htmlspecialchars($p['website_url']?? "", ENT_QUOTES) ?>" target="_blank"
                       class="flex items-center justify-center gap-2 py-2.5 bg-slate-900 text-white rounded-lg text-[10px] font-black uppercase tracking-widest hover:bg-blue-700 transition-all">
                        Explorer
                    </a>
                <?php endif; ?>
            </div>

        </div>
    <?php endforeach; ?>
</div>
    <!-- Section call-to-action -->
    <div class="mt-16 text-center fade-in">
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl max-w-2xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Rejoignez Notre Réseau</h3>
            <p class="text-gray-600 mb-6">
                Intéressé par un partenariat avec le LaPIT ? Contactez-nous pour explorer les opportunités de collaboration.
            </p>
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous Contacter
            </div>
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
    
    // Animation décalée des cartes
    const partnerCards = document.querySelectorAll('.stagger-animation');
    partnerCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
});

// Effet de parallax léger
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const logos = document.querySelectorAll('.logo-container img');
    
    logos.forEach((logo, index) => {
        const speed = 0.05 + (index % 3) * 0.02;
        const yPos = -(scrolled * speed);
        logo.style.transform = `translateY(${yPos}px)`;
    });
});
</script>

</body>
</html>