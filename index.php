<?php require_once "Projet/Utils/database.php" ?>
<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>
<!-- ceci est un test -->
<body>
    <!-- Partie de Benilde-->

    <?php require_once SITE_ROOT . "Projet/Partials/Header.php"; ?>

    <header class="head">
        <h1>BIENVENUE DANS <br> NOTRE STUDIO!</h1>
        <p> venez challenger les cerveaux les plus agiles!</p>
        <br>
        <a href="<?= PROJECT_FOLDER ?>Projet/Games/Memory/memory.php" class="button">Jouer!</a>
    </header>

    <!--fin de la partie de Benilde-->


    <!--Partie de Romuald-->
    <section class="main_haut">
        <div class="image_haut">
            <img class="img1" src="asset/images/Ecran.png" alt="pc_de_fou_sim">
            <img class="img2" src="asset/images/trotinette.png" alt="trotinette">
            <img class="img3" src="asset/images/carte.png" alt="Poker">
        </div>
        <div class="description">
            <div class="numero">
                <h1>01</h1>
            </div>
            <div class="texte">
                <p>
                <h1 class="titre_description">Lorem ipsum </h1>dolor, sit amet consectetur adipisicing elit. Perferendis, harum labore! Obcaecati itaque deleniti dolor distinctio eligendi eum omnis assumenda exercitationem odio corporis! Temporibus doloribus natus ipsum a consectetur magnam?</p>
            </div>
            <div class="numero">
                <h1>02</h1>
            </div>
            <div class="texte">
                <p>
                <h1 class="titre_description">Lorem ipsum </h1>dolor, sit amet consectetur adipisicing elit. Perferendis, harum labore! Obcaecati itaque deleniti dolor distinctio eligendi eum omnis assumenda exercitationem odio corporis! Temporibus doloribus natus ipsum a consectetur magnam?</p>
            </div>
            <div class="numero">
                <h1>03</h1>
            </div>
            <div class="texte">
                <p>
                <h1 class="titre_description">Lorem ipsum </h1>dolor, sit amet consectetur adipisicing elit. Perferendis, harum labore! Obcaecati itaque deleniti dolor distinctio eligendi eum omnis assumenda exercitationem odio corporis! Temporibus doloribus natus ipsum a consectetur magnam?</p>
            </div>
        </div>
    </section>
    <section class="main_milieu">
        <div>
            <img src="<?= PROJECT_FOLDER ?>asset/images/watch_dogs.png" alt="watch_dog" class="watch_dog">
        </div>
        <div class="stats_dogs">
            <span class="obj1">
                <p class="bold"><?php echo displayNbPartie() ?><br> parties jouées</p>
            </span>
            <span class="obj2">
                <p class="bold">1020 <br> Joueurs Connectés</p>
            </span>
            <span class="obj3">
                <p class="bold"> <?php echo displayTempsPartie() ?> <br> sec Temps Record</p>
            </span>
            <span class="obj4">
                <p class="bold"><?php echo displayNbJoueurs() ?><br>Joueurs Inscrits</p>
            </span>
        </div>
    </section>
    <section class="page_bas">
        <div class="titre_equipe">
            <h2>Notre Equipe</h2>
            <p>Quisque commodo facilisis purus, interdum volupat arcu viverra sed.</p>
            <img src="<?= PROJECT_FOLDER ?>asset/images/baniere_profils.png" alt="banière" class="baniere_dorée">
        </div>
        <div class="profils">
            <div class="profil1">
                <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="Kilian" class="img_profil">
                <p>Kilian</p>
                <p> <span class="texte_profil">Games Developpeur</span></p>
                <div class="img_reseaux">
                    <a class="img_reseaux1" href="https://facebook.com"><img src="<?= PROJECT_FOLDER ?>asset/images/facebook_img.png" alt="Facebook" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://twitter.com"><img src="<?= PROJECT_FOLDER ?>asset/images/twitter.png" alt="Twitter" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://instagram.com"><img src="<?= PROJECT_FOLDER ?>asset/images/instagram.png" alt="instagram" class="img_reseaux1"></a>
                </div>
            </div>
            <div class="profil2">
                <img src="<?= PROJECT_FOLDER ?>asset/images/big_mom.png" alt="Romuald" class="img_profil">
                <p>Romuald</p>
                <p> <span class="texte_profil">Scrum Master</span></p>
                <div class="img_reseaux">
                    <a class="img_reseaux1" href="https://facebook.com"><img src="<?= PROJECT_FOLDER ?>asset/images/facebook_img.png" alt="Facebook" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://twitter.com"><img src="<?= PROJECT_FOLDER ?>asset/images/twitter.png" alt="Twitter" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://instagram.com"><img src="<?= PROJECT_FOLDER ?>asset/images/instagram.png" alt="instagram" class="img_reseaux1"></a>
                </div>
            </div>
            <div class="profil3">
                <img src="<?= PROJECT_FOLDER ?>asset/images/benilde.png" alt="Benilde" class="img_profil">
                <p>Benilde</p>
                <p> <span class="texte_profil">Games Developpeur</span></p>
                <div class="img_reseaux">
                    <a class="img_reseaux1" href="https://facebook.com"><img src="<?= PROJECT_FOLDER ?>asset/images/facebook_img.png" alt="Facebook" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://twitter.com"><img src="<?= PROJECT_FOLDER ?>asset/images/twitter.png" alt="Twitter" class="img_reseaux1"></a>
                    <a class="img_reseaux1" href="https://instagram.com"><img src="<?= PROJECT_FOLDER ?>asset/images/instagram.png" alt="instagram" class="img_reseaux1"></a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin de la partie de Romuald-->
    <!--Partie message-->
    <?php require_once SITE_ROOT . "chat.php" ?>

    <!-- Footer -->
    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>