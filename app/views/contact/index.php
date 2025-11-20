<section class="container mx-auto px-4 py-8 max-w-lg">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">Contactez-nous</h2>

  <?php if (!empty($errors)): ?>
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
      <ul>
        <?php foreach($errors as $e): ?>
          <li><?= htmlspecialchars($e, ENT_QUOTES) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form action="<?= config('base_url') ?>/contact/send" method="POST" class="space-y-4">
    <div>
      <label class="block mb-1">Prénom</label>
      <input type="text" name="first_name" value="<?= htmlspecialchars($old['first_name'] ?? '', ENT_QUOTES) ?>" 
             class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block mb-1">Nom</label>
      <input type="text" name="last_name" value="<?= htmlspecialchars($old['last_name'] ?? '', ENT_QUOTES) ?>" 
             class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block mb-1">Email</label>
      <input type="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '', ENT_QUOTES) ?>" 
             class="w-full border rounded px-3 py-2">
    </div>

    <div>
      <label class="block mb-1">Objet</label>
      <input type="text" name="object" value="<?= htmlspecialchars($old['object'] ?? '', ENT_QUOTES) ?>" 
             class="w-full border rounded px-3 py-2">
    </div>
    
    <div>
      <label class="block mb-1">Message</label>
      <textarea name="message" rows="5" nn
                class="w-full border rounded px-3 py-2"><?= htmlspecialchars($old['message'] ?? '', ENT_QUOTES) ?></textarea>
    </div>
    
  <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars(config('recaptcha_site_key'), ENT_QUOTES) ?>"></div>

    <div>
      <button type="submit"
              class="px-6 py-2 bg-lapit-lightblue text-white rounded hover:bg-lapit-darkblue transition">
        Envoyer
      </button>
    </div>
  </form>

 
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    
</section>

