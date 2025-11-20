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

<section class="container mx-auto px-4 py-8 lg:py-12">
    <!-- En-tête moderne avec statistiques -->
    <div class="text-center mb-12 fade-in">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-2xl mb-6 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
        </div>
        
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold title-gradient mb-4">
            Laboratoires Partenaires
        </h2>
        
        <div class="w-32 h-1 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue mx-auto rounded-full mb-6"></div>
        
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed mb-8">
            Découvrez notre réseau de partenaires académiques et scientifiques qui contribuent à l'excellence de nos recherches
        </p>

        <!-- Mini statistiques -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto">
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                <div class="text-2xl font-bold text-lapit-darkblue"><?= count($partnersList) ?></div>
                <div class="text-sm text-gray-600 font-medium">Partenaires Actifs</div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                <div class="text-2xl font-bold text-lapit-lightblue">100%</div>
                <div class="text-sm text-gray-600 font-medium">Collaboration</div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                <div class="text-2xl font-bold title-gradient">∞</div>
                <div class="text-sm text-gray-600 font-medium">Opportunités</div>
            </div>
        </div>
    </div>

    <!-- Grille des partenaires -->
    <div class="grid gap-6 lg:gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach($partnersList as $index => $p): ?>
            <div class="partner-card rounded-2xl p-6 text-center fade-in stagger-animation" 
                 style="--delay: <?= $index ?>">
                
                <!-- Badge de partenariat -->
                <div class="absolute top-4 right-4">
                    <div class="partnership-badge w-3 h-3 rounded-full"></div>
                </div>

                <!-- Logo avec container stylisé -->
                <div class="logo-container w-20 h-20 sm:w-24 sm:h-24 mx-auto mb-6 rounded-2xl flex items-center justify-center p-3">
                    <img 
                        src="<?= config('base_url') ?>/images/<?= htmlspecialchars($p['logo_path'], ENT_QUOTES) ?>" 
                        alt="<?= htmlspecialchars($p['name'], ENT_QUOTES) ?>" 
                        class="w-full h-full object-contain"
                    >
                </div>

                <!-- Nom du partenaire -->
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-4 leading-tight">
                    <?= htmlspecialchars($p['name'], ENT_QUOTES) ?>
                </h3>

                <!-- Informations détaillées -->
                <div class="space-y-3 text-sm">
                    <?php if(!empty($p['university'])): ?>
                        <div class="bg-blue-50 rounded-lg p-3 border-l-4 border-lapit-lightblue">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-lapit-lightblue mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <div class="text-left">
                                    <div class="font-semibold text-gray-800 text-xs">Université</div>
                                    <div class="text-gray-600"><?= htmlspecialchars($p['university'], ENT_QUOTES) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Contact principal -->
                    <div class="bg-gray-50 rounded-lg p-3">
                        <div class="flex items-center mb-2">
                            <svg class="w-4 h-4 text-lapit-darkblue mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="font-semibold text-gray-800 text-xs">Contact Principal</span>
                        </div>
                        <div class="text-gray-700 font-medium">
                            <?= htmlspecialchars($p['contact_name'], ENT_QUOTES) ?>
                        </div>
                    </div>

                    <!-- Email avec style moderne -->
                    <div class="bg-green-50 rounded-lg p-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-xs font-semibold text-gray-800">Email</span>
                            </div>
                        </div>
                        <a href="mailto:<?= htmlspecialchars($p['contact_email'], ENT_QUOTES) ?>" 
                           class="contact-link text-lapit-lightblue hover:text-lapit-darkblue font-medium text-sm block mt-1 truncate">
                            <?= htmlspecialchars($p['contact_email'], ENT_QUOTES) ?>
                        </a>
                    </div>

                    <!-- Téléphone si disponible -->
                    <?php if(!empty($p['contact_phone'])): ?>
                        <div class="bg-purple-50 rounded-lg p-3">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <div class="text-left">
                                    <div class="text-xs font-semibold text-gray-800">Téléphone</div>
                                    <div class="text-gray-700 text-sm"><?= htmlspecialchars($p['contact_phone'], ENT_QUOTES) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Bouton site web  -->
                <?php if(!empty($p['website_url'])): ?>
                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <a href="<?= htmlspecialchars($p['website_url'], ENT_QUOTES) ?>" 
                           target="_blank" 
                           class="website-btn inline-flex items-center px-4 py-2 text-white rounded-xl font-semibold text-sm shadow-lg">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0 9c-1.657 0-3-4.03-3-9s1.343-9 3-9m0 18c1.657 0 3-4.03 3-9s-1.343-9-3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                            Visiter le site
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
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