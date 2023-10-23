<?php require_once "../../Utils/common.php" ?>
<DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT. "Projet/Partials/Head.php" ?>

<body>

    <!--Header-->

    <nav class="nav_page_jeux">
        <div class="image_nav_jeux">
            <a href="<?= PROJECT_FOLDER ?>index.php"> <img src="<?= PROJECT_FOLDER ?>asset/images/bouton-daccueil.png" alt="accueil_bouton" class="image_nav_jeux1"></a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php"> <img src="<?= PROJECT_FOLDER ?>asset/images/fleche-gauche.png" alt="retour_arriere" class="image_nav_jeux2"></a>
            <div class="titre_page_jeux">
                <p>Memory</p>
            </div>
            <p class="titre_site">The Power of Memory</p>
        </div>
     </nav>

    <!--Fin header-->
    <!--Main-->

    <section class="level_page_jeu">
        <div class="regle_du_jeu_et_titre">
            <h3 class="titre_regle_jeu">Les règles du jeu :</h3>
            <p class="regle_du_jeu">Toutes les cartes sont étalées faces cachées sur la table. Le premier joueur retourne deux cartes. Si les images sont identiques, il gagne la paire constituée et rejoue. Si les images sont différentes, il les repose faces cachées là où elles étaient et c'est au joueur suivant de jouer.</p>
        </div>
        <div class="thème_et_niveau">
            <p class="theme1">Thème 1 : One Piece</p>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme1.php" class="niveau2">Facile</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme1.php" class="niveau3">Moyen</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme1.php" class="niveau4">Difficile</a>
            <p class="theme">Thème 2 : Naruto</p>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme2.php" class="niveau2">Facile</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme2.php" class="niveau3">Moyen</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme2.php" class="niveau4">Difficile</a>
            <p class="theme">Thème 3 : League of Legends</p>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme3.php" class="niveau2">Facile</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme3.php" class="niveau3">Moyen</a>
            <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory_theme3.php" class="niveau1">Difficile</a>
        </div>
    </section>

    <!--Fin main-->
    <!--Footer-->

    <?php require_once SITE_ROOT."Projet/Partials/Footer.php" ?>

    <!--Fin footer-->
    
</body>
</html>