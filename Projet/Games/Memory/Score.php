<?php
 require_once "../../Utils/common.php";
 require_once "../../Utils/database.php";

?>
<!DOCTYPE html>
<html lang="fr">

<?php require_once SITE_ROOT . "Projet/Partials/Head.php" ?>

<body>

    <?php require_once SITE_ROOT . "Projet/Partials/Header.php"; ?>

    <section class=banniere>
        <p>SCORES</p>
    </section>

    <section class="GOAT">
        <table class="tableau-scores">
            <thead class="haut-scores">
                <tr>
                    <th class="bord-toprond">Nom du jeu</th>
                    <th>Pseudo</th>
                    <th>Dificulte</th>
                    <th>Scores</th>
                </tr>

            </thead>
            <tbody class="bas-scores">
                <?php foreach (recuperescore() as $score): ?>

                    <tr>
                        <td><?= $score -> nom_jeu?></td>
                        <td class="pseudo-scores">
                            <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" alt="" class="image-score">
                            <p class="pseudo-rank"><a href="#" class="pseudo-click"><?= $score->pseudo ?></a></p>
                        </td>
                        <td><?= $score -> difficulte ?></td>
                        <td><?= $score -> score ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </section>


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>