<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accueil</title>

<!-- Tailwind & Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<style>
  .titre{
    font-family:Georgia, 'Times New Roman', Times, serif;
  }
    *{
        scroll-behavior: smooth;
    }
  header {
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("img/img-logo.jpg");
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
  }

  [x-cloak] { display: none; }

  /* Hover effects cartes */
  .card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  }
  .card {
    transition: all 0.3s ease-in-out;
  }
  * {
      scroll-behavior: smooth;
  }

  header {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("img/img-logo.jpg");
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      height: 100vh;
  }

  [x-cloak] { display: none; }

  /* Hover effects cartes */
  .card:hover {
      transform: scale(1.03);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  }
  .card {
      transition: all 0.3s ease-in-out;
  }

  /* ✨ Effet d'apparition progressive globale */
  body {
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out forwards;
  }

  @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
  }

  /* ✨ Effet d’apparition séquentielle pour les cartes */
  .card {
      opacity: 0;
      transform: translateY(20px);
      animation: cardFadeIn 1s ease-out forwards;
  }

  @keyframes cardFadeIn {
      to {
          opacity: 1;
          transform: translateY(0);
      }
  }

  /* Délai progressif entre les cartes */
  .card:nth-child(1) { animation-delay: 0.5s; }
  .card:nth-child(2) { animation-delay: 0.9s; }
  .card:nth-child(3) { animation-delay: 1.3s; }


</style>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 font-sans">

<!-- Navbar -->
<nav class="border-b border-gray-200 bg-white/90 backdrop-blur-md shadow-md sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/logo.jpeg" class="h-10 rounded-full" alt="Logo Valve Electronique" />
                <span class="text-2xl serif-center font-semibold text-gray-800 titre">
                    Valve
                </span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li><a href="index.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition text-blue-900 font-semibold border-b-2 border-blue-600 md:border-0">Accueil</a></li>
                    <li><a href="communiques.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Communiqués</a></li>
                    <li><a href="resultats.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Résultats</a></li>
                    <li><a href="horaires.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Horaires</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Header -->
<header class="flex flex-col justify-center items-start text-white px-6 md:px-20 h-screen">
  <h1 class="text-4xl md:text-6xl font-bold mb-4">Bienvenue sur la page d'accueil</h1>
  <p class="text-xl md:text-2xl mb-6">Consultez les dernières informations de la Valve Electronique.</p>
  <a href="#menu" class="bg-blue-900 text-white py-3 px-6 rounded-lg shadow transition">Commencer</a>
</header>

<!-- Section cartes -->
<section id="menu" class="py-16 px-6 md:px-20 grid gap-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
  <div class="card bg-white rounded-2xl shadow p-6 flex flex-col items-start">
    <i class="fas fa-bullhorn text-5xl text-green-600 mb-4"></i>
    <h2 class="text-2xl font-bold mb-2">Les communiqués</h2>
    <p class="text-gray-700 mb-4">Consultez les derniers communiqués de l'université.</p>
    <a href="communiques.php" class="bg-blue-900 text-white py-2 px-4 rounded-lg transition">Voir les communiqués</a>
  </div>

  <div class="card bg-white rounded-2xl shadow p-6 flex flex-col items-start">
    <i class="fas fa-chart-bar text-5xl text-green-600 mb-4"></i>
    <h2 class="text-2xl font-bold mb-2">Les résultats</h2>
    <p class="text-gray-700 mb-4">Consultez les résultats disponibles pour chaque année.</p>
    <a href="resultats.php" class="bg-blue-900 text-white py-2 px-4 rounded-lg transition">Voir les résultats</a>
  </div>

  <div class="card bg-white rounded-2xl shadow p-6 flex flex-col items-start">
    <i class="fas fa-clock text-5xl text-green-600 mb-4"></i>
    <h2 class="text-2xl font-bold mb-2">Les horaires des cours</h2>
    <p class="text-gray-700 mb-4">Consultez les horaires par faculté et par semaine.</p>
    <a href="horaires.php" class="bg-blue-900 text-white py-2 px-4 rounded-lg transition">Voir les horaires</a>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-400 py-6 mt-10 text-center">
        <p class="text-sm">
            &copy; 2025 <a href="index.php" class="hover:text-blue-400">Valve Électronique™</a> — Tous droits réservés.
        </p>
    </footer>

</body>
</html>
