<?php require_once "Projet/Utils/database.php" ?>
<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>
    <!--Header-->

    <?php require_once SITE_ROOT . "Projet/Partials/Header.php"; ?>

    <!--Fin header-->
    <!--Main-->

    <section class=banniere>
        <p>INSCRIPTION</p>
    </section>
    <?php
    if (isset($_POST['email'])) {
        $verifEmail = verifEmail($_POST['email']);
    }
    ?>
    <?php
    if (isset($_POST['pseudo'])) {
        $verifPseudo = verifPseudo($_POST['pseudo']);
    }
    ?>
    <?php
    if (isset($_POST['motsDePasse'])) {
        $verifMDP = verifMdp($_POST['motsDePasse']);
    }

    if (isset($_POST['confirmationMotDePasse'])) {
        $verifCMDP = verifMdp($_POST['confirmationMotDePasse']);
    }
    ?>

    <form action="#" class="formulair-inscription" method="post">
        <input type="text" id="email" name="email" required="required" placeholder="Email" class="formulair-inscription1">
        <br>
        <?php
        if (isset($_POST['email'])) {
            if (!$verifEmail) {
                echo "L'adresse mail ne correspond pas au critères";
            }
        }
        ?>
        <br>
        <input type="text" id="pseudo" name="pseudo" required="Required" placeholder="Pseudo" class="formulair-inscription2">
        <br>
        <?php
        if (isset($_POST['pseudo'])) {
            if (!$verifPseudo) {
                echo "Le pseudo ne correspond pas au critères";
            }
        }
        ?>
        <br>
        <input type="password" id="mdp" name="motsDePasse" required="required" placeholder="Mot de passe" class="formulair-inscription3">
        <br>
        <?php
        if (isset($_POST['motsDePasse'])) {
            if (!$verifMDP) {
                echo "Le mot de passe ne correspond pas au critères";
            }
        }
        ?>
        <br>
        <input type="password" id="cmdp" name="confirmationMotDePasse" required="required" placeholder="Confirmez le mot de passe" class="formulair-inscription4">
        <br>
        <?php
        if (isset($_POST['confirmationMotDePasse'])) {
            if (!$verifCMDP) {
                echo "Le mot de passe ne correspond pas au critères";
            }
        }
        ?>
        <br>
        <?php
        if (isset($_POST['motsDePasse']) && isset($_POST['confirmationMotDePasse'])) {
            if ($_POST['motsDePasse'] == $_POST['confirmationMotDePasse']) {
                $verifIdentique = true;
            } else {
                $verifIdentique = false;
                echo "Les mots de passes doivent être identique";
            }
        };
        ?>
        <br>
        <input type="submit" value="Inscription" class="formulair-inscription5">
        <br>
        <?php
        if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['motsDePasse']) && isset($_POST['confirmationMotDePasse'])) {
            if ($verifEmail && $verifPseudo && $verifIdentique && $verifCMDP && $verifMDP) {
                $pdo = connectToDbAndGetPdo();
                $pdoStatement = $pdo->prepare('INSERT INTO utilisateur (email, mot_de_passe, pseudo, date_heure_connexion)
            VALUES (:Email,:MDP,:Pseudo,Now());');
                $pdoStatement->execute([
                    ':Email' => $_POST['email'],
                    ':MDP' => password_hash($_POST['motsDePasse'], PASSWORD_DEFAULT),
                    ':Pseudo' => $_POST['pseudo'],
                ]);

                echo "Votre inscription a bien été réalisée";
            } else {
                echo "your a loser";
            }
        }
        ?>
    </form>

    <!--Fin main-->
    <!--Footer-->

    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>