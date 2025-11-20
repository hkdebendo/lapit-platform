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

<section class="container mx-auto px-4 py-12 fade-in">
    <!-- En-tête -->
    <div class="text-center mb-12">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-2xl mb-4 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
        </div>
        <h2 class="text-4xl font-bold title-gradient mb-4">Unités de Recherche</h2>
        <div class="w-32 h-1 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue mx-auto rounded-full mb-4"></div>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
            Découvrez nos unités de recherche de pointe qui façonnent l'avenir de la science et de la technologie
        </p>
    </div>

    <!-- Grille des unités avec animations décalées -->
    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach($units as $index => $u): ?>
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden card-hover fade-in stagger-animation" 
                 style="--delay: <?= $index ?>">
                
                <!-- Image avec overlay et badge -->
                <div class="relative group">
                    <img 
                        src="<?= config('base_url') ?>/images/<?= htmlspecialchars($u['photo_path'], ENT_QUOTES) ?>" 
                        alt="<?= htmlspecialchars($u['title'], ENT_QUOTES) ?>" 
                        class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
                    >
                    <div class="absolute inset-0 image-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Badge de recherche -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur-sm text-lapit-darkblue px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                            Unité de Recherche
                        </span>
                    </div>
                    
                    <!-- Icône overlay au hover -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Contenu de la carte -->
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-xl font-bold text-gray-800 leading-tight flex-1">
                            <?= htmlspecialchars($u['title'], ENT_QUOTES) ?>
                        </h3>
                        <div class="ml-2 flex-shrink-0">
                            <div class="w-3 h-3 bg-green-400 rounded-full shadow-lg animate-pulse"></div>
                        </div>
                    </div>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                        <?= htmlspecialchars($u['description_short'], ENT_QUOTES) ?>
                    </p>
                    
                    <!-- Bouton avec design moderne -->
                    <div class="flex items-center justify-between">
                        <a 
                            href="<?= config('base_url') ?>/unit/show/<?= $u['id'] ?>" 
                            class="group inline-flex items-center px-6 py-3 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue text-white rounded-xl font-semibold text-sm btn-glow hover:from-lapit-darkblue hover:to-lapit-lightblue transition-all duration-300"
                        >
                            En savoir plus
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        
                        <!-- Indicateur de statut -->
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Active
                        </div>
                    </div>
                </div>

                <!-- Barre de progression décorative -->
                <div class="h-1 bg-gradient-to-r from-lapit-lightblue via-lapit-darkblue to-lapit-lightblue"></div>
            </div>
        <?php endforeach; ?>
    </div>

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