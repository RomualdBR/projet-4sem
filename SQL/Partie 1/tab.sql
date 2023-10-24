CREATE DATABASE IF NOT EXISTS the_power_of_memory CHARACTER SET 'utf8';
USE the_power_of_memory;

CREATE TABLE IF NOT EXISTS utilisateur ( 
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE, 
    mot_de_passe VARCHAR(255) NOT NULL,
    pseudo VARCHAR(100) NOT NULL UNIQUE, 
    date_heure_inscription DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    date_heure_connexion DATETIME NOT NULL,
    PRIMARY KEY(id)
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS jeu (
    id INT(11)UNSIGNED NOT NULL AUTO_INCREMENT ,
    nom_jeu VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS score (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_joueur INT(11) UNSIGNED,
    id_jeu INT(11) UNSIGNED,
    difficulte VARCHAR(15) NOT NULL, 
    score INT(11) NOT NULL, 
    date_heure_partie DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_score_utilisateur FOREIGN KEY (id_joueur) REFERENCES utilisateur(id) ON DELETE SET NULL UPDATE,
    CONSTRAINT fk_score_jeu FOREIGN KEY (id_jeu) REFERENCES jeu(id) ON DELETE SET NULL UPDATE
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS messages (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_jeu INT(11) UNSIGNED,
    id_expediteur INT(11) UNSIGNED,
    texte_message TEXT NOT NULL,
    date_heure_message DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    CONSTRAINT fk_message_jeu FOREIGN KEY (id_jeu) REFERENCES jeu(id) ON DELETE SET NULL,
    CONSTRAINT fk_message_utilisateur FOREIGN KEY (id_expediteur) REFERENCES utilisateur(id) ON DELETE SET NULL
)
CHARACTER SET 'utf8'
ENGINE = INNODB;

INSERT INTO utilisateur (email,mot_de_passe,pseudo,date_heure_connexion)
VALUES  ('utilisateur1@gmail.com','motdepasse1','utilisateur1','2016-09-06 03:45:11'),
        ('utilisateur2@gmail.com','motdepasse2','utilisateur2','2016-09-06 03:45:12'),
        ('utilisateur3@gmail.com','motdepasse3','utilisateur3','2016-09-06 03:45:13'),
        ('utilisateur4@gmail.com','motdepasse4','utilisateur4','2016-09-06 03:45:14'),
        ('utilisateur5@gmail.com','motdepasse5','utilisateur5','2016-09-06 03:45:15');

INSERT INTO jeu (nom_jeu)
VALUES ('The Power Of Memory');

INSERT INTO score (id_joueur,id_jeu,difficulte,score)
VALUES  (1,1,'Difficile',425),
        (2,1,'Normal',3671),
        (3,1,'Facile',280),
        (5,1,'Difficile',6765),
        (5,1,'Normal',1092),
        (1,1,'Difficile',2919),
        (2,1,'Facile',389),
        (3,1,'Normal',985),
        (4,1,'Difficile',927),
        (5,1,'Facile',655);

INSERT INTO messages(id_jeu,id_expediteur,texte_message)
VALUES  (1,1,'Bonsoir'),
        (1,2,'ici'),
        (1,3,'Bob'),
        (1,4,'Lenon'),
        (1,5,'et'),
        (1,1,'ajourdhui'),
        (1,2,'on'),
        (1,3,'est'),
        (1,4,'avec'),
        (1,5,'Fanta');