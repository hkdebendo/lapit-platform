<section class="container mx-auto px-4 py-20 max-w-3xl mt-[10%]">
  <div class="mb-12 border-lapit-lightblue pl-6">
    <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-none">
      Contactez <span class="text-lapit-lightblue">-Nous</span>
    </h2>
    <p class="text-slate-600 mt-4 text-lg font-medium">
      Remplissez le formulaire ci-dessous et notre équipe vous recontactera.
    </p>
  </div>

  <?php if (!empty($errors)): ?>
    <div class="mb-8 p-6 bg-red-50 border border-red-100 rounded-2xl flex items-start gap-4">
      <div class="text-red-500 mt-1">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
      </div>
      <div>
        <h4 class="font-bold text-red-900 text-base">Veuillez corriger les points suivants :</h4>
        <ul class="text-sm text-red-700 mt-2 space-y-1 list-disc ml-4">
          <?php foreach($errors as $e): ?>
            <li class="font-medium"><?= htmlspecialchars($e, ENT_QUOTES) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <form action="<?= config('base_url') ?>/contact/send" method="POST" class="bg-white p-8 md:p-12 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 mb-6">
        <div class="space-y-2">
          <label class="block text-sm font-bold text-slate-800 ml-1">Prénom</label>
          <input type="text" name="first_name" value="<?= htmlspecialchars($old['first_name'] ?? '', ENT_QUOTES) ?>" 
                 placeholder="ex: John"
                 class="w-full bg-white border-2 border-slate-100 rounded-xl px-4 py-3.5 focus:border-lapit-lightblue transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
        </div>
        <div class="space-y-2">
          <label class="block text-sm font-bold text-slate-800 ml-1">Nom</label>
          <input type="text" name="last_name" value="<?= htmlspecialchars($old['last_name'] ?? '', ENT_QUOTES) ?>" 
                 placeholder="ex: ALI"
                 class="w-full bg-white border-2 border-slate-100 rounded-xl px-4 py-3.5 focus:border-lapit-lightblue transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
        </div>
    </div>

    <div class="space-y-2 mb-6">
      <label class="block text-sm font-bold text-slate-800 ml-1">Adresse Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '', ENT_QUOTES) ?>" 
             placeholder="votre@email.com"
             class="w-full bg-white border-2 border-slate-100 rounded-xl px-4 py-3.5 focus:border-lapit-lightblue transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
    </div>

    <div class="space-y-2 mb-6">
      <label class="block text-sm font-bold text-slate-800 ml-1">Objet du message</label>
      <input type="text" name="object" value="<?= htmlspecialchars($old['object'] ?? '', ENT_QUOTES) ?>" 
             placeholder="De quoi souhaitez-vous discuter ?"
             class="w-full bg-white border-2 border-slate-100 rounded-xl px-4 py-3.5 focus:border-lapit-lightblue transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300">
    </div>
    
    <div class="space-y-2 mb-8">
      <label class="block text-sm font-bold text-slate-800 ml-1">Votre Message</label>
      <textarea name="message" rows="6" 
                placeholder="Détaillez votre demande ici..."
                class="w-full bg-white border-2 border-slate-100 rounded-xl px-4 py-3.5 focus:border-lapit-lightblue transition-all outline-none text-slate-900 font-medium placeholder:text-slate-300 resize-none"><?= htmlspecialchars($old['message'] ?? '', ENT_QUOTES) ?></textarea>
    </div>
    
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8 mt-10">
        <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars(config('recaptcha_site_key'), ENT_QUOTES) ?>"></div>

        <button type="submit"
                class="w-full lg:w-auto px-12 py-4 bg-lapit-lightblue text-white text-lg font-bold rounded-xl hover:bg-slate-900 transition-all duration-300 shadow-lg shadow-lapit-lightblue/20 active:scale-95 flex items-center justify-center gap-3">
          Envoyer le message
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </button>
    </div>
  </form>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</section>