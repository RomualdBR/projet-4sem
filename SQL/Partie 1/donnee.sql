-- story 2

INSERT INTO utilisateur (email,mot_de_passe,pseudo,date_heure_connexion)
VALUES  ('utilisateur1@gmail.com','motdepasse1','utilisateur1','2016-09-06 03:45:11'),
        ('utilisateur2@gmail.com','motdepasse2','utilisateur2','2016-09-06 03:45:12'),
        ('utilisateur3@gmail.com','motdepasse3','utilisateur3','2016-09-06 03:45:13'),
        ('utilisateur4@gmail.com','motdepasse4','utilisateur4','2016-09-06 03:45:14'),
        ('utilisateur5@gmail.com','motdepasse5','utilisateur5','2016-09-06 03:45:15');

INSERT INTO jeu (nom_jeu)
VALUES ('Bidule le jeu');

INSERT INTO jeu (nom_jeu)
VALUES ('The Power Of Memory');

INSERT INTO score (id_joueur,id_jeu,difficulte,score)
VALUES  (1,2,'Difficile',425),
        (2,1,'Normal',3671),
        (3,1,'Facile',280),
        (5,2,'Difficile',6765),
        (5,2,'Normal',1092),
        (1,1,'Difficile',2919),
        (2,2,'Facile',389),
        (3,1,'Normal',985),
        (4,2,'Difficile',927),
        (5,2,'Facile',655);

INSERT INTO messages(id_jeu,id_expediteur,texte_message)
VALUES  (1,1,'Bonsoir'),
        (2,2,'ici'),
        (2,3,'Bob'),
        (1,4,'Lenon'),
        (1,5,'et'),
        (2,1,'ajourdhui'),
        (2,2,'on'),
        (1,3,'est'),
        (2,4,'avec'),
        (2,5,'Fanta');