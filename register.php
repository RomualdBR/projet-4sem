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

     <!--Fin header-->
     <!--Main-->

     <section class=banniere>
        <p>INSCRIPTION</p>
     </section>
      <form action="#" class="formulair-inscription">
            <input type="text" id="email" name="Email" required="required" placeholder="Email" class="formulair-inscription1">
            <br>
            <input type="text" id="pseudo" name="pseudo" required="Required" placeholder="Pseudo" class="formulair-inscription2">
            <br>
            <input type="password" id="mdp" name="mots de passe" required="required" placeholder="Mot de passe" class="formulair-inscription3">
            <br>
            <input type="password" id="cmdp" name="confirmation mot de passe" required="required" placeholder="Confirmez le mot de passe" class="formulair-inscription4">
            <br>
            <input type="submit" value="Inscription" class="formulair-inscription5">
        </form>

        <!--Fin main-->
        <!--Footer-->

        <?php require_once SITE_ROOT. "Projet/Partials/Footer.php" ?>

    </body>
</html>