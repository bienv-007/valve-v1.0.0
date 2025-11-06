<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communiqués</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <style>
        /* --- Animations & transitions --- */
        .communiques {
            opacity: 0;
            transform: translateY(30px);
            animation: slidedown 0.6s ease-in-out forwards;
            transition: all 0.3s ease-in-out;
        }

        .communiques:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.32);
        }

        @keyframes slidedown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- Apparition successive des cartes --- */
        .communiques:nth-child(1) { animation-delay: 0.2s; }
        .communiques:nth-child(2) { animation-delay: 0.4s; }
        .communiques:nth-child(3) { animation-delay: 0.6s; }
        .communiques:nth-child(4) { animation-delay: 0.8s; }
        .communiques:nth-child(5) { animation-delay: 1s; }
        .communiques:nth-child(6) { animation-delay: 1.2s; }
        .communiques:nth-child(7) { animation-delay: 1.4s; }

        /* --- Typographie --- */
        .titre {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        /* --- Responsive --- */
        @media screen and (max-width: 768px) {
            .communiques {
                width: 90%;
                min-height: auto;
            }
            .container {
                padding: 15px;
            }
        }

        @media screen and (min-width: 769px) and (max-width: 1024px) {
            .communiques {
                width: 45%;
            }
        }

        @media screen and (min-width: 1025px) {
            .communiques {
                width: 30%;
            }
        }

        /* --- Bouton de téléchargement --- */
        .btn-telecharger {
            border: 1px solid oklch(37.9% 0.146 265.522);
            transition: all 0.3s ease-in-out;
        }

        .btn-telecharger:hover {
            background-color: oklch(37.9% 0.146 265.522);
            color: #fff;
        }

        footer {
            margin-top: 100px;
        }

        .container {
            margin: auto;
        }

        /* --- Uniformisation de la hauteur des cartes --- */
        .communiques {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px;
            padding: 1.25rem;
        }

        .communiques p {
            font-size: 14px;
            line-height: 1.4;
        }

        .btn-telecharger {
            padding: 6px 10px;
            font-size: 14px;
        }

        .communique {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .communique .btn-telecharger {
            margin-top: auto;
            align-self: flex-start;
        }

        @media screen and (max-width: 768px) {
            .communiques {
                width: 100%;
                min-height: auto;
            }
            .communique .btn-telecharger {
                align-self: stretch;
                text-align: center;
            }
        }

        @media screen and (min-width: 769px) and (max-width: 1024px) {
            .communiques {
                width: 45%;
                min-height: 360px;
            }
        }

        @media screen and (min-width: 1025px) {
            .communiques {
                width: 30%;
                min-height: 300px;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100 text-gray-800">

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
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition">Accueil</a></li>
                    <li><a href="communiques.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition text-blue-900 font-semibold border-b-2 border-blue-600 md:border-0">Communiqués</a></li>
                    <li><a href="resultats.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition">Résultats</a></li>
                    <li><a href="horaires.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition">Horaires</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- En-tête -->
    <div class="entete mt-10 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-blue-900 titre mb-2">Communiqués</h1>
        <p class="text-gray-600">Voici les derniers communiqués publiés</p>
    </div>

    <!-- Conteneur principal -->
    <div class="flex flex-wrap gap-4 p-4 container justify-center">
        <?php
            include("connexion.php");

            $sql = "SELECT * FROM communiques ORDER BY datte DESC";
            $requete = $connexion->prepare($sql);
            $requete->execute();

            if($requete->rowCount()>0){
                while($communique = $requete->fetch(PDO::FETCH_ASSOC)){
                    echo '<div class="communiques bg-white p-6  rounded-2xl shadow-lg">
                            <div class="communique">
                                <h2 class="font-semibold text-[20px]">'
                                    .$communique['titre'].
                                '</h2>
                                <p class="mt-3 text-[15px] leading-relaxed text-justify">'
                                    .$communique['details'].
                                '</p>
                                <div class="mt-3 text-sm text-gray-500 space-y-1">
                                    <p><span class="font-medium text-gray-600">Auteur :</span> '.$communique['auteur'].'</p>
                                    <p><span class="font-medium text-gray-600">Date :</span> '.$communique['datte'].'</p>
                                </div>
                                <a href="admin/'.$communique['fichier_chemin'].'" 
                                   class="btn-telecharger mt-5 px-4 py-2 w-full text-center rounded-lg text-blue-900 hover:text-white font-medium shadow-md">
                                Télécharger le communiqué
                                   </a>
                            </div>
                        </div>';
                }
            } else {
                echo '<div class="bg-white text-center p-8 w-full md:w-[500px] mt-6 shadow-lg rounded-lg"> 
                        <p class="text-gray-600">Aucun communiqué pour le moment</p> 
                      </div>';
            }
        ?>
    </div>
</body>
</html>
