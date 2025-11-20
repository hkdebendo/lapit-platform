<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaPIT - Laboratoire de Recherche de l'INSTI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'lapit-darkblue': '#1e3a8a',
            'lapit-lightblue': '#3b82f6',
            'lapit-yellow': '#fbbf24'
          },
          fontFamily: {
            'inter': ['Inter', 'sans-serif'],
            'poppins': ['Poppins', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white text-gray-800 font-inter">
  <!-- Bande supérieure bleu sombre -->
  <header>
    <div class="bg-lapit-darkblue text-white px-4 py-2 flex items-center justify-between">
      <div class="flex items-center space-x-2">
        <span class="font-semibold">Laboratoire des Procédés et de l'Innovation <br> Technologique (LaPIT)</span>
      </div>
      <div class="hidden md:block">
        <input type="text" placeholder="Rechercher..." class="px-2 py-1 rounded text-gray-800">
      </div>
      <div>
        <a href="<?= config('base_url') ?>/auth/login" class="flex items-center space-x-1 hover:text-lapit-yellow">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"/></svg>
          <span class="hidden sm:inline">Se connecter</span>
        </a>
      </div>
    </div>
    <!-- Navbar blanche -->
    <nav class="bg-white shadow">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-center py-4">
          <div class="flex items-center justify-between w-full max-w-6xl">
            <div class="flex items-center">
              <img src="<?= config('base_url') ?>/images/logo-lapit.png" alt="Logo LaPIT" class="h-14">
            </div>
            
            <div class="flex items-center space-x-8">
              <ul class="hidden lg:flex space-x-8">
                <li><a href="<?= config('base_url') ?>" class="hover:text-lapit-lightblue font-medium font-poppins transition-colors">Accueil</a></li>
                <li class="relative dropdown-item">
                  <a href="#" class="hover:text-lapit-lightblue dropdown-trigger flex items-center font-medium font-poppins transition-colors">
                    LaPIT
                    <svg class="ml-1 h-4 w-4 transition-transform dropdown-arrow" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                  </a>
                  <ul class="absolute left-0 mt-2 bg-white shadow-md rounded hidden dropdown-menu z-50 min-w-48">
                    <li><a href="<?= config('base_url') ?>/direction" class="block px-4 py-2 hover:bg-gray-100 font-inter">Direction</a></li>
                    <li><a href="<?= config('base_url') ?>/vision" class="block px-4 py-2 hover:bg-gray-100 font-inter">Mission & Vision</a></li>
                    <li><a href="<?= config('base_url') ?>/unit" class="block px-4 py-2 hover:bg-gray-100 font-inter">Unités de recherche</a></li>
                    <li><a href="<?= config('base_url') ?>/partner" class="block px-4 py-2 hover:bg-gray-100 font-inter">Laboratoires partenaires</a></li>
                    <li><a href="<?= config('base_url') ?>/downloads" class="block px-4 py-2 hover:bg-gray-100 font-inter">Téléchargement</a></li>
                  </ul>
                </li>
                <li><a href="<?= config('base_url') ?>/staff" class="hover:text-lapit-lightblue font-medium font-poppins transition-colors">Travaux des Chercheurs</a></li>
                <li><a href="<?= config('base_url') ?>/project" class="hover:text-lapit-lightblue font-medium font-poppins transition-colors">Projets</a></li>
                <li class="relative dropdown-item">
                  <a href="#" class="hover:text-lapit-lightblue dropdown-trigger flex items-center font-medium font-poppins transition-colors">
                    Actualités
                    <svg class="ml-1 h-4 w-4 transition-transform dropdown-arrow" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                  </a>
                  <ul class="absolute left-0 mt-2 bg-white shadow-md rounded hidden dropdown-menu z-50 min-w-48">
                    <li><a href="<?= config('base_url') ?>/news" class="block px-4 py-2 hover:bg-gray-100 font-inter">Actualités</a></li>
                    <li><a href="<?= config('base_url') ?>/photos" class="block px-4 py-2 hover:bg-gray-100 font-inter">Photothèque</a></li>
                    <li><a href="<?= config('base_url') ?>/videos" class="block px-4 py-2 hover:bg-gray-100 font-inter">Vidéothèque</a></li>
                  </ul>
                </li>
                <li><a href="<?= config('base_url') ?>/contact" class="hover:text-lapit-lightblue font-medium font-poppins transition-colors">Contact</a></li>
              </ul>
              
              <!-- Menu mobile -->
              <button class="lg:hidden flex flex-col justify-center items-center w-8 h-8 mobile-menu-btn">
                <span class="block w-6 h-0.5 bg-gray-700 mb-1 transition-all duration-300"></span>
                <span class="block w-6 h-0.5 bg-gray-700 mb-1 transition-all duration-300"></span>
                <span class="block w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
              </button>
            </div>
            
            <div class="flex items-center">
              <img src="<?= config('base_url') ?>/images/logo-insti.png" alt="Logo INSTI" class="h-14">
            </div>
          </div>
        </div>
        
        <!-- Menu mobile déroulant -->
        <div class="lg:hidden mobile-menu hidden">
          <div class="py-4 border-t">
            <!-- Barre de recherche mobile -->
            <div class="mb-4 md:hidden">
              <input type="text" placeholder="Rechercher..." class="w-full px-3 py-2 border rounded text-gray-800">
            </div>
            
            <ul class="space-y-2">
              <li><a href="<?= config('base_url') ?>" class="block py-2 hover:text-lapit-lightblue font-medium font-poppins">Accueil</a></li>
              <li class="mobile-dropdown">
                <a href="#" class="flex items-center justify-between py-2 hover:text-lapit-lightblue mobile-dropdown-trigger font-medium font-poppins">
                  LaPIT
                  <svg class="h-4 w-4 transition-transform mobile-dropdown-arrow" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                  </svg>
                </a>
                <ul class="hidden mobile-dropdown-menu ml-4 mt-2 space-y-1">
                  <li><a href="<?= config('base_url') ?>/direction" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Direction</a></li>
                  <li><a href="<?= config('base_url') ?>/vision" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Mission & Vision</a></li>
                  <li><a href="<?= config('base_url') ?>/unit" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Unités de recherche</a></li>
                  <li><a href="<?= config('base_url') ?>/partner" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Laboratoires partenaires</a></li>
                  <li><a href="<?= config('base_url') ?>/downloads" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Téléchargement</a></li>
                </ul>
              </li>
              <li><a href="<?= config('base_url') ?>/staff" class="block py-2 hover:text-lapit-lightblue font-medium font-poppins">Travaux des Chercheurs</a></li>
              <li><a href="<?= config('base_url') ?>/project" class="block py-2 hover:text-lapit-lightblue font-medium font-poppins">Projets</a></li>
              <li class="mobile-dropdown">
                <a href="#" class="flex items-center justify-between py-2 hover:text-lapit-lightblue mobile-dropdown-trigger font-medium font-poppins">
                  Actualités
                  <svg class="h-4 w-4 transition-transform mobile-dropdown-arrow" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                  </svg>
                </a>
                <ul class="hidden mobile-dropdown-menu ml-4 mt-2 space-y-1">
                  <li><a href="<?= config('base_url') ?>/news" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Actualités</a></li>
                  <li><a href="<?= config('base_url') ?>/photos" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Photothèque</a></li>
                  <li><a href="<?= config('base_url') ?>/videos" class="block py-1 text-sm text-gray-600 hover:text-lapit-lightblue font-inter">Vidéothèque</a></li>
                </ul>
              </li>
              <li><a href="<?= config('base_url') ?>/contact" class="block py-2 hover:text-lapit-lightblue font-medium font-poppins">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Gestion des dropdowns desktop
      const dropdownItems = document.querySelectorAll('.dropdown-item');
      
      dropdownItems.forEach(item => {
        const trigger = item.querySelector('.dropdown-trigger');
        const menu = item.querySelector('.dropdown-menu');
        const arrow = item.querySelector('.dropdown-arrow');
        
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          
          // Fermer tous les autres menus
          dropdownItems.forEach(otherItem => {
            if (otherItem !== item) {
              const otherMenu = otherItem.querySelector('.dropdown-menu');
              const otherArrow = otherItem.querySelector('.dropdown-arrow');
              otherMenu.classList.add('hidden');
              otherArrow.classList.remove('rotate-180');
            }
          });
          
          // Toggle le menu actuel
          if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            arrow.classList.add('rotate-180');
          } else {
            menu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
          }
        });
      });
      
      // Fermer les menus en cliquant ailleurs
      document.addEventListener('click', function() {
        dropdownItems.forEach(item => {
          const menu = item.querySelector('.dropdown-menu');
          const arrow = item.querySelector('.dropdown-arrow');
          menu.classList.add('hidden');
          arrow.classList.remove('rotate-180');
        });
      });
      
      // Menu mobile
      const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
      const mobileMenu = document.querySelector('.mobile-menu');
      const mobileMenuSpans = mobileMenuBtn.querySelectorAll('span');
      
      mobileMenuBtn.addEventListener('click', function() {
        if (mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.remove('hidden');
          // Animation hamburger vers X
          mobileMenuSpans[0].classList.add('rotate-45', 'translate-y-2');
          mobileMenuSpans[1].classList.add('opacity-0');
          mobileMenuSpans[2].classList.add('-rotate-45', '-translate-y-2');
        } else {
          mobileMenu.classList.add('hidden');
          // Animation X vers hamburger
          mobileMenuSpans[0].classList.remove('rotate-45', 'translate-y-2');
          mobileMenuSpans[1].classList.remove('opacity-0');
          mobileMenuSpans[2].classList.remove('-rotate-45', '-translate-y-2');
        }
      });
      
      // Dropdowns mobile
      const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
      
      mobileDropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.mobile-dropdown-trigger');
        const menu = dropdown.querySelector('.mobile-dropdown-menu');
        const arrow = dropdown.querySelector('.mobile-dropdown-arrow');
        
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          
          if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            arrow.classList.add('rotate-180');
          } else {
            menu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
          }
        });
      });
    });
  </script>
