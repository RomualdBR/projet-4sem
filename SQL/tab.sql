CREATE DATABASE IF NOT EXISTS the_power_of_memory CHARACTER SET 'utf8';
USE the_power_of_memory;

CREATE TABLE IF NOT EXISTS utilisateur ( 
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL, 
    mot_de_passe VARCHAR(50) NOT NULL,
    pseudo VARCHAR(50) NOT NULL, 
    date_heure_inscription DATETIME NOT NULL,
    date_heure_connexion DATETIME NOT NULL,
    PRIMARY KEY(id)
)
CHARACTER SET 'utf8'
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS score (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_joueur INT(11) UNSIGNED NOT NULL,
    id_jeu INT(11) UNSIGNED NOT NULL,
    difficulte VARCHAR(15) NOT NULL, 
    score INT(11) NOT NULL, 
    date_heure_partie DATETIME NOT NULL,
    PRIMARY KEY (id)
    CONSTRAINT fk_score_utilisateur FOREIGN KEY id_joueur REFERENCES utilisateur(id) ON DELETE SET NULL
    CONSTRAINT fk_score_jeu FOREIGN KEY id_jeu REFERENCES jeu(id) ON DELETE SET NULL
)
CHARACTER SET 'utf8'
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS messages (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_jeu INT(11) UNSIGNED NOT NULL,
    id_expediteur INT(11) UNSIGNED NOT NULL,
    texte_message TEXT NOT NULL,
    date_heure_message DATETIME NOT NULL,
    PRIMARY KEY(id)
    CONSTRAINT fk_message_jeu FOREIGN KEY id_jeu REFERENCES jeu(id) ON DELETE SET NULL
    CONSTRAINT fk_message_utilisateur FOREIGN KEY id_expediteur REFERENCES utilisateur(id) ON DELETE SET NULL
)
CHARACTER SET 'utf8'
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS jeu (
    id INT(11)UNSIGNED NOT NULL AUTO_INCREMENT ,
    nom_jeu VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
)
CHARACTER SET 'utf8'
ENGINE = INNODB;
