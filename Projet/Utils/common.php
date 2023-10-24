<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ADMIN_MAIL', 'mail@gmail.com');

define('PROJECT_FOLDER', '/projet-4sem/');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . PROJECT_FOLDER);

session_start();

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
