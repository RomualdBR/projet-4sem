<?php
function connectToDbAndGetPdo(): PDO
{
    $dbname = 'the_power_of_memory';
    $host = 'localhost';

    $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
    $user = 'root';
    $pass = '';

    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        return $pdo;
    } catch (PDOException $e) {
        echo 'La connexion à la base de données a échouée.';
    }
}

function displayNbPartie(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) As nbparties FROM score');
    $pdoStatement->execute();
    $resultNbPartie = $pdoStatement->fetch();

    return $resultNbPartie->nbparties;
};

function displayTempsPartie(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT temps_partie As MeilleurTemps FROM score ORDER BY temps_partie ASC LIMIT 1');
    $pdoStatement->execute();
    $resultMeilleurTemps = $pdoStatement->fetch();

    return $resultMeilleurTemps->MeilleurTemps;
};

function displayNbJoueurs(): int
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) As NbJoueurs FROM utilisateur');
    $pdoStatement->execute();
    $resultNbJoueurs = $pdoStatement->fetch();

    return $resultNbJoueurs->NbJoueurs;
};


function recuperescore(): array
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT S.id_joueur, J.nom_jeu, U.pseudo, S.difficulte, S.score, (
        SELECT 
        CASE
        WHEN S.difficulte = "Difficile" THEN 3
        WHEN S.difficulte = "Normal" THEN 2
        WHEN S.difficulte = "Facile" THEN 1
        END
    ) AS nb_difficulte
    FROM score AS S
    INNER JOIN utilisateur AS U
    ON S.id_joueur = U.id
    INNER JOIN jeu AS J
    ON S.id_jeu = J.id
    ORDER BY J.nom_jeu ASC,nb_difficulte DESC, S.score ASC;');
    $pdoStatement->execute();
    $scores = $pdoStatement->fetchAll();
    return $scores;
};

function recherchescore(string $recherche): array
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT S.id_joueur, J.nom_jeu, U.pseudo, S.difficulte, S.score, (
        SELECT 
        CASE
        WHEN S.difficulte = "Difficile" THEN 3
        WHEN S.difficulte = "Normal" THEN 2
        WHEN S.difficulte = "Facile" THEN 1
        END
    ) AS nb_difficulte
    FROM score AS S
    INNER JOIN utilisateur AS U
    ON S.id_joueur = U.id
    INNER JOIN jeu AS J
    ON S.id_jeu = J.id
    WHERE U.pseudo LIKE :player ;');
    $pdoStatement->execute([":player" => "%" . $recherche . "%"]);
    $cherchescore = $pdoStatement->fetchAll();

    return $cherchescore;
};

function verificationconnexion(string $verifpseudo, string $verifmotdepasse): bool
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT id, pseudo, mot_de_passe
    FROM utilisateur
    WHERE pseudo = :pseudo');
    $pdoStatement->execute([
        ":pseudo" => $verifpseudo,
    ]);
    $verifconnexion = $pdoStatement->fetch();
    $IsEquale = password_verify($verifmotdepasse, $verifconnexion->mot_de_passe);

    if (!$IsEquale) {
        return false;
    } else {
        $_SESSION['userId'] = $verifconnexion->id;
        return true;
    }
};

function verifMdp(string $MDP): bool
{
    $passwordPattern = '/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/';
    return preg_match($passwordPattern, $MDP);
};

function verifPseudo(string $Pseudo): bool
{
    $PseudoPattern = '/^.{4,}$/';
    return preg_match($PseudoPattern, $Pseudo);
};

function verifEmail(string $Email): bool
{
    return filter_var($Email, FILTER_VALIDATE_EMAIL);
};

function verifPseudoacc(string $Pseudo)
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = :Pseudo;');
    $pdoStatement->execute([":Pseudo" => $Pseudo]);
    $PseudoUse = $pdoStatement->fetch();

    return isset($PseudoUse->pseudo);
};

function verifEmailacc(string $Email): bool
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT email FROM utilisateur WHERE email = :Email;');
    $pdoStatement->execute([":Email" => $Email]);
    $EmailUse = $pdoStatement->fetch();

    return isset($EmailUse->email);
};


if (isset($_POST["submit"])) {
    $file = $_FILES['file'];

    $filename = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $filesize = $file["size"];
    $fileError = $file["error"];

    if ($fileError == 0) {

        $uploadDir  = 'Projet/Userfiles/1/';

        $uploadPath = $uploadDir . $filename;

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            $imgutilisateur = $uploadPath;
        } 
    }
} 
$userProfileImage = $filePath;
