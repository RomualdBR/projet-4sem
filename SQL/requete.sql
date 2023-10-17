-- Création d'un nouvelle utilisateur

INSERT INTO utilisateur (email,mot_de_passe,pseudo, date_heure_inscription)
VALUES ('utilisateur6@gmail.com','motdepasse6','utilisateur6','2002-09-12 23:12:15');

-- mise a jour du mot de passe et du mail

UPDATE utilisateur
set mot_de_passe = 'motdepasse7',email = 'utilisateur7@gmail.com'
WHERE id = 1;

-- requête de connexion 

SELECT * FROM `utilisateur` 
WHERE email = 'utilisateur7@gmail.com' 
AND mot_de_passe = 'motdepasse7';

-- ajout du jeu the power of memory 

INSERT INTO jeu (nom_jeu)
VALUES ('The Power Of Memory') ;

-- affichage des scores

SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score
FROM score AS S
INNER JOIN utilisateur AS U
ON S.id_joueur = U.id
INNER JOIN jeu AS J
ON S.id_jeu = J.id
ORDER BY J.nom_jeu ASC, S.score ASC