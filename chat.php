<?php require_once SITE_ROOT . "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $a = "0"
    ?>
    <?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

</head>

<body>

    <section class="tchat">
        <div class="tchat-userprofile">
            <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="tchat-photoprofile" class="tchat-userphoto">
            <p>Lucky</p>
        </div>

        <div class="tchat-message">
            <div class="tchat-usermessage">
                <p class="tchat-usermessageinfo autor">Moi</p>
                <p class="tchat-usermessageconteiner">Eh mec ! J'ai depasser ton record !</p>
                <p class="tchat-usermessageinfo">Aujourd'hui à 17:32</p>
            </div>

            <div class="tchat-othermessage">
                <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="other" class="tchat-otherphotoprofile">
                <p class="tchat-othermessageinfo">other</p>
                <p class="tchat-othermessageconteiner">Ah bon ? Pourtant j'avais fais
                    de mon mieux pour qu'il sois imbattable !</p>
                <p class="tchat-othermessageinfo">Aujourd'hui à 17:34</p>
            </div>

            <div class="tchat-usermessage">
                <p class="tchat-usermessageinfo autor">Moi</p>
                <p class="tchat-usermessageconteiner">Je suis juste meilleur que toi</p>
                <p class="tchat-usermessageinfo">Aujourd'hui à 17:36</p>
            </div>

            <div class="tchat-usermessage">
                <p class="tchat-usermessageinfo autor">Moi</p>
                <p class="tchat-usermessageconteiner">Tu peux toujours essayer de me battre</p>
                <p class="tchat-usermessageinfo">Aujourd'hui à 17:36</p>
            </div>

            <div class="tchat-othermessage">
                <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="other" class="tchat-otherphotoprofile">
                <p class="tchat-othermessageinfo">other</p>
                <p class="tchat-othermessageconteiner">Je vais Réussir ! Tu vas voir !</p>
                <p class="tchat-othermessageinfo">Aujourd'hui à 17:37</p>
            </div>

            <div class="tchat-othermessage">
                <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="other" class="tchat-otherphotoprofile">
                <p class="tchat-othermessageinfo">other</p>
                <p class="tchat-othermessageconteiner">Mais ça risque d'être plus compliquer que prevue</p>
                <p class="tchat-othermessageinfo">Aujourd'hui à 17:39</p>
            </div>
        </div>


        <div class="tchat-textmessage">
            <input type="text" name="message" placeholder="Ecrire..." class="tchat-tchatbox" required>
            <input type="submit" name="envoyer" class="tchat-submit">
        </div>
    </section>
</body>

</html>