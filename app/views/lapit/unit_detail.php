<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPIT - Détail Unité de Recherche</title>
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
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .title-gradient {
            background: linear-gradient(135deg, #1E40AF, #3B82F6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .image-overlay {
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(30, 64, 175, 0.1));
        }
        .member-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
        }
        .member-card:hover {
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.1);
        }
        .section-divider {
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
            height: 1px;
            margin: 2rem 0;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">

<section class="container mx-auto px-4 py-8 lg:py-12">
    <!-- En-tête avec breadcrumb et titre -->
    <div class="fade-in mb-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-sm text-gray-600 mb-4">
            <a href="<?= config('base_url') ?>" class="hover:text-lapit-lightblue transition-colors">Accueil</a>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <a href="<?= config('base_url') ?>/unit" class="hover:text-lapit-lightblue transition-colors">Unités de Recherche</a>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-lapit-darkblue font-medium">Détails</span>
        </nav>

        <!-- Titre principal  -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
            <div class="flex-1">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold title-gradient mb-4 leading-tight">
                    <?= htmlspecialchars($unit['title'], ENT_QUOTES) ?>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-full"></div>
            </div>
            
            <!-- Badge statut -->
            <div class="mt-4 sm:mt-0 sm:ml-6">
                <span class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                    Unité Active
                </span>
            </div>
        </div>
    </div>

    <!-- Section principale avec image et description -->
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-12 fade-in card-hover">
        <div class="relative">
            <img 
                src="<?= config('base_url') ?>/images/<?= htmlspecialchars($unit['photo_path'], ENT_QUOTES) ?>" 
                alt="<?= htmlspecialchars($unit['title'], ENT_QUOTES) ?>" 
                class="w-full h-48 sm:h-60 lg:h-80 object-cover"
            >
            <div class="absolute inset-0 image-overlay"></div>
            
            <!-- Badge sur l'image -->
            <div class="absolute top-4 left-4">
                <span class="bg-white/90 backdrop-blur-sm text-lapit-darkblue px-3 py-2 rounded-lg text-sm font-semibold shadow-lg">
                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Unité de Recherche
                </span>
            </div>
        </div>
        
        <div class="p-6 sm:p-8 lg:p-10">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-xl flex items-center justify-center mr-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-800">Thématiques de recherche</h3>
            </div>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-700 leading-relaxed text-base sm:text-lg">
                    <?= nl2br(htmlspecialchars($unit['description_full'], ENT_QUOTES)) ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Section Technologies & Perspectives -->
    <div class="grid gap-6 lg:gap-8 sm:grid-cols-1 lg:grid-cols-2 mb-12 fade-in">
        <!-- Technologies & Innovations -->
        <div class="bg-white shadow-lg rounded-2xl p-6 sm:p-8 card-hover">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h4 class="text-xl sm:text-2xl font-bold text-gray-800">Technologies & Innovations</h4>
            </div>
            <div class="border-l-4 border-blue-500 pl-4">
                <p class="text-gray-700 leading-relaxed">
                    <?= nl2br(htmlspecialchars($unit['technologies'] ?? 'Pas d\'informations pour le moment.', ENT_QUOTES)) ?>
                </p>
            </div>
        </div>

        <!-- Perspectives -->
        <div class="bg-white shadow-lg rounded-2xl p-6 sm:p-8 card-hover">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h4 class="text-xl sm:text-2xl font-bold text-gray-800">Perspectives</h4>
            </div>
            <div class="border-l-4 border-green-500 pl-4">
                <p class="text-gray-700 leading-relaxed">
                    <?= nl2br(htmlspecialchars($unit['perspectives'] ?? 'Pas d\'informations pour le moment.', ENT_QUOTES)) ?>
                </p>
            </div>
        </div>
    </div>

    <div class="section-divider"></div>

    <!-- Section Membres de l'unité -->
    <div class="fade-in">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-xl flex items-center justify-center mr-4">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-800">Membres de l'unité</h3>
        </div>

        <div class="grid gap-4 sm:gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php foreach($unitStaff as $index => $staff): ?>
                <div class="member-card rounded-xl p-4 sm:p-6 card-hover fade-in" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="flex items-start">
                        <div class="w-10 h-10 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <span class="text-white font-semibold text-sm">
                                <?= strtoupper(substr(htmlspecialchars($staff['first_name'], ENT_QUOTES), 0, 1)) ?><?= strtoupper(substr(htmlspecialchars($staff['last_name'], ENT_QUOTES), 0, 1)) ?>
                            </span> 
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-bold text-gray-800 text-sm sm:text-base truncate">
                                <?= htmlspecialchars($staff['first_name'].' '.$staff['last_name'], ENT_QUOTES) ?>
                            </p>
                            <p class="text-gray-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                <?= htmlspecialchars($staff['role_in_unit'], ENT_QUOTES) ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Indicateur de rôle -->
                    <div class="mt-3 pt-3 border-t border-gray-100">
                        <span class="inline-flex items-center px-2 py-1 bg-lapit-lightblue/10 text-lapit-darkblue rounded-full text-xs font-medium">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Membre actif
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
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
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, index * 150);
        }
    });
}, observerOptions);

document.addEventListener('DOMContentLoaded', () => {
    // Observer les éléments fade-in
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));
    
    // Animation de la barre sous le titre
    const titleBar = document.querySelector('.w-24.h-1');
    if (titleBar) {
        titleBar.style.transform = 'scaleX(0)';
        titleBar.style.transformOrigin = 'left';
        titleBar.style.transition = 'transform 0.8s ease-out';
        
        setTimeout(() => {
            titleBar.style.transform = 'scaleX(1)';
        }, 600);
    }
    
    // Animation décalée pour les cartes des membres
    const memberCards = document.querySelectorAll('.member-card');
    memberCards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('visible');
        }, 1000 + (index * 100));
    });
});

// Parallax léger sur l'image principale
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const mainImage = document.querySelector('.bg-white.shadow-xl img');
    
    if (mainImage) {
        const speed = 0.2;
        const yPos = -(scrolled * speed);
        mainImage.style.transform = `translateY(${yPos}px)`;
    }
});
</script>

</body>
</html>