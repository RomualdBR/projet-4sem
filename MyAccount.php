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
    $pdoStatement = $pdo->prepare('SELECT email, mot_de_passe FROM utilisateur WHERE id = :id');
    $pdoStatement->execute([
        ":id" => $_SESSION["userId"]
    ]);
    $userModif = $pdoStatement->fetch();
    ?>

    <?php
    if (isset($_POST['nouveau_Email'])) {
        $verifEmail = verifEmail($_POST['nouveau_Email']);
        $verifEmailacc = verifEmailacc($POST['nouveau_Email']);

        if (!$verifEmail) {
            $textEmail = "L'entrée n'est pas une adresse Email";
        }
        elseif (!$verifEmailacc){
            $textEmail = "L'adresse mail n'est pas disponible";
        }
        else{
            $textEmail = "";
        }
    }
    else{
        $textEmail = "";
    }

    if (isset($_POST['nouveau_CEmail'])) {
        $verifNCEmail = verifEmail($_POST['nouveau_CEmail']);

        if (!$verifNCEmail) {
            $textNCEmail = "L'entrée n'est pas une adresse mail";
        }
        else{
            $textNCEmail = "";
        }
    }
    else{
        $textCEmail = "";
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
                <p class="info_utilisateur1"> <span class="bold">Nom, prenom : </span>BRISACIER Romuald</p>
                <p class="info_utilisateur2"> <span class="bold">Date de naissace : </span>JJ/MM/AA</p>
                <p class="info_utilisateur3"> <span class="bold">Email : </span>monemail@gmail.com</p>
                <p class="info_utilisateur4"><span class="bold">score : </span> 18 363</p>
            </div>
            <div class="description_utilisateur">
                <h3 class="bold">A propos de vous :</h3>
                <textarea name="description profil" id="" cols="30" rows="10" class="description_profil" placeholder="Décrivez vous, vos passions ou racontez une histoire. Faites comme vous voulez."></textarea>
            </div>
        </section>

        <section class="changement_info_utilisateur">
            <form action="changement_info_mail" method="post">
                <h4 class="changement_info_mail4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mail0">Entrez votre email actuelle :</p>
                <input value="<?php echo $userModif->email?>" type="text" name="ancien_Email" class="changement_info_mail2" required="required" placeholder="mail">

                <p class="changement_info_mail1">entrez votre nouvel email :</p>
                <input type="text" name="nouveau_Email" class="changement_info_mail2" required="required" placeholder="mail">
                <br>

                <?php echo $textEmail ?>

                <br>
                <p class="changement_info_mail1">Confirmer votre nouveau mail :</p>
                <input type="text" name="nouveau_CEmail" class="changement_info_mail2" required="required" placeholder="mail">
                <br>

                <?php echo $textNCEmail ?>

                <br>
                <p class="changement_info_mail1">Entrer votre mot de passe :</p>
                <input type="password" name="confirmation_Email" class="changement_info_mail2" required="required" placeholder="mot de passe">
                <br>

                <?php echo $textCEmail ?>

                <br>
                <input type="submit" name="submit" value="Confirmer" id="submit" class="changement_info_mail3">
            </form>

            <form action="changement_info_mots_de_passe">
                <h4 class="changement_info_mots_de_passe4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mots_de_passe0">Entrez votre ancien mot de passe : </p>
                <input value="<?php echo $userModif->mot_de_passe?>" type="password" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">

                <p class="changement_info_mots_de_passe1">Entrez votre nouveau mot de passe : </p>
                <input type="password" name="" id="" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">

                <p class="changement_info_mots_de_passe1">Confirmez votre nouveau mot de passe : </p>
                <input type="password" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">

                <br>
                <input type="submit" id="submit" value="Confirmer" class="changement_info_mots_de_passe3">
            </form>
        </section>
    </section>
    <!--Fin main-->

    <!--Footer-->


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

    <!--Fin footer-->

</body>

</html>