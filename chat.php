<?php require_once "Projet/Utils/database.php" ?>
<?php require_once "Projet/Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

</head>
<?php
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT M.texte_message as texte_message, M.id_expediteur as id_expediteur, U.pseudo as pseudo, M.date_heure_message as date_heure_message
FROM messages AS M
INNER JOIN utilisateur AS U
ON M.id_expediteur = U.id
WHERE M.date_heure_message >= NOW() - INTERVAL 1 DAY;
ORDER BY M.date_heure_message');
$pdoStatement->execute([]);
$GlobalMessage = $pdoStatement->fetchAll();
?>

<body>

    <section class="tchat">
        <div class="tchat-userprofile">
            <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="tchat-photoprofile" class="tchat-userphoto">
            <p>Chat Générale</p>
        </div>

        
        <div class="tchat-message">
                    <?php foreach ($GlobalMessage as $Messages) : ?>
                        <?php if ($_SESSION["userId"] == $Messages->id_expediteur) : ?>
                            <div class="tchat-usermessage">
                                <p class="tchat-usermessageinfo autor"><?php echo $Messages->pseudo ?></p>
                                <p class="tchat-usermessageconteiner"><?php echo $Messages->texte_message ?></p>
                                <p class="tchat-usermessageinfo"><?php echo $Messages->date_heure_message ?></p>
                            </div>
                        <?php else : ?>
                            <div class="tchat-othermessage">
                                <img src="<?= PROJECT_FOLDER ?>asset/images/gégé.png" alt="other" class="tchat-otherphotoprofile">
                                <p class="tchat-othermessageinfo"><?php echo $Messages->pseudo ?></p>
                                <p class="tchat-othermessageconteiner"><?php echo $Messages->texte_message ?></p>
                                <p class="tchat-othermessageinfo"><?php echo $Messages->date_heure_message ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>


            <div class="tchat-textmessage">
                <form method="post">
                    <input type="text" name="message" placeholder="Ecrire..." class="tchat-tchatbox" required>
                    <input type="submit" name="envoyer" class="tchat-submit">
                </form>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST["message"])) {
        $pdo = connectToDbAndGetPdo();
        $pdoStatement = $pdo->prepare('INSERT INTO messages(id_jeu, id_expediteur, texte_message, date_heure_message)
                VALUES  (1, :id_expediteur, :text_message, NOW());');
        $pdoStatement->execute([
            ':text_message' => $_POST["message"],
            ":id_expediteur" => $_SESSION["userId"]
        ]);
        $userModif = $pdoStatement->fetch();
    }
    ?>
</body>

</html>