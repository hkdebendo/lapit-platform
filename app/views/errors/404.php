<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page introuvable - LaPIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 flex items-center justify-center px-4">

<div class="max-w-lg w-full bg-white rounded-3xl shadow-xl p-8 text-center">

    <img src="<?= config('base_url') ?>/images/logo-lapit.png"
         alt="LaPIT"
         class="h-20 mx-auto mb-6">

    <h1 class="text-6xl font-extrabold text-blue-700 mb-2">404</h1>

    <p class="text-xl font-semibold text-gray-800 mb-3">
        Oups 😕 Page introuvable
    </p>

    <p class="text-gray-600 mb-6">
        La page demandée n’existe pas ou a été déplacée.<br>
        Pas d’inquiétude 🚀
    </p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <button onclick="history.back()"
                class="px-6 py-3 bg-gray-200 rounded-xl hover:bg-gray-300 transition">
            ⬅️ Retour
        </button>

        <a href="<?= config('base_url') ?>"
           class="px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
            🏠 Accueil
        </a>
    </div>

</div>

</body>
</html>
