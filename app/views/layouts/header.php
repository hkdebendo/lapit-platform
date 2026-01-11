<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaPIT - Laboratoire de Recherche de l'INSTI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
  <style>
    /* Animation fluide uniquement pour le mobile */
    #mobile-nav {
      transition: all 0.4s ease-in-out;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
    }
    #mobile-nav.open {
      max-height: 80vh;
      opacity: 1;
    }
    .m-submenu {
      transition: all 0.3s ease;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
    }
    .m-submenu.open {
      max-height: 300px;
      opacity: 1;
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-inter">
  
<nav id="main-header" class="flex flex-col lg:flex-row lg:h-[120px] fixed top-0 w-full z-30 bg-white lg:bg-transparent">
  <img src="<?= config('base_url') ?>/images/logo-lapit.png" alt="logo" 
       class="h-[60px] lg:h-[90px] absolute z-40 bg-white top-3 lg:top-4 left-[2%] transition-transform duration-300 hover:scale-110">
  
  <div class="w-full">
    <div class="bg-lapit-darkblue text-white p-[5px] flex justify-center">
      <ul class="text-sm hidden lg:flex items-center w-[70%] justify-around">
        <li class="text-5xl font-black">INSTI</li>
        <li class="w-[200px] text-justify">Institut Nationale Supérieur de Technologie Industrielle de Lokossa</li>
        <li class="w-[340px] h-[1px] bg-white"></li>
        <li><i class="fa-solid fa-user text-sm mr-[5px]"></i><span>Accès rapide</span></li>
        <li><i class="fa-solid fa-user text-sm mr-[5px]"></i><span>Nous écrire</span></li>
      </ul>
      <div class="lg:hidden flex justify-center w-[100%]">
        <ul class="flex lg:hidden items-center justify-around gap-4 text-[10px] py-1 pr-2">
          <li class="text-2xl font-black">INSTI</li>
          <li><i class="fa-solid fa-user mr-2"></i>Accès rapide</li>
          <li><i class="fa-solid fa-user mr-2"></i>Nous écrire</li>
        </ul>
      </div>
    </div>

    <div class="flex justify-center bg-[#fafafa] shadow-xl w-full">
      <ul class="hidden lg:flex items-center py-[14px] w-full justify-center gap-9 text-lg">
        <li><a href="<?= config('base_url') ?>" class="nav-link hover:border-b-2 py-[1px] hover:border-[#1e3a8a] hover:text-[#1e3a8a] transition duration-300">Acceuil</a></li>
        <li class="relative dropdown-item group">
          <a href="" class="hover:border-b-2 py-[1px] hover:border-[#1e3a8a] hover:text-[#1e3a8a] transition duration-300">LaPIT <i class="fa-solid fa-chevron-down text-sm"></i></a>
          <ul class="absolute left-0 mt-2 bg-white shadow-md rounded hidden group-hover:block dropdown-menu z-50 min-w-48">
            <li><a href="<?= config('base_url') ?>/direction" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Direction</a></li>
            <li><a href="<?= config('base_url') ?>/vision" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Mission & Vision</a></li>
            <li><a href="<?= config('base_url') ?>/unit" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Unités de recherche</a></li>
            <li><a href="<?= config('base_url') ?>/partner" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Laboratoires partenaires</a></li>
            <li><a href="<?= config('base_url') ?>/downloads" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Téléchargement</a></li>
          </ul>
        </li>
        <li><a href="<?= config('base_url') ?>/staff" class="nav-link hover:border-b-2 py-[1px] hover:border-[#1e3a8a] hover:text-[#1e3a8a] transition duration-300">Travaux des chercheurs</a></li>
        <li><a href="<?= config('base_url') ?>/project" class="nav-link hover:border-b-2 py-[1px] hover:border-[#1e3a8a] hover:text-[#1e3a8a] transition duration-300">Projects</a></li>
        <li class="relative dropdown-item group">
          <a href="" class="hover:border-b-2 py-[1px] hover:border-[#1e3a8a] hover:text-[#1e3a8a] transition duration-300">Actualites <i class="fa-solid fa-chevron-down text-sm"></i></a>
          <ul class="absolute left-0 mt-2 bg-white shadow-md rounded hidden group-hover:block dropdown-menu z-50 min-w-48">
            <li><a href="<?= config('base_url') ?>/news" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Actualités</a></li>
            <li><a href="<?= config('base_url') ?>/photos" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Photothèque</a></li>
            <li><a href="<?= config('base_url') ?>/videos" class="nav-link block px-4 py-2 hover:bg-gray-100 font-inter">Vidéothèque</a></li>
          </ul>
        </li>
        <li><a href="<?= config('base_url') ?>/contact" class="nav-link hover:border-b-2 py-[1px] hover:border-[#1e3a8a] transition duration-300">Contact</a></li>
      </ul>

      <div class="lg:hidden flex items-center justify-center ">
        <button onclick="toggleMobileMenu()" class="text-[#1e3a8a] text-3xl p-2">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </div>

  <img src="<?= config('base_url') ?>/images/logo-insti.png" alt="" 
       class="h-[70px] lg:h-[110px] z-40 bg-white rounded-full absolute right-[3%] lg:right-[5%] top-3 lg:top-2 transition-transform duration-300 hover:scale-110">

  <div id="mobile-nav" class="lg:hidden bg-white w-full border-t shadow-inner">
    <ul class="flex flex-col p-4 gap-4 font-medium text-gray-700">
      <li><a href="<?= config('base_url') ?>">Acceuil</a></li>
      <li>
        <div onclick="toggleSub('m-lapit')" class="flex justify-between items-center cursor-pointer">LaPIT <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300" id="icon-m-lapit"></i></div>
        <ul id="m-lapit" class="m-submenu pl-4 mt-2 space-y-2 border-l-2 border-gray-100">
          <li><a href="<?= config('base_url') ?>/direction">Direction</a></li>
          <li><a href="<?= config('base_url') ?>/vision">Mission & Vision</a></li>
          <li><a href="<?= config('base_url') ?>/unit">Unités de recherche</a></li>
          <li><a href="<?= config('base_url') ?>/partner">Laboratoires partenaires</a></li>
          <li><a href="<?= config('base_url') ?>/downloads">Téléchargement</a></li>
        </ul>
      </li>
      <li><a href="<?= config('base_url') ?>/staff">Travaux des chercheurs</a></li>
      <li><a href="<?= config('base_url') ?>/project">Projects</a></li>
      <li>
        <div onclick="toggleSub('m-actu')" class="flex justify-between items-center cursor-pointer">Actualités <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300" id="icon-m-actu"></i></div>
        <ul id="m-actu" class="m-submenu pl-4 mt-2 space-y-2 border-l-2 border-gray-100">
          <li><a href="<?= config('base_url') ?>/news">Actualités</a></li>
          <li><a href="<?= config('base_url') ?>/photos">Photothèque</a></li>
          <li><a href="<?= config('base_url') ?>/videos">Vidéothèque</a></li>
        </ul>
      </li>
      <li><a href="<?= config('base_url') ?>/contact">Contact</a></li>
    </ul>
  </div>
</nav>

<script>
function toggleMobileMenu() {
  document.getElementById('mobile-nav').classList.toggle('open');
}
function toggleSub(id) {
  const sub = document.getElementById(id);
  const icon = document.getElementById('icon-' + id);
  sub.classList.toggle('open');
  if(icon) icon.classList.toggle('rotate-180');
}
</script>

<script>
/* VOTRE SCRIPT ORIGINAL DESKTOP - AUCUN CHANGEMENT ICI */
document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('main-header');
  if (!header) return;

  const dropdownItems = header.querySelectorAll('.dropdown-item');
  const navLinks = header.querySelectorAll('.nav-link, .dropdown-item > a');

  const ACTIVE_CLASSES = ['border-b-2','border-[#1e3a8a]','text-[#1e3a8a]','font-bold'];

  const clearActive = () => {
    navLinks.forEach(l => l.classList.remove(...ACTIVE_CLASSES));
  };

  const setActive = (link) => {
    if (!link) return;
    link.classList.add(...ACTIVE_CLASSES);
    const parentDropdown = link.closest('.dropdown-item');
    if (parentDropdown) {
      const parentLink = parentDropdown.querySelector(':scope > a');
      if (parentLink) parentLink.classList.add(...ACTIVE_CLASSES);
    }
  };

  const normalizePath = (href) => {
    try {
      const url = new URL(href, window.location.origin);
      return url.pathname.replace(/\/+$/, '');
    } catch {
      return href;
    }
  };

  const saved = localStorage.getItem('activeNavPath');
  const currentPath = normalizePath(window.location.pathname);

  let matched = false;
  if (saved) {
    const savedPath = normalizePath(saved);
    const link = Array.from(navLinks).find(l => normalizePath(l.getAttribute('href')) === savedPath);
    if (link) {
      clearActive();
      setActive(link);
      matched = true;
    }
  }
  if (!matched) {
    const link = Array.from(navLinks).find(l => normalizePath(l.getAttribute('href')) === currentPath);
    if (link) {
      clearActive();
      setActive(link);
    }
  }

  dropdownItems.forEach(item => {
    const trigger = item.querySelector(':scope > a');
    const menu = item.querySelector(':scope > .dropdown-menu');
    if (!trigger || !menu) return;

    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      dropdownItems.forEach(other => {
        if (other !== item) {
          const otherMenu = other.querySelector(':scope > .dropdown-menu');
          if (otherMenu) otherMenu.classList.add('hidden');
        }
      });
      menu.classList.toggle('hidden');
    });

    menu.querySelectorAll('a').forEach(child => {
      child.addEventListener('click', () => {
        const childHref = child.getAttribute('href');
        localStorage.setItem('activeNavPath', childHref);
        clearActive();
        setActive(child);
      });
    });
  });

  navLinks.forEach(link => {
    if (link.closest('.dropdown-menu')) return;
    link.addEventListener('click', () => {
      const href = link.getAttribute('href');
      localStorage.setItem('activeNavPath', href);
      clearActive();
      setActive(link);
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown-item')) {
      dropdownItems.forEach(item => {
        const menu = item.querySelector(':scope > .dropdown-menu');
        if (menu) menu.classList.add('hidden');
      });
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      dropdownItems.forEach(item => {
        const menu = item.querySelector(':scope > .dropdown-menu');
        if (menu) menu.classList.add('hidden');
      });
    }
  });
});
</script>

</body>
</html>