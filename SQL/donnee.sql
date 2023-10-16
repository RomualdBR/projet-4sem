INSERT INTO utilisateur (email,mot_de_passe,pseudo,date_heure_inscription,date_heure_connexion)
VALUES  ('utilisateur1@gmail.com','motdepasse1','utilisateur1','2016-09-06 03:45:11','2023-10-16 16:40:12'),
        ('utilisateur2@gmail.com','motdepasse2','utilisateur2','2016-09-06 03:45:12','2023-10-16 16:40:13'),
        ('utilisateur3@gmail.com','motdepasse3','utilisateur3','2016-09-06 03:45:13','2023-10-16 16:40:14'),
        ('utilisateur4@gmail.com','motdepasse4','utilisateur4','2016-09-06 03:45:14','2023-10-16 16:40:15'),
        ('utilisateur5@gmail.com','motdepasse5','utilisateur5','2016-09-06 03:45:15','2023-10-16 16:40:16');

INSERT INTO score (difficulte,score,date_heure_partie)
VALUES  ('Difficile',425,'2023-06-09 12:30:01'),
        ('Normal',3671,'2023-06-09 12:30:02'),
        ('Facile',280,'2023-06-09 12:30:03'),
        ('difficile',6765,'2023-06-09 12:30:04'),
        ('Normal',1092,'2023-06-09 12:30:05'),
        ('difficile',2919,'2023-06-09 12:30:06'),
        ('Facile',389,'2023-06-09 12:30:07'),
        ('Normal',985,'2023-06-09 12:30:08'),
        ('difficile',927,'2023-06-09 12:30:09'),
        ('Facile',655,'2023-06-09 12:30:10');

INSERT INTO messages(texte_message,date_heure_message)
VALUES  ('Bonsoir','2023-10-16 15:38:31'),
        ('ici','2023-10-16 15:38:32'),
        ('Bob','2023-10-16 15:38:33'),
        ('Lenon','2023-10-16 15:38:34'),
        ('et','2023-10-16 15:38:35'),
        ('ajourdhui','2023-10-16 15:38:36'),
        ('on','2023-10-16 15:38:37'),
        ('est','2023-10-16 15:38:38'),
        ('avec','2023-10-16 15:38:39'),
        ('Fanta','2023-10-16 15:38:40');

INSERT INTO jeu (nom_jeu)
VALUES ('memory');