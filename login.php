<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php
     $a="0"
?>
<?php require_once "Projet/Partials/Head.php" ?>

<body>

    <?php require_once "Projet/Partials/Header.php"; ?>
     <section class=banniere>
        <p>SE CONNECTER</p>

        
     </section>
      <form action="#" class="formulair-connexion">
            <input type="text" id="nom" name="nom" required="required" placeholder="Nom" class="formulair-connexion1">
            <br>
            <input type="password" id="password" required="required" placeholder="Mot de passe" class="formulair-connexion2">
            <br>
            <input type="submit" value="Connexion" class="formulair-connexion3">
        </form>

        
        <?php require_once SITE_ROOT. "Projet/Partials/Footer.php" ?>
        
    </body>
</html>