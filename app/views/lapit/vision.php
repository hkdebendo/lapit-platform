
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
<section class="container mx-auto px-4 py-8 fade-in">
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



<section class="container mx-auto px-4 py-12">
  <div class="bg-white rounded-lg shadow-lg p-8">
    <div class="flex items-start space-x-4 mb-6">
      <svg class="h-8 w-8 text-lapit-lightblue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
      </svg>
      <h2 class="text-3xl font-bold text-gray-800">Mission & Vision</h2>
    </div>

    <div class="space-y-8">
      <div>
        <h3 class="text-2xl font-semibold text-lapit-darkblue mb-2">Notre Mission</h3>
        <p class="text-gray-700 leading-relaxed">
          <?= nl2br(htmlspecialchars($mission, ENT_QUOTES)) ?>
        </p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold text-lapit-darkblue mb-2">Notre Vision</h3>
        <p class="text-gray-700 leading-relaxed">
          <?= nl2br(htmlspecialchars($vision, ENT_QUOTES)) ?>
        </p>
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
