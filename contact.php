<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT. "Projet/Partials/Head.php" ?>

<body>

    <!--Header-->
    <?php
     $a="0"
    ?>
    <?php require_once SITE_ROOT. "Projet/Partials/Header.php"; ?>

     <!--Fin Header-->

     <!--Main-->
     <section class=banniere>
        <p>NOUS CONTACTER</p>
     </section>

     <section class="info_contact">
        <div class="div_contact">
            <img src="<?= PROJECT_FOLDER ?>asset/images/icone_tel.png" alt="tel" class="img_contact1">
            <p>06 05 04 03 02</p>
        </div>
        <div  class="div_contact">
            <img src="<?= PROJECT_FOLDER ?>asset/images/email.png" alt="mail" class="img_contact1">
            <p>support@powerofmemory.com</p>
        </div>
        <div class="div_contact">
            <img src="<?= PROJECT_FOLDER ?>asset/images/localisation.png" alt="localisation" class="img_contact1">
            <p>Paris</p>
        </div >
     </section>
     <form class="formulaire_contact">
        <input type="name" placeholder="Nom" class="formulaire_contact1">
        <input type="email" placeholder="Email" class="formulaire_contact2">
        <br>
        <input type="text" placeholder="Sujet" class="formulaire_contact3">
        <br>
        <textarea class="formulaire_contact4" placeholder="Message"></textarea>
        <br>
        <input type="submit" name="Envoyer" class="formulaire_contact5">
     </form>
     
     <!--Fin Main-->

    <!--Footer-->
    

    <?php require_once SITE_ROOT. "Projet/Partials/Footer.php" ?>
    
</body>
</html>