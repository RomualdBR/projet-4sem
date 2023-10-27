<?php require_once "Projet/Utils/database.php";
require_once "Projet/Utils/common.php";
?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>

    <!--Header-->

    <?php require_once SITE_ROOT . "Projet/Partials/Header.php"; ?>

    <!--Fin header-->

    <!--Main-->
    <?php
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT id, email, mot_de_passe, pseudo FROM utilisateur WHERE id = :id');
    $pdoStatement->execute([
        ":id" => $_SESSION["userId"]
    ]);
    $userModif = $pdoStatement->fetch();
    ?>

    <?php
    //Modification de l'adresse mail

    if (isset($_POST['nouveau_Email'])) {
        $verifEmail = verifEmail($_POST['nouveau_Email']);
        $verifEmailacc = verifEmailacc($_POST['nouveau_Email']);

        if (!$verifEmail) {
            $textEmail = "L'entrée n'est pas une adresse Email";
        } elseif ($verifEmailacc) {
            $textEmail = "L'adresse mail n'est pas disponible";
        } else {
            $textEmail = "";
        }
    } else {
        $textEmail = "";
    }

    if (isset($_POST['nouveau_CEmail'])) {
        $verifNCEmail = $_POST['nouveau_CEmail'] == $_POST['nouveau_Email'];

        if (!$verifNCEmail) {
            $textNCEmail = "L'entrée est différente de la nouvelle adresse mail";
        } else {
            $textNCEmail = "";
        }
    } else {
        $textNCEmail = "";
    }

    if (isset($_POST['confirmation_Email'])) {
        $verifCMDP = password_verify($_POST['confirmation_Email'], $userModif->mot_de_passe);

        if (!$verifCMDP) {
            $textCEmail = "Mot de passe incorecte";
        } else {
            $textCEmail = "";
        }
    } else {
        $textCEmail = "";
    }

    if (isset($_POST['nouveau_Email']) && isset($_POST['nouveau_CEmail']) && isset($_POST['confirmation_Email'])) {
        if ($verifEmail && !$verifEmailacc && $verifNCEmail && $verifCMDP) {
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('UPDATE utilisateur
                    SET email = :Email
                    WHERE id = :id');
            $pdoStatement->execute([
                ':Email' => $_POST['nouveau_Email'],
                ':id' => $userModif->id
            ]);

            $textRéaEmail = "Travaille terminé !";
            header('location: index.php');
        } else {
            $textRéaEmail = "";
        }
    } else {
        $textRéaEmail = "";
    }



    //Modification de mot de passe

    if (isset($_POST['AncienMDP'])) {
        $verifAncienMDP = password_verify($_POST['AncienMDP'], $userModif->mot_de_passe);

        if (!$verifAncienMDP) {
            $textAncienMDP = "Mot de passe incorecte";
        } else {
            $textAncienMDP = "";
        }
    } else {
        $textAncienMDP = "";
    }

    if (isset($_POST['NouveauMDP'])) {
        $verifNouveauMDP = verifMdp($_POST['NouveauMDP']);

        if (!$verifNouveauMDP) {
            $textNouveauMDP = "Ne correspond pas au critères";
        } else {
            $textNouveauMDP = "";
        }
    } else {
        $textNouveauMDP = "";
    }

    if (isset($_POST['ConfirmMDP'])) {
        $verifConfirmMDP = $_POST['NouveauMDP'] == $_POST['ConfirmMDP'];

        if (!$verifConfirmMDP) {
            $textConfirmMDP = "les mots de passe ne correspondent pas";
        } else {
            $textConfirmMDP = "";
        }
    } else {
        $textConfirmMDP = "";
    }

    if (isset($_POST['AncienMDP']) && isset($_POST['NouveauMDP']) && isset($_POST['ConfirmMDP'])) {
        if ($verifAncienMDP && $verifNouveauMDP && $verifConfirmMDP) {
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('UPDATE utilisateur
                    SET mot_de_passe = :mot_de_passe
                    WHERE id = :id');
            $pdoStatement->execute([
                ':mot_de_passe' => password_hash($_POST['NouveauMDP'], PASSWORD_DEFAULT),
                ':id' => $userModif->id
            ]);

            $textRéaMDp = "Travaille terminé !";
        } else {
            $textRéaMDp = "";
        }
    } else {
        $textRéaMDp = "";
    }
    ?>


    <section class="MyAccount">
        <section class="Banière_profil_utilisateur">
            <div class="bloc_utilisateur">
                <img src="<?= PROJECT_FOLDER ?>asset/images/photo_de_profil_MyAccount.png" alt="photo_de_profil_banniere" class="photo_de_profil_banniere">
                <p class="pseudo">Nom Utilisateur</p>
            </div>
            <div class="caracteristique_utilisateur">
                <h3 class="info_utilisateur">Information utilisateur :</h3>
                <p class="info_utilisateur1"> <span class="bold">Pseudo : </span><?php echo $userModif->pseudo ?></p>
                <p class="info_utilisateur2"> <span class="bold">Date de naissace : </span>JJ/MM/AA</p>
                <p class="info_utilisateur3"> <span class="bold">Email : </span><?php echo $userModif->email ?></p>
                <p class="info_utilisateur4"><span class="bold">score : </span> 18 363</p>
            </div>
            <div class="description_utilisateur">
                <h3 class="bold">A propos de vous :</h3>
                <textarea name="description profil" id="" cols="30" rows="10" class="description_profil" placeholder="Décrivez vous, vos passions ou racontez une histoire. Faites comme vous voulez."></textarea>
            </div>
        </section>

        <section class="changement_info_utilisateur">
            <form method="post">
                <h4 class="changement_info_mail4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mail0">Entrez votre email actuelle :</p>

                <input value="<?php echo $userModif->email ?>" type="text" name="ancien_Email" class="changement_info_mail2" required="required" placeholder="mail">

                <p class="changement_info_mail1">entrez votre nouvelle email :</p>
                <input type="text" name="nouveau_Email" class="changement_info_mail2" required="required" placeholder="mail">
                <br>

                <p class="changement_info_mail1"><?php echo $textEmail ?></p>

                <br>
                <p class="changement_info_mail1">Confirmer votre nouveau mail :</p>
                <input type="text" name="nouveau_CEmail" class="changement_info_mail2" required="required" placeholder="mail">
                <br>

                <p class="changement_info_mail1"><?php echo $textNCEmail ?></p>

                <br>
                <p class="changement_info_mail1">Entrer votre mot de passe :</p>
                <input type="password" name="confirmation_Email" class="changement_info_mail2" required="required" placeholder="mot de passe">
                <br>

                <p class="changement_info_mail1"><?php echo $textCEmail ?></p>

                <br>
                <input type="submit" name="submit" class="changement_info_mail3">
            </form>



            <form method="post">
                <h4 class="changement_info_mots_de_passe4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mots_de_passe0">Entrez votre ancien mot de passe : </p>
                <input type="password" name="AncienMDP" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <br>

                <p class="changement_info_mail1"><?php echo $textAncienMDP ?></p>

                <br>
                <p class="changement_info_mots_de_passe1">Entrez votre nouveau mot de passe : </p>
                <input type="password" name="NouveauMDP" id="" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <br>

                <p class="changement_info_mail1"><?php echo $textNouveauMDP ?></p>

                <br>
                <p class="changement_info_mots_de_passe1">Confirmez votre nouveau mot de passe : </p>
                <input type="password" name="ConfirmMDP" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
                <br>

                <p class="changement_info_mail1"><?php echo $textConfirmMDP ?></p>

                <br>
                <input type="submit" class="changement_info_mots_de_passe3">
                <br>
                <p class="changement_info_mail1"><?php echo $textRéaMDp ?></p>

            </form>
        </section>
    </section>
    <!--Fin main-->

    <!--Footer-->


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

    <!--Fin footer-->

</body>

</html>
