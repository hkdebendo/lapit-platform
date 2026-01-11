
<footer class="bg-[#1e3a8a] text-white pt-20 px-[10%] lg:px-[5%] pb-10 md:pt-12 md:pb-6 font-sans overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 md:gap-10 mb-16 md:mb-12">
            
            <div class="space-y-8 md:space-y-6 animate-fade-in-up">
                <div class="space-y-5">
                    <div class="flex items-center gap-3 group cursor-pointer">
                        <div class="overflow-hidden rounded-lg bg-white p-1.5 transition-all duration-300 group-hover:shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                            <img src="<?= config('base_url') ?>/images/logo-lapit.png" alt="LaPIT" class="h-12 w-auto transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <span class="font-bold text-[16px] md:text-[15px] tracking-wider uppercase group-hover:text-blue-200 transition-colors">LaPIT</span>
                    </div>
                    <div class="flex items-center gap-3 group cursor-pointer">
                        <div class="overflow-hidden rounded-lg bg-white p-1.5 transition-all duration-300 group-hover:shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                            <img src="<?= config('base_url') ?>/images/logo-insti.png" alt="INSTI" class="h-12 w-auto transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <span class="font-bold text-[16px] md:text-[15px] tracking-wider uppercase group-hover:text-blue-200 transition-colors">INSTI</span>
                    </div>
                </div>

                <div class="space-y-4 text-[15px] md:text-[14.5px] text-blue-50">
                    <div class="flex items-start gap-3 hover:translate-x-2 transition-transform duration-300 group">
                        <i class="fas fa-map-marker-alt mt-1 text-blue-300 group-hover:text-white"></i>
                        <span>Lokossa, Agnivedji</span>
                    </div>
                    <div class="flex items-center gap-3 hover:translate-x-2 transition-transform duration-300 group">
                        <i class="fas fa-phone-alt text-blue-300 group-hover:text-white"></i>
                        <span>(+229) 21 81 68 66</span>
                    </div>
                    <p class="italic font-light leading-snug text-[14px] md:text-[13.5px] opacity-90 border-l-2 border-blue-400/50 pl-4 py-1">
                        "Science et technologie au service de l'homme"
                    </p>
                    <div class="flex items-center gap-3 hover:translate-x-2 transition-transform duration-300 group">
                        <i class="fas fa-envelope text-blue-300 group-hover:text-white"></i>
                        <span>contact@lapit.insti.bj</span>
                    </div>
                </div>

                <div class="flex gap-4 pt-2">
                    <a href="#" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-white hover:text-[#1e3a8a] transition-all duration-500 transform hover:-translate-y-2 hover:rotate-[360deg] shadow-lg">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center hover:bg-white hover:text-[#1e3a8a] transition-all duration-500 transform hover:-translate-y-2 hover:rotate-[360deg] shadow-lg">
                        <i class="fab fa-youtube text-base"></i>
                    </a>
                </div>
            </div>

            <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                <h4 class="text-[20px] md:text-[19px] font-bold mb-8 md:mb-7 tracking-tight border-b-2 border-blue-400/30 pb-2 inline-block">Nos Ressources</h4>
                <ul class="space-y-5 md:space-y-4 text-[16px] md:text-[15.5px]">
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Incubateur de startups</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Unité d'application de l'INSTI</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Plateforme E-learning</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Blog officiel de l'INSTI</a>
                    </li>
                </ul>
            </div>

            <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                <h4 class="text-[20px] md:text-[19px] font-bold mb-8 md:mb-7 tracking-tight border-b-2 border-blue-400/30 pb-2 inline-block">Liens utiles</h4>
                <ul class="space-y-6 md:space-y-5 text-[16px] md:text-[15.5px]">
                    <li class="flex items-start gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mt-2 group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300 leading-[1.6]">Ministère de l'Enseignement Supérieur</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Unité d'application de l'INSTI</a>
                    </li>
                </ul>
            </div>

            <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                <h4 class="text-[20px] md:text-[19px] font-bold mb-8 md:mb-7 tracking-tight border-b-2 border-blue-400/30 pb-2 inline-block">Navigations</h4>
                <ul class="space-y-5 md:space-y-4 text-[16px] md:text-[15.5px]">
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Accueil</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Formation</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Vie estudiantine</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <span class="w-2 h-2 bg-blue-400 rounded-full group-hover:scale-150 group-hover:bg-white transition-all duration-300"></span>
                        <a href="#" class="text-blue-50/90 hover:text-white hover:translate-x-3 transition-all duration-300">Mediatheque</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/20 text-center text-[15px] md:text-[14px] font-medium tracking-wide opacity-80 hover:opacity-100 transition-opacity">
            <p>&copy; INSTI, UNSTIM 2025 - Tous droits réservés</p>
        </div>
    </div>
</footer>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>