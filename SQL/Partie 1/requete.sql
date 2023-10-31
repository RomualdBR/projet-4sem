-- Création d'un nouvelle utilisateur Story 3

INSERT INTO utilisateur (email,mot_de_passe,pseudo, date_heure_connexion)
VALUES ('utilisateur6@gmail.com','motdepasse6','utilisateur6','2002-09-12 23:12:15');

-- mise a jour du mot de passe et du mail Story 4

UPDATE utilisateur
set mot_de_passe = 'motdepasse7',email = 'utilisateur7@gmail.com'
WHERE id = 1;

-- requête de connexion Story 5

SELECT * FROM `utilisateur` 
WHERE email = 'utilisateur7@gmail.com' 
AND mot_de_passe = 'motdepasse7';

-- ajout du jeu the power of memory Story 6

INSERT INTO jeu (nom_jeu)
VALUES ('The Power Of Memory') ;

-- affichage des scores + filtre Story 7

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
WHERE J.nom_jeu = "The Power Of Memory" OR U.id = "utilisateur6" OR S.difficulte = "Difficile"
ORDER BY J.nom_jeu ASC,nb_difficulte DESC, S.score DESC;

-- doublon de scores Story 8

SELECT S.score
FROM score AS S
INNER JOIN utilisateur AS U
ON S.id_joueur = U.id
INNER JOIN jeu AS J
ON S.id_jeu = J.id
WHERE J.nom_jeu = "The Power Of Memory" AND U.id = "utilisateur2" AND S.difficulte = "Difficile",

--si la requete precedente retourne un score Story 9
UPDATE S
SET S.score = "nouvelle valeur de score"
WHERE J.nom_jeu = "The Power Of Memory" AND U.id = "utilisateur2" AND S.difficulte = "Difficile",

--si la requete est precedente retourne rien Story 10
INSERT INTO score(id_joueur,id_jeu,difficulte,score)
VALUES ('recuperation automatique','recuperation automatique','recuperation automatique','valeur du score');

--ajout de ligne dans la table message
INSERT INTO messages(id_jeu, id_expediteur, texte_message)
VALUES  (2, 3, 'ceci est un message auto');

-- recupération des messages des dernières 24h Story 11

SELECT M.texte_message, U.id, M.date_heure_message, (M.id_expediteur = 1) as isSender
FROM messages AS M
INNER JOIN utilisateur AS U
ON M.id_expediteur = U.id
WHERE M.date_heure_message >= NOW() - INTERVAL 1 DAY;

-- recherche de au dans les utilisateurs Story 12

SELECT S.*, U.id
FROM score as S
INNER JOIN utilisateur as U
ON S.id_joueur = U.id
WHERE id LIKE "%au%";

