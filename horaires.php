<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horaires</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <style>
    * {
      transition: all .3s ease-in-out;
    }

    .titre {
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .tel {
      border: oklch(37.9% 0.146 265.522) 1px solid;
    }

    /* --- Animation d'apparition successive --- */
    .horaires {
      background: white;
      border-radius: 1rem;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      padding: 1.25rem;
      min-height: 250px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      opacity: 0;
      transform: translateY(40px);
      animation: slideUp 0.6s ease-in-out forwards;
    }

    @keyframes slideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Apparition successive des cartes */
    .horaires:nth-child(1) { animation-delay: 0.2s; }
    .horaires:nth-child(2) { animation-delay: 0.4s; }
    .horaires:nth-child(3) { animation-delay: 0.6s; }
    .horaires:nth-child(4) { animation-delay: 0.8s; }
    .horaires:nth-child(5) { animation-delay: 1s; }

    .horaires:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.32);
    }

    .container {
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      padding: 2rem;
    }

    .btn-telecharger {
      margin-top: auto;
      padding: 6px 10px;
      font-size: 14px;
    }

    /* Responsive */
    @media screen and (max-width: 480px) {
      form { width: 90%; flex-direction: column; align-items: stretch; }
      .recherche, .semaine, .btn { width: 100%; }
      .horaires { width: 100%; min-height: 230px; }
    }

    @media screen and (min-width: 481px) and (max-width: 768px) {
      form { width: 85%; flex-wrap: wrap; justify-content: space-between; }
      .recherche { width: 100%; }
      .semaine, .btn { width: 48%; }
      .horaires { width: 80%; }
    }

    @media screen and (min-width: 769px) and (max-width: 1024px) {
      form { width: 80%; }
      .horaires { width: 45%; }
    }

    @media screen and (min-width: 1025px) {
      form { width: 600px; }
      .horaires { width: 30%; }
    }
  </style>
</head>

<body class="bg-gradient-to-b from-blue-50 to-blue-100">

  <!-- Barre de navigation -->
  <nav class="border-b border-gray-200 bg-white/90 backdrop-blur-md shadow-md sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="img/logo.jpeg" class="h-10 rounded-full" alt="Logo Valve Electronique" />
        <span class="text-2xl font-semibold text-gray-800 titre">Valve</span>
      </a>
      <button data-collapse-toggle="navbar-solid-bg" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300"
        aria-controls="navbar-solid-bg" aria-expanded="false">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul
          class="flex flex-col font-medium mt-4 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
          <li><a href="index.php" class="block py-2 px-3 md:p-0 hover:text-blue-900">Accueil</a></li>
          <li><a href="communiques.php" class="block py-2 px-3 md:p-0 hover:text-blue-900">Communiqués</a></li>
          <li><a href="resultats.php" class="block py-2 px-3 md:p-0 hover:text-blue-900">Résultats</a></li>
          <li><a href="horaires.php"
              class="block py-2 px-3 md:p-0 text-blue-900 font-semibold border-b-2 border-blue-600 md:border-0">Horaires</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulaire -->
  <form action="horaires.php" method="post"
    class="fac m-auto w-[600px] p-[20px] flex flex-wrap gap-2 justify-center">
    <input type="search" name="faculte" class="recherche border border-gray-400 rounded-3xl mt-3 p-[7px]" required
      placeholder="Rechercher par votre faculté">
    <input type="week" name="semaine" class="semaine border border-gray-400 rounded-3xl mt-3 p-[7px]" required>
    <button type="submit" class="bg-green-600 hover:bg-green-700 btn p-[7px] rounded-2xl text-white mt-3">Rechercher</button>
  </form>

  <!-- En-tête -->
  <div class="entete mt-6 text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-blue-900 titre mb-2">Horaires</h1>
    <p>Voici les horaires disponibles</p>
  </div>

  <!-- Contenu -->
  <div class="container">
    <?php
      include("connexion.php");

      if(isset($_POST['faculte']) && isset($_POST['semaine'])){
          $faculte = trim($_POST['faculte']);
          $semaine = trim(htmlspecialchars($_POST['semaine']));

          $sql = "SELECT * FROM horaires WHERE semaine LIKE :semaine AND faculte LIKE :faculte";
          $req = $connexion->prepare($sql);
          $req->execute([
              'semaine' => "%$semaine%",
              'faculte' => "%$faculte%"
          ]);

          if ($req->rowCount() > 0) {
              while($horaires=$req->fetch()){
                  echo '<div class="horaires">
                          <h2 class="font-semibold text-[20px]">'.$horaires['titre'].'</h2>
                          <p class="mt-3 text-[15px] leading-relaxed">'.$horaires['details'].'</p>
                          <p class="mt-3 text-[15px] text-gray-500">Faculté : '.$horaires['faculte'].'</p>
                          <p class="text-gray-500 text-[15px]">Semaine : '.$horaires['semaine'].'</p>
                          <p class="text-gray-500 text-[15px]">Date : '.$horaires['datte'].'</p>
                          <a href="admin/'.$horaires['fichier_chemin'].'" class="tel mt-4 text-blue-900 hover:text-white hover:bg-blue-900 ease-in-out text-center px-4 py-2 rounded-lg font-medium shadow-md">Télécharger l\'horaire</a>
                        </div>';
              }
          } else {
              echo '<div class="bg-white drop-shadow-lg text-red-500 w-[500px] rounded-lg p-[20px] text-center animate-pulse">
                      Aucun résultat trouvé
                    </div>';
          }
      } else {
          $sql = "SELECT * FROM horaires ORDER BY datte DESC";
          $req = $connexion->prepare($sql);
          $req->execute();
          if ($req->rowCount() > 0) {
          $i = 0;
          while($horaires=$req->fetch()){
              echo '<div class="horaires" style="animation-delay: '.($i * 0.2).'s;">
                      <h2 class="font-semibold text-[20px]">'.$horaires['titre'].'</h2>
                      <p class="mt-3 text-[15px] leading-relaxed">'.$horaires['details'].'</p>
                      <p class="mt-3 text-[15px] text-gray-500">Faculté : '.$horaires['faculte'].'</p>
                      <p class="text-gray-500 text-[15px]">Semaine : '.$horaires['semaine'].'</p>
                      <p class="text-gray-500 text-[15px]">Date : '.$horaires['datte'].'</p>
                      <a href="admin/'.$horaires['fichier_chemin'].'" class="tel mt-4 text-blue-900 hover:text-white hover:bg-blue-900 ease-in-out text-center px-4 py-2 rounded-lg font-medium shadow-md">Télécharger l\'horaire</a>
                    </div>';
              $i++;}
          }else{
                echo '<div class = "horaires">Aucun horaire disponible</div>';
              }
      }
    ?>
  </div>

</body>
</html>
