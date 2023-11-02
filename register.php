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
        $verifEmailacc = verifEmailacc($_POST['email']);

        if (!$verifEmail) {
            $textEmail = "L'entrée n'est pas une adresse Email";
        } elseif ($verifEmailacc) {
            $textEmail = "L'adresse mail est déjà utilisé";
        } else {
            $textEmail = "";
        }
    } else {
        $textEmail = "";
    }

    if (isset($_POST['pseudo'])) {
        $verifPseudo = verifPseudo($_POST['pseudo']);
        $verifPseudoacc = verifPseudoacc($_POST['pseudo']);

        if (!$verifPseudo) {
            $textPseudo = "Le pseudo ne correspond pas au critères";
        } elseif ($verifPseudoacc) {
            $textPseudo = "Le pseudo est déjà utilisé";
        } else {
            $textPseudo = "";
        }
    } else {
        $textPseudo = "";
    }

    if (isset($_POST['motsDePasse'])) {
        $verifMDP = verifMdp($_POST['motsDePasse']);

        if (!$verifMDP) {
            $textMDP = "Le mot de passe ne correspond pas au critères";
        } else {
            $textMDP = "";
        }
    } else {
        $textMDP = "";
    }

    if (isset($_POST['confirmationMotDePasse'])) {
        $verifCMDP = verifMdp($_POST['confirmationMotDePasse']);

        if (!$verifCMDP) {
            $textCMDP = "Le mot de passe ne correspond pas au critères";
        } else {
            $textCMDP = "";
        }
    } else {
        $textCMDP = "";
    }

    if (isset($_POST['motsDePasse']) && isset($_POST['confirmationMotDePasse'])) {
        if ($_POST['motsDePasse'] == $_POST['confirmationMotDePasse']) {
            $textIdentique = "";
            $verifIdentique = true;
        } else {
            $verifIdentique = false;
            $textIdentique = "Les mots de passes doivent être identique";
        }
    } else {
        $textIdentique = "";
    }

    if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['motsDePasse']) && isset($_POST['confirmationMotDePasse'])) {
        $everythingOkey = $verifEmail && !$verifEmailacc && !$verifPseudoacc && $verifPseudo && $verifIdentique && $verifCMDP && $verifMDP;
    }
    ?>
    <form action="#" class="formulair-inscription" method="post">
        <input value="<?php if (isset($everythingOkey)) {
                            if (!$everythingOkey) {
                                if (isset($_POST["email"])) {
                                    echo $_POST["email"];
                                }
                            }
                        } ?>" type="text" id="email" name="email" required="required" placeholder="Email" class="formulair-inscription1">
        <br>

        <?php
        echo $textEmail;
        ?>

        <br>
        <input value="<?php if (isset($everythingOkey)) {
                            if (!$everythingOkey) {
                                if (isset($_POST["pseudo"])) {
                                    echo $_POST["pseudo"];
                                }
                            }
                        } ?>" type="text" id="pseudo" name="pseudo" required="Required" placeholder="Pseudo" class="formulair-inscription2">
        <br>

        <?php
        echo $textPseudo;
        ?>

        <br>
        <div class="mot-de-passe">
            <input type="password" id="mdp" oninput="checkPassword()" name="motsDePasse" required="required" placeholder="Mot de passe" class="formulair-inscription3">

            <br>
            <progress id="complexite" max="100" class="faible" value="0"></progress>
            <P id="complexite-texte"></P>
        </div>
        <br>
        <?php
        echo $textMDP;
        ?>

        <br>
        <input type="password" id="cmdp" name="confirmationMotDePasse" required="required" placeholder="Confirmez le mot de passe" class="formulair-inscription4">
        <br>



        <?php
        echo $textCMDP;
        ?>
        <br>
        <?php
        echo $textIdentique;
        ?>
        <br>

        <input type="submit" value="Inscription" class="formulair-inscription5">
        <br>
        <?php
        if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['motsDePasse']) && isset($_POST['confirmationMotDePasse'])) {
            if ($everythingOkey) {
                $pdo = connectToDbAndGetPdo();
                $pdoStatement = $pdo->prepare('INSERT INTO utilisateur (email, mot_de_passe, pseudo, date_heure_connexion)
            VALUES (:Email,:MDP,:Pseudo,Now());');
                $pdoStatement->execute([
                    ':Email' => $_POST['email'],
                    ':MDP' => password_hash($_POST['motsDePasse'], PASSWORD_DEFAULT),
                    ':Pseudo' => $_POST['pseudo']
                ]);

                echo "Votre inscription a bien été réalisée";
                header('location: login.php');
            } else {
                echo "Skill Issue";
            }
        }
        ?>
    </form>

    <!--Fin main-->
    <!--Footer-->

    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

<script src="script.js"></script>

</html>