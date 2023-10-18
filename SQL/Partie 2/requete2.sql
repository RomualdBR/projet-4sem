-- ordre message par création du plus récent au plus ancien story 9

SELECT U.pseudo,U2.pseudo,M*
FROM messages as M 
INNER JOIN utilisateurs as U
ON M.id_expediteur = U.utilisateurs
INNER JOIN utilisateurs as U2
ON M.id_receveur = U.utilisateurs
WHERE (id_expediteur = 1 and id_receveur = 2) or (id_expediteur = 2 and id_receveur = 1)
ORDER BY date_envoie DESC
