<!DOCTYPE html>
<html lang="fr">

<?php
require_once "../../Utils/common.php";
require_once "../../Utils/database.php";
require_once "../../Partials/Head.php";
?>


<body>

    <?php require_once "../../Partials/Header.php"; ?>

    <section class=banniere>
        <p>SCORES</p>
    </section>

    <section>
        <form>
            <label class="ensemble_barre_recherche">
                <input type="text" class="texte_recherche" name="query">
                <button class="e"> <img src="<?php echo PROJECT_FOLDER; ?>asset/images/loupe.png" class="img_loope"></button>
            </label>
        </form>
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
                <?php if (isset($_GET['query'])) :
                    foreach (recherchescore($_GET['query']) as $score) :
                ?>
                        <?php if (isset($_SESSION['userId']) and $score->id_joueur == $_SESSION["userId"]) : ?>
                            <tr>
                                <td style="color: orange;"><?= $score->nom_jeu ?> </td>
                                <td class="pseudo-scores">
                                    <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" class="image-score" style="border-color:orange;">
                                    <p class="pseudo-rank"><a style="color: orange;" href="#" class="pseudo-click"><?= $score->pseudo ?></a></p>
                                </td>
                                <td style="color: orange;"><?= $score->difficulte ?></td>
                                <td style="color: orange;"><?= $score->score ?></td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td><?= $score->nom_jeu ?></td>
                                <td class="pseudo-scores">
                                    <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" class="image-score">
                                    <p class="pseudo-rank"><a href="#" class="pseudo-click"><?= $score->pseudo ?></a></p>
                                </td>
                                <td><?= $score->difficulte ?></td>
                                <td><?= $score->score ?></td>
                            </tr>
                        <?php endif; ?>


                    <?php endforeach;
                else : foreach (recuperescore() as $score) : ?>
                        <?php if (isset($_SESSION['userId']) and $score->id_joueur == $_SESSION["userId"]) : ?>
                            <tr>
                                <td style="color: orange;"><?= $score->nom_jeu ?> </td>
                                <td class="pseudo-scores">
                                    <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" class="image-score" style="border-color:orange;">
                                    <p class="pseudo-rank"><a style="color: orange;" href="#" class="pseudo-click"><?= $score->pseudo ?></a></p>
                                </td>
                                <td style="color: orange;"><?= $score->difficulte ?></td>
                                <td style="color: orange;"><?= $score->score ?></td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td><?= $score->nom_jeu ?></td>
                                <td class="pseudo-scores">
                                    <img src="<?= PROJECT_FOLDER ?>/asset/images/benilde.png" alt="" class="image-score">
                                    <p class="pseudo-rank"><a href="#" class="pseudo-click"><?= $score->pseudo ?></a></p>
                                </td>
                                <td><?= $score->difficulte ?></td>
                                <td><?= $score->score ?></td>
                            </tr>
                <?php endif;
                    endforeach;
                endif; ?>
            </tbody>
        </table>
    </section>


    <?php require_once SITE_ROOT . "Projet/Partials/Footer.php" ?>

</body>

</html>