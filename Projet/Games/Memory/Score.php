<?php require_once "../../Utils/common.php" ?>
<!DOCTYPE html>
<html lang="fr">

<?php
$a = 0
?>
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
                    <th>Rank</th>
                    <th>Pseudo</th>
                    <th>Dificulte</th>
                    <th>Scores</th>
                    <th class="bord-toprond2">Date/Heure</th>
                </tr>

            </thead>
            <tbody class="bas-scores">
                <tr>
                    <td>Memory</td>
                    <td class="Rank">#</td>
                    <td class="pseudo-scores">
                        <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" alt="" class="image-score">
                        <p class="pseudo-rank"><a href="#" class="pseudo-click">Benilde</a></p>
                    </td>
                    <td>Hard</td>
                    <td>99999</td>
                    <td>01/10/2023 00:00</td>
                </tr>

                <tr>
                    <td>Memory</td>
                    <td class="Rank">#</td>
                    <td class="pseudo-scores">
                        <img src="<?= PROJECT_FOLDER ?>/asset/images/gégé.png" alt="" class="image-score">
                        <p class="pseudo-rank"><a href="#" class="pseudo-click">Kilian</a></p>
                    </td>
                    <td>Hard</td>
                    <td>99999</td>
                    <td>01/10/2023 00:00</td>
                </tr>

                <tr>
                    <td>Memory</td>
                    <td class="Rank">#</td>
                    <td class="pseudo-scores">
                        <img src="<?= PROJECT_FOLDER ?>/asset/images/big_mom.png" alt="" class="image-score">
                        <p class="pseudo-rank"><a href="#" class="pseudo-click">Romuald</a></p>
                    </td>
                    <td>Hard</td>
                    <td>99999</td>
                    <td>01/10/2023 00:00</td>
                </tr>

                <tr>
                    <td>Memory</td>
                    <td class="Rank">1</td>
                    <td class="pseudo-scores">
                        <img src="<?= PROJECT_FOLDER ?>/asset/images/YOU.png" alt="" class="image-score">
                        <p class="pseudo-rank"><a href="#" class="pseudo-click">YOU</a></p>
                    </td>
                    <td>Easy</td>
                    <td>00000</td>
                    <td>01/10/2023 00:00</td>
                </tr>

                <tr>
                    <td>Memory</td>
                    <td class="Rank">2</td>
                    <td class="pseudo-scores">
                        <img src="<?= PROJECT_FOLDER ?>/asset/images/photo_de_profil_MyAccount.png" alt="" class="image-score">
                        <p class="pseudo-rank"><a href="#" class="pseudo-click">----</a></p>
                    </td>
                    <td>-</td>
                    <td>-----</td>
                    <td>--/--/---- 00:00</td>
                </tr>


            </tbody>
        </table>
    </section>


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>