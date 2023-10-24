<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php
$a = "0"
?>
<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>

    <!--Header-->

    <?php require_once SITE_ROOT . "Projet/Partials/Header.php"; ?>

    <!--Fin header-->

    <!--Main-->
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
            <form action="changement_info_mail">
                <h4 class="changement_info_mail4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mail0">Entrez votre email actuelle :</p>
                <input type="text" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">entrez votre nouvel email :</p>
                <input type="text" name="" id="" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">Confirmer votre nouveau mail :</p>
                <input type="text" class="changement_info_mail2" required="required" placeholder="mail">
                <p class="changement_info_mail1">Entrer votre mot de passe :</p>
                <input type="password" class="changement_info_mail2" required="required" placeholder="mot de passe">
                <br>
                <input type="submit" name="submit" value="Confirmer" id="submit" class="changement_info_mail3">
            </form>
            <form action="changement_info_mots_de_passe">
                <h4 class="changement_info_mots_de_passe4">Veuillez suivre les étapes suivantes si vous désirez changer de mots de passe :</h4>
                <p class="changement_info_mots_de_passe0">Entrez votre ancien mot de passe : </p>
                <input type="password" class="changement_info_mots_de_passe2" required="required" placeholder="mot de passe">
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