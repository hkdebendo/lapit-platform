
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
<!--Section 3 -->
<section class="container mx-auto px-4 py-8 fade-in">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Direction du LaPIT</h2>
        <div class="w-24 h-1 bg-red-600 mx-auto rounded-full"></div>
    </div>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 align-items-stretch">
        
        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover transform transition-all duration-300 hover:shadow-xl flex flex-col">
            <div class="relative w-full h-96"> <img 
                    src="<?= config('base_url') ?>/images/dr.jpg" 
                    alt="Directeur du LaPIT" 
                    class="w-full h-full object-cover object-top"
                >
                </div>
            
            <div class="p-6 flex-grow text-center md:text-left">
                <h3 class="text-2xl font-bold mb-2 text-gray-800">Prof Alain Alexis C. N. ADOMOU</h3>
                <div class="inline-block bg-red-100 text-red-800 text-sm font-semibold px-3 py-1 rounded-full mb-3">
                    Directeur du Laboratoire
                </div>
                <div class="space-y-1 text-gray-600">
                    <p class="font-medium text-lg">Professeur Titulaire</p>
                    <p class="text-sm hover:text-red-600 transition-colors">
                        <a href="mailto:adomounicaise@unstim.bj">adomounicaise@unstim.bj</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden image-hover transform transition-all duration-300 hover:shadow-xl flex flex-col">
            <div class="relative w-full h-96"> <img 
                    src="<?= config('base_url') ?>/images/dra.jpg" 
                    alt="Directeur Adjoint du LaPIT" 
                    class="w-full h-full object-cover object-top"
                >
            </div>
            
            <div class="p-6 flex-grow text-center md:text-left">
                <h3 class="text-2xl font-bold mb-2 text-gray-800">MC Gildas David Farid ADAMON</h3>
                <div class="inline-block bg-gray-100 text-gray-800 text-sm font-semibold px-3 py-1 rounded-full mb-3">
                    Directeur Adjoint
                </div>
                <div class="space-y-1 text-gray-600">
                    <p class="font-medium text-lg">Maître de Conférences</p>
                    <p class="text-sm hover:text-red-600 transition-colors">
                        <a href="mailto:adamon.david@unstim.bj">adamon.david@unstim.bj</a>
                    </p>
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

