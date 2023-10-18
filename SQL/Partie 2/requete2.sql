-- story 8
SELECT U.pseudo,U2.pseudo,M.contenu,M.date_envoie
FROM messages AS M
INNER JOIN utilisateurs AS U
ON M.id_expediteur = U.id
INNER JOIN utilisateurs AS U2
ON M.id_receveur = U.id
ORDER BY date_envoie DESC