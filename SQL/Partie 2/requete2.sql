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


-- ordre message par création du plus récent au plus ancien story 9

SELECT U.pseudo,U2.pseudo,M.*
FROM messages as M 
INNER JOIN utilisateurs as U
ON M.id_expediteur = U.id
INNER JOIN utilisateurs as U2
ON M.id_receveur = U.id
WHERE (id_expediteur = 1 and id_receveur = 2) or (id_expediteur = 2 and id_receveur = 1)
ORDER BY date_envoie DESC