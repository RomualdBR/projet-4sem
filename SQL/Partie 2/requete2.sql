/*Storie 7*/

INSERT INTO messages (id_expediteur, id_receveur, contenu, date_envoie)
VALUES
(1, 2, "Bonjour", '2019-11-28 15:01'),
(3, 4, "Hey !", '2019-11-28 15:02'),
(5, 6, "Hello !", '2019-11-28 15:03'),
(2, 1, "Comment tu vas tu ?", '2019-11-28 15:02'),
(4, 3, "Comment tu vas ?", '2019-11-28 15:03'),
(6, 5, "Nice to meet you", '2019-11-28 15:04'),
(1, 2, "Vais bien y toi ?", '2019-11-28 15:03'),
(3, 4, "Je vais bien et toi ?", '2019-11-28 15:04'),
(5, 6, "I'm fine and you ?", '2019-11-28 15:05'),
(2, 1, "Je viens de rentrer dans mon char", '2019-11-28 15:04'),
(4, 3, "Je passe une trés bonne journée", '2019-11-28 15:05'),
(6, 5, "I'm douing some triks on DS III", '2019-11-28 15:06'),
(1, 2, "Personnellement, je rentre chez nous", '2019-11-28 15:05'),
(3, 4, "Raconte !", '2019-11-28 15:06'),
(5, 6, "Oh waw ! Can you explain ?", '2019-11-28 15:07'),
(2, 1, "ta route serra pas trop longue ?", '2019-11-28 15:06'),
(4, 3, "Je vais prendre la voiture donc je ne peux pas...", '2019-11-28 15:07'),
(6, 5, "No man... I can't", '2019-11-28 15:08'),
(1, 2, "Nop, je devrais arriver dans 30 min", '2019-11-28 15:07'),
(3, 4, "Tu me racontera une autre fois", '2019-11-28 15:08'),
(5, 6, "Oh my bad", '2019-11-28 15:09'),
(2, 1, "J'espere que tu aurra pas de galère !", '2019-11-28 15:08'),
(4, 3, "évidement !", '2019-11-28 15:09'),
(6, 5, "hope we hang out together", '2019-11-28 15:10'),
(7, 8, "Suka ! bliats", '2019-11-28 00:01' );

-- story 8 message entre 2 utilisateurs

SELECT U.pseudo,U2.pseudo,M.contenu,M.date_envoie
FROM messages AS M
INNER JOIN utilisateurs AS U
ON M.id_expediteur = U.id
INNER JOIN utilisateurs AS U2
ON M.id_receveur = U2.id
ORDER BY date_envoie DESC;

-- story 9 ordre message par création du plus récent au plus ancien

SELECT U.pseudo AS pseudo_expediteur,U2.pseudo AS pseudo_receveur,M.contenu AS Texte,M.date_envoie AS date_envoie
FROM messages AS M 
INNER JOIN utilisateurs AS U
ON M.id_expediteur = U.id
INNER JOIN utilisateurs AS U2
ON M.id_receveur = U2.id
WHERE id_expediteur = 1 and id_receveur = 2 OR id_expediteur = 2 and id_receveur = 1
ORDER BY date_envoie DESC;

-- Story 10 renvoie l'utilisateur qui demande un service, l'info du service et l'utilisateur sur ce service

INSERT INTO services (id_utilisateur,nom,description,adresse,code_postal,ville,pays,date_service,informations)
VALUES (11,"Sortir les chats","ne pas oublier d'ouvrir les fenêtres.","6 Rue des abeilles","95220","Herblay sur seine", 'France', "2024:12:20 18:39:12", NULL);

SELECT U.pseudo, S.nom, S.description, S.adresse, S.code_postal, S.ville, S.pays, S.date_service, S.informations, U2.pseudo as pseudo_inscrit
FROM services AS S
LEFT JOIN utilisateurs as U
ON S.id_utilisateur = U.id
LEFT JOIN services_utilisateurs as SU
ON S.id = SU.id_service
LEFT JOIN utilisateurs as U2
ON U2.id = SU.id_utilisateur
WHERE S.date_service > NOW()
AND U2.pseudo IS NULL 
ORDER BY S.date_service DESC, S.ville ASC;

--  Story 11 renvoie des info sur l'utilisateur1 et l'utilisateur 2 ainsi que le service qui leurs est commun 

SELECT U.pseudo AS inscriveur ,U.portable ,U2.pseudo AS incrit ,S.*
FROM services AS S, services_utilisateurs as SU 

LEFT JOIN utilisateurs as U
ON S.id_utilisateur = U.id
LEFT JOIN utilisateurs as U2
ON SU.id_utilisateur = U.id

-- Story 12 supprime les infos de l'utilisateur

DELETE FROM services
WHERE id = "utilisateur"

-- story 13 supprime le service de l'utilisateur

DELETE FROM services_utilisateurs
WHERE id_service = "id du service" AND id_utilisateur = "id du suppresseur";

-- story 14 suppression de tout les services liées à l'utilisateur

DELETE FROM *
WHERE id = "id de l'utilisateur";

-- story 15 suppression d'un message

DELETE FROM messages
WHERE id_expediteur = "id du message a supprimer"

-- Story 16 affiche des infos liée au service et aux utilisateurs ainsi que le nombre de participation auquel l'utilisateur2 à participer

SELECT U.pseudo as pseudo_du_demandeur,S.nom, S.description, S.adresse, S.code_postal, S.ville, S.pays, S.date_service, S.informations, COUNT(U2.id) as id_utilisateur_preneur,U2.pseudo as utilisateur_preneur,U2.ville,U2.pays
FROM services AS S
LEFT JOIN utilisateurs AS U
ON S.id_utilisateur = U.id
LEFT JOIN services_utilisateurs AS SU
ON S.id = SU.id_service
LEFT JOIN utilisateurs AS U2 
ON U2.id = SU.id_utilisateur
GROUP BY U2.id
ORDER BY S.date_service DESC, S.ville ASC

-- Story 17 Affiche des infos liée au service à l'utilisateur1, l'utilisateur2 

SELECT S.*, U.pseudo, U2. 
FROM services_utilisateurs AS SU 
LEFT JOIN utilisateurs AS U 
ON SU.id_utilisateur = U.id 
LEFT JOIN services AS S ON SU.id_service = S.id 
LEFT JOIN utilisateurs AS U2 
ON S.id_utilisateur = U2.id 
WHERE SU.id_utilisateur = "2"  
ORDER BY SU.date_inscription 
LIMIT 1;

-- Story 18 récupère le nombre de service fait par un utilisateur sur 1 an par mois.

SELECT M.* ,(SELECT pseudo 
             FROM utilisateurs 
             WHERE id = 7)
             as pseudo, (SELECT COUNT(S.id)
                         FROM services_utilisateurs AS SU
                         LEFT JOIN services AS S
                         ON SU.id_service = S.id
                         WHERE M.month = MONTH(S.date_service) AND S.id_utilisateur = 7 ) AS nombre_requete
     FROM
         (SELECT 1 as month UNION
          SELECT 2 as month UNION
          SELECT 3 as month UNION
          SELECT 4 as month UNION
          SELECT 5 as month UNION
          SELECT 6 as month UNION
          SELECT 7 as month UNION
          SELECT 8 as month UNION
          SELECT 9 as month UNION
          SELECT 10 as month UNION
          SELECT 11 as month UNION
          SELECT 12 as month 
          )AS M