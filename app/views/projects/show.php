<section class="container mx-auto px-4 mt-[25%] lg:mt-[12%]  mb-16 fade-in">

    <div class="mb-12  border-lapit-lightblue pl-6">
        <h2 class="text-2xl lg:text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase italic">
            <?= htmlspecialchars($project['title'], ENT_QUOTES) ?>
        </h2>
        <div class="mt-2 h-1 w-24 bg-gradient-to-r from-lapit-lightblue to-lapit-darkblue rounded-full"></div>
    </div>

    <div class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.05)] rounded-[2rem] overflow-hidden border border-slate-50">

        <div class="grid grid-cols-1 lg:grid-cols-12">
            
            <div class="lg:col-span-7 bg-slate-50 flex justify-center items-center p-8 border-b lg:border-b-0 lg:border-r border-slate-100">
                <div class="relative group">
                    <img 
                        src="<?= config('base_url') ?>/images/<?= htmlspecialchars($project['photo_path'], ENT_QUOTES) ?>"
                        alt="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>"
                        class="max-h-[500px] w-auto rounded-2xl shadow-2xl object-contain transition duration-500 group-hover:scale-[1.02]"
                    >
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-black/10"></div>
                </div>
            </div>

            <div class="lg:col-span-5 p-8 lg:p-12 bg-white flex flex-col justify-center">
                
                <div class="inline-flex mb-6">
                    <span class="px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest 
                        <?= $project['status'] === 'En cours' ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-100 text-slate-600' ?>">
                        ● <?= htmlspecialchars($project['status'], ENT_QUOTES) ?>
                    </span>
                </div>

                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Coordinateur(s)</p>
                            <p class="text-slate-700 font-bold leading-snug"><?= $project['coordinators'] ?></p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Équipe de recherche</p>
                            <p class="text-slate-600 text-sm italic"><?= $project['team'] ?></p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase mb-1">Période</p>
                            <p class="text-sm font-bold text-slate-800">
                                <?= htmlspecialchars($project['start_date'] ?? '', ENT_QUOTES) ?> 
                                <span class="text-slate-300 mx-1">/</span>
                                <span class="text-blue-600"><?= htmlspecialchars($project['end_date'] ?? 'En cours', ENT_QUOTES) ?></span>
                            </p>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase mb-1">Financement</p>
                            <p class="text-sm font-bold text-slate-800"><?= htmlspecialchars($project['financing'], ENT_QUOTES) ?></p>
                        </div>
                    </div>
                </div>

                <?php if (!empty($project['video_url'])): ?>
                    <div class="mt-10">
                        <div class="relative w-full overflow-hidden rounded-2xl aspect-video shadow-lg group">
                            <iframe 
                                src="<?= htmlspecialchars($project['video_url'], ENT_QUOTES) ?>"
                                class="absolute inset-0 w-full h-full"
                                frameborder="0"
                                allowfullscreen>
                            </iframe>
                            <div class="absolute inset-0 pointer-events-none ring-1 ring-inset ring-black/10 rounded-2xl"></div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="mt-12 lg:mt-16 max-w-5xl mx-auto">
        <div class="bg-white p-8 lg:p-12 rounded-[2rem] shadow-sm border border-slate-100 relative overflow-hidden">
            <div class="absolute top-0 right-0 p-8 opacity-5">
                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C14.9124 8 14.017 7.10457 14.017 6V5L14.017 3H21.017V15C21.017 18.3137 18.3307 21 15.017 21H14.017ZM3 21L3 18C3 16.8954 3.89543 16 5 16H8C8.55228 16 9 15.5523 9 15V9C9 8.44772 8.55228 8 8 8H5C3.89543 8 3 7.10457 3 6V5L3 3H10V15C10 18.3137 7.31371 21 4 21H3Z"/></svg>
            </div>

            <h3 class="text-2xl font-black text-slate-900 mb-8 flex items-center gap-3">
                <span class="w-8 h-1 bg-lapit-darkblue rounded-full"></span>
                Description du Projet
            </h3>
            
            <div class="text-slate-600 leading-[1.8] text-lg space-y-4 first-letter:text-5xl first-letter:font-black first-letter:text-slate-900 first-letter:mr-3 first-letter:float-left">
                <?= nl2br(htmlspecialchars($project['description_full'], ENT_QUOTES)) ?>
            </div>
        </div>
    </div>

</section>
