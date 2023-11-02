<?php require_once "Projet/Utils/database.php" ?>
<?php require_once "Projet/Utils/common.php" ?>

<?php
if (isset($_POST["envoie_msg"])) {
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('INSERT INTO messages(id_jeu, id_expediteur, texte_message, date_heure_message)
                        VALUES  (1, :id_expediteur, :text_message, NOW());');
    $pdoStatement->execute([
        ':text_message' => $_POST["envoie_msg"],
        ":id_expediteur" => $_SESSION["userId"]
    ]);
    $userModif = $pdoStatement->fetch();
}

?>