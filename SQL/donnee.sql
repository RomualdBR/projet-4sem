INSERT INTO utilisateur (email,mot_de_passe,pseudo,date_heure_inscription,date_heure_connexion)
VALUES  ('utilisateur1@gmail.com','motdepasse1','utilisateur1','2016-09-06 03:45:11'),
        ('utilisateur2@gmail.com','motdepasse2','utilisateur2','2016-09-06 03:45:12'),
        ('utilisateur3@gmail.com','motdepasse3','utilisateur3','2016-09-06 03:45:13'),
        ('utilisateur4@gmail.com','motdepasse4','utilisateur4','2016-09-06 03:45:14'),
        ('utilisateur5@gmail.com','motdepasse5','utilisateur5','2016-09-06 03:45:15');

INSERT INTO score (id_joueur,id_jeu,difficulte,score,date_heure_partie)
VALUES  (1,1,'Difficile',425,'2023-06-09 12:30:01'),
        (1,1,'Normal',3671,'2023-06-09 12:30:02'),
        (2,1,'Facile',280,'2023-06-09 12:30:03'),
        (2,1,'difficile',6765,'2023-06-09 12:30:04'),
        (3,1,'Normal',1092,'2023-06-09 12:30:05'),
        (3,1,'difficile',2919,'2023-06-09 12:30:06'),
        (4,1,'Facile',389,'2023-06-09 12:30:07'),
        (4,1,'Normal',985,'2023-06-09 12:30:08'),
        (5,1,'difficile',927,'2023-06-09 12:30:09'),
        (5,1,'Facile',655,'2023-06-09 12:30:10');

INSERT INTO messages(id_jeu,id_expediteur,texte_message,date_heure_message)
VALUES  (1,1,'Bonsoir','2023-10-16 15:38:31'),
        (1,2,'ici','2023-10-16 15:38:32'),
        (1,3,'Bob','2023-10-16 15:38:33'),
        (1,4,'Lenon','2023-10-16 15:38:34'),
        (1,5,'et','2023-10-16 15:38:35'),
        (1,2,'ajourdhui','2023-10-16 15:38:36'),
        (1,3,'on','2023-10-16 15:38:37'),
        (1,3,'est','2023-10-16 15:38:38'),
        (1,4,'avec','2023-10-16 15:38:39'),
        (1,5,'Fanta','2023-10-16 15:38:40');

INSERT INTO jeu (nom_jeu)
VALUES ('memory');