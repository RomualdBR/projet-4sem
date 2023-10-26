<?php require_once './Projet/Utils/database.php'; ?>
<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once "Projet/Partials/Head.php"; ?>

<body>

    <?php require_once "Projet/Partials/Header.php"; ?>
    <section class=banniere>
        <p>SE CONNECTER</p>



    </section>
    <form action="#" class="formulair-connexion">
        <input type="text" id="nom" name="nom" required="required" placeholder="Nom" class="formulair-connexion1">
        <br>
        <input type="password" name="pwd" id="password" required="required" placeholder="Mot de passe" class="formulair-connexion2">
        <br>
        <input type="submit" value="Connexion" class="formulair-connexion3">
        <?php
        if (isset($_GET['nom']) and isset($_GET['pwd'])) {
            if (verificationconnexion($_GET['nom'], $_GET['pwd'])) {
                echo "vous êtes bien connecter";
            } else {
                echo "vous n'êtes pas connecté";
                session_destroy();
            }
        }
        ?>
    </form>


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>