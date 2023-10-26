<?php require_once "../../Utils/common.php";
require_once "../../Utils/database.php";
?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>

    <!--Header-->
    <?php
    $a = "0"
    ?>
    <?php require_once SITE_ROOT . "Projet/Partials/Header.php" ?>

    <!--Fin header-->

    <!--Main-->

    <section class="banniere">
        <p>Jeux</p>
    </section>

    <section class="jeu">
        <h2 class="titre_jeux">Tous les jeux :</h2>
        <div class="selection_jeux">
            <button> <a href="memory_level.php"><img src="<?= PROJECT_FOLDER ?>asset/images/memoryimage.png" alt="" class="image_nav"></a></button>
            <button><img src="<?= PROJECT_FOLDER ?>asset/images/tictactoe.png" alt="tictactoe" class="image_nav"></button>
            <button><img src="<?= PROJECT_FOLDER ?>asset/images/solitaire.pnj.jpeg" alt="solitaire" class="image_nav"></button>
        </div>
    </section>

    <!--Fin main-->
    <!--Footer-->


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>



    <!--Fin footer-->

</body>
</php>