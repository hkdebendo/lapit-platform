
<head>
    
    <title>LaPIT - Laboratoire</title>
    
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
        .image-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-hover:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .section-divider {
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
            height: 1px;
            margin: 3rem 0;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

<!-- Section 1: Structuration du Laboratoire -->
<section class="container mx-auto px-4 py-8 fade-in">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Structuration du Laboratoire</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
    </div>
    
    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full image-hover">
            <div class="relative">
                <img 
                    src="<?= config('base_url') ?>/images/lapit_structure.png" 
                    alt="Structuration du Laboratoire LaPIT" 
                    class="w-full h-96 object-cover"
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
            <div class="p-6">
                <p class="text-gray-600 text-center leading-relaxed">
                    Cette image présente l'organisation structurelle complète du Laboratoire de Physique et d'Informatique Théorique (LaPIT), 
                    illustrant les différents départements, axes de recherche et interactions entre les équipes.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Section 2: Composition du Laboratoire -->
<section class="container mx-auto px-4 py-8 fade-in">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Composition du Laboratoire</h2>
        <div class="w-24 h-1 bg-green-600 mx-auto rounded-full"></div>
    </div>
    
    <div class="grid gap-8 lg:grid-cols-2">
        <!-- Diagramme 1: Répartition par grades -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover">
            <div class="relative">
                <img 
                    src="<?= config('base_url') ?>/images/grade.png" 
                    alt="Répartition des chercheurs permanents de LaPIT en fonction des grades" 
                    class="w-full h-64 object-cover"
                    loading="lazy"
                >
                <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                    Grades
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Répartition par Grades</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Diagramme circulaire montrant la répartition des chercheurs permanents de LaPIT 
                    selon leurs grades académiques (Professeur, Maître de Conférences, Maître-Assistant, etc.).
                </p>
            </div>
        </div>

        <!-- Diagramme 2: Répartition par genre -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover">
            <div class="relative">
                <img 
                    src="<?= config('base_url') ?>/images/genre.png" 
                    alt="Répartition des chercheurs permanents de LaPIT selon l'approche genre" 
                    class="w-full h-64 object-cover"
                    loading="lazy"
                >
                <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                    Genre
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Répartition par Genre</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Diagramme circulaire illustrant la répartition des chercheurs permanents de LaPIT 
                    selon l'approche genre, favorisant la parité et l'inclusion dans la recherche.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Section 3: Direction du LaPIT -->
<section class="container mx-auto px-4 py-8 fade-in">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Direction du LaPIT</h2>
        <div class="w-24 h-1 bg-red-600 mx-auto rounded-full"></div>
    </div>

    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Exemple de cartes administrateurs  -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover transform transition-all duration-300 hover:shadow-xl">
            <img 
                src="https://via.placeholder.com/300x200/f8f9fa/6c757d?text=Directeur" 
                alt="Directeur du LaPIT" 
                class="w-full h-48 object-cover"
            >
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-1 text-gray-800">Dr. Exemple Directeur</h3>
                <p class="text-gray-600 mb-2 font-medium">Directeur du Laboratoire</p>
                <p class="text-sm text-gray-500 mb-1">directeur@lapit.edu</p>
                <p class="text-sm text-gray-500">+229 XX XX XX XX</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover transform transition-all duration-300 hover:shadow-xl">
            <img 
                src="https://via.placeholder.com/300x200/f8f9fa/6c757d?text=Directeur+Adjoint" 
                alt="Directeur Adjoint du LaPIT" 
                class="w-full h-48 object-cover"
            >
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-1 text-gray-800">Dr. Exemple Adjoint</h3>
                <p class="text-gray-600 mb-2 font-medium">Directeur Adjoint</p>
                <p class="text-sm text-gray-500 mb-1">adjoint@lapit.edu</p>
                <p class="text-sm text-gray-500">+229 XX XX XX XX</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover transform transition-all duration-300 hover:shadow-xl">
            <img 
                src="https://via.placeholder.com/300x200/f8f9fa/6c757d?text=Secrétaire+Scientifique" 
                alt="Secrétaire Scientifique du LaPIT" 
                class="w-full h-48 object-cover"
            >
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-1 text-gray-800">Dr. Exemple Secrétaire</h3>
                <p class="text-gray-600 mb-2 font-medium">Secrétaire Scientifique</p>
                <p class="text-sm text-gray-500 mb-1">secretaire@lapit.edu</p>
                <p class="text-sm text-gray-500">+229 XX XX XX XX</p>
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

