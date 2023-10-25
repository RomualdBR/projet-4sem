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


function recuperescore()
{
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score, (
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
    WHERE J.nom_jeu = "The Power Of Memory" OR U.id = "utilisateur6" OR S.difficulte = "Difficile"
    ORDER BY J.nom_jeu ASC,nb_difficulte DESC, S.score ASC;');
    $pdoStatement->execute();
    $scores = $pdoStatement->fetchAll();
    return $scores;

    foreach ($scores as $score) {
        echo $score->nom_jeu;
        echo $score->pseudo;
        echo $score->difficulte;
        echo $score->score;
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