-- story 2

INSERT INTO utilisateur (email,mot_de_passe,pseudo,date_heure_inscription)
VALUES  ('utilisateur1@gmail.com','motdepasse1','utilisateur1','2016-09-06 03:45:11'),
        ('utilisateur2@gmail.com','motdepasse2','utilisateur2','2016-09-06 03:45:12'),
        ('utilisateur3@gmail.com','motdepasse3','utilisateur3','2016-09-06 03:45:13'),
        ('utilisateur4@gmail.com','motdepasse4','utilisateur4','2016-09-06 03:45:14'),
        ('utilisateur5@gmail.com','motdepasse5','utilisateur5','2016-09-06 03:45:15');

INSERT INTO score (id_joueur,id_jeu,difficulte,score)
VALUES  (1,2,'Difficile',425),
        (2,1,'Normal',3671),
        (1,1,'Facile',280),
        (2,2,'difficile',6765),
        (1,2,'Normal',1092),
        (2,1,'difficile',2919),
        (2,2,'Facile',389),
        (1,1,'Normal',985),
        (1,2,'difficile',927),
        (2,2,'Facile',655);

INSERT INTO messages(id_jeu,id_expediteur,texte_message)
VALUES  (1,2,'Bonsoir'),
        (2,2,'ici'),
        (2,1,'Bob'),
        (1,1,'Lenon'),
        (1,2,'et'),
        (2,2,'ajourdhui'),
        (2,1,'on'),
        (1,1,'est'),
        (2,1,'avec'),
        (2,2,'Fanta');

INSERT INTO jeu (nom_jeu)
VALUES ('Bidule le jeu');