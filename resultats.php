<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Résultats</title>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<style>

    .titre {
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    /* Cartes stylées */
    .resultats {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 320px;
        min-height: 220px;
        padding: 1rem;
        opacity: 0;
        transform: translateY(50px);
        animation: slidedown 0.6s forwards;
    }

    .resultats:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    @keyframes slidedown {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Apparition successive */
    .resultats:nth-child(1) { animation-delay: 0.2s; }
    .resultats:nth-child(2) { animation-delay: 0.4s; }
    .resultats:nth-child(3) { animation-delay: 0.6s; }
    .resultats:nth-child(4) { animation-delay: 0.8s; }
    .resultats:nth-child(5) { animation-delay: 1s; }

    /* Bouton stylé */
    .btn-telecharger {
        transition: all 0.3s ease;
        display: inline-block;
        margin-top: auto;
        border: 1px solid oklch(37.9% 0.146 265.522)
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
        padding: 2rem;
    }

    form {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 2rem;
        padding: 0 1rem;
    }

    form input {
        padding: 0.5rem 0.75rem;
        border-radius: 9999px;
        border: 1px solid #cbd5e1;
        flex: 1 1 200px;
        min-width: 150px;
        transition: all 0.3s ease;
    }

    form input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
    }

    form button {
        cursor: pointer;
        transition: all 0.3s ease;
        flex: 0 0 auto;
    }

    form button:hover {
        box-shadow: 0 5px 15px rgba(3, 88, 8, 0.29);
    }

    /* Responsive */
    @media screen and (max-width: 1024px) {
        .resultats { width: 45%; min-height: 200px; }
    }

    @media screen and (max-width: 768px) {
        .resultats { width: 90%; min-height: 180px; }
        form { gap: 0.5rem; }
    }

    @media screen and (max-width: 480px) {
        .resultats { width: 100%; min-height: 180px; padding: 0.75rem; }
        form input { flex: 1 1 100%; }
        form button { width: 100%; }
    }
</style>
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100">

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
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Accueil</a></li>
                    <li><a href="communiques.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Communiqués</a></li>
                    <li><a href="resultats.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900 transition text-blue-900 font-semibold border-b-2 border-blue-600 md:border-0">Résultats</a></li>
                    <li><a href="horaires.php"
                            class="block py-2 px-3 md:p-0 hover:text-blue-900">Horaires</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Formulaire -->
<form action="resultats.php" method="post">
    <input type="search" name="recherche" placeholder="Rechercher" required>
    <button type="submit" class="bg-green-600 hover:bg-green-700 rounded-2xl p-[5px] text-white">Rechercher</button>
</form>
<br>
<h2 class="text-3xl md:text-4xl font-bold text-blue-900 titre mb-2 text-center">
    Resultats
</h2>
<p class="text-center">
    Voici les resultats disponibles
</p>
<!-- Conteneur résultats -->
<div class="container">
<?php
require("connexion.php");
if (isset($_POST['recherche'])) {
    $faculte =trim($_POST['recherche']);
    $sql = "SELECT * FROM resultats WHERE faculte LIKE :faculte";
    $req = $connexion->prepare("$sql");
    $req->execute(array("faculte"=> "%$faculte%"));
    if ($req->rowCount() > 0) {
        $i = 1;
        while($recherche = $req->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="resultats" style="animation-delay:'.($i*0.2).'s">';
        echo "<h2 class='font-bold text-lg'>".$recherche['promotion'].' - '.$recherche['faculte']."</h2>";
        echo "<p class='mt-2 text-gray-700'>".htmlspecialchars($recherche['details'])."</p>";
        echo "<p class='text-gray-400 mt-2'>Promotion : ".htmlspecialchars($recherche['promotion'])."</p>";
        echo "<p class='text-gray-400'>Date de publication : ".$recherche['datte']."</p>";
        echo '<a href="admin/'.$recherche['fichier_chemin'].'" class="btn-telecharger font-semibold text-blue-900 hover:text-white text-center hover:bg-blue-900 rounded-lg p-[5px] mt-3">Télécharger le résultat</a>';
        echo "</div>";
        $i++;
        }
    } else {
        echo '<div class="resultats"> Aucun resultat trouve </div>';
    }
}else{
$sql = "SELECT * FROM resultats ORDER BY datte DESC";
$req = $connexion->prepare($sql);
$req->execute();
if($req->rowCount() > 0){
    $i = 1;
    while($donnees = $req->fetch(PDO::FETCH_ASSOC)){
        echo '<div class="resultats" style="animation-delay:'.($i*0.2).'s">';
        echo "<h2 class='font-bold text-lg'>".$donnees['promotion'].' - '.$donnees['faculte']."</h2>";
        echo "<p class='mt-2 text-gray-700'>".htmlspecialchars($donnees['details'])."</p>";
        echo "<p class='text-gray-400 mt-2'>Promotion : ".htmlspecialchars($donnees['promotion'])."</p>";
        echo "<p class='text-gray-400'>Date de publication : ".$donnees['datte']."</p>";
        echo '<a href="admin/'.$donnees['fichier_chemin'].'" class="btn-telecharger font-semibold text-blue-900 hover:text-white text-center hover:bg-blue-900 rounded-lg p-[5px] mt-3">Télécharger le résultat</a>';
        echo "</div>";
        $i++;
    }
} else {
    echo '<p class="text-center text-red-500 mt-6 font-semibold">Aucun résultat disponnible pour le moment.</p>';
}}
?>
</div>

</body>
</html>
