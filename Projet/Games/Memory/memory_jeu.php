
<?php require_once "../../Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>
    <!--Header-->

    <nav class="page_nav_theme1">
        <div class="image_nav_jeux_theme1">
            <a href="<?= PROJECT_FOLDER ?>index.php"> <img src="<?= PROJECT_FOLDER ?>asset/images/bouton-daccueil.png" alt="accueil_bouton" class="image_nav_jeux1_theme1"></a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php"> <img src="<?= PROJECT_FOLDER ?>asset/images/fleche-gauche.png" alt="retour_arriere" class="image_nav_jeux2_theme1"></a>
        </div>
        <div class="titre_page_jeux_theme1">
            <p>Memory</p>
        </div>
        <form action="" class="formulaire_selection_niveau_theme">
            <select name="" id="e" class="theme">
                <option id="1">Naruto</option>
                <option id="2">One Piece</option>
                <option id="3">League of Legends</option>
            </select>
            <select name="" id="f" class="niveau">
                <option id="4">Facile</option>
                <option id="5">Moyen</option>
                <option id="6">Difficile</option>
            </select>
            <input type="button" class="buttonStart" value="Lancer la partie" id = "buttonPourAfficherTableau" onclick="">
        </form>
    </nav>

    <!--Fin header-->



    <!--Début Main-->
    <div id="chronometre" class="chrono"></div>
    <div class="taille_page" id="conteneur_tableau" > 
        
        <table id="table">

        </table>
    </div>
    <div id="finish">

    </div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../../script.js"></script>
    <!--Fin Main-->
