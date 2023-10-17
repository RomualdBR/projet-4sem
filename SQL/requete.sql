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

-- affichage des scores + filtre

SELECT J.nom_jeu, U.pseudo, S.difficulte, S.score, (
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
WHERE J.nom_jeu = "The Power Of Memory" OR U.pseudo = "utilisateur6" OR S.difficulte = "Difficile"
ORDER BY J.nom_jeu ASC,nb_difficulte DESC, S.score DESC;

-- doublon de scores

SELECT S.score
FROM score AS S
INNER JOIN utilisateur AS U
ON S.id_joueur = U.id
INNER JOIN jeu AS J
ON S.id_jeu = J.id
WHERE J.nom_jeu = "The Power Of Memory" AND U.pseudo = "utilisateur2" AND S.difficulte = "Difficile"

--si la requete precedente retourne un score
UPDATE S
SET S.score = "nouvelle valeur de score"
WHERE J.nom_jeu = "The Power Of Memory" AND U.pseudo = "utilisateur2" AND S.difficulte = "Difficile";

--si la requete est precedente retourne rien
INSERT INTO score(id_joueur,id_jeu,difficulte,score)
VALUES ('recuperation automatique','recuperation automatique','recuperation automatique','valeur du score')

--ajout de ligne dans la table message
INSERT INTO messages(texte_message)
VALUES  ('ceci est un message auto'),

-- recupération des messages des dernières 24h

SELECT M.texte_message, U.pseudo, M.date_heure_message, (M.id_expediteur = 1) as isSender
FROM messages AS M
INNER JOIN utilisateur AS U
ON M.id_expediteur = U.id
WHERE M.date_heure_message >= NOW() - INTERVAL 1 DAY

