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
    <form action="#" class="formulair-connexion" method="post">
        <input type="text" id="nom" name="nom" required="required" placeholder="Nom" class="formulair-connexion1">
        <br>
        <input type="password" name="pwd" id="password" required="required" placeholder="Mot de passe" class="formulair-connexion2">
        <br>
        <input type="submit" value="Connexion" class="formulair-connexion3">
        <?php
        
        if (isset($_POST['nom']) and isset($_POST['pwd'])) {
            if (verificationconnexion($_POST['nom'], $_POST['pwd'])) {
                header('location: MyAccount.php');
            } else {
                echo "l'identifiant et le mot de passe ne corresponde pas";
            }
        }
        
        ?>
    </form>


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>