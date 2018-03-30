# Exercice websokets

## Objectif

Faire bouger un petit cube en simultané sur une meme page web ouverte plusieurs fois.

## A faire

La base des fichiers est déja prête, il ne reste plus qu'a rajouter les evenements websokets.

### Côté serveur

* Il faut écouter sur un channel "position x" du cube
* Et un channel "position y" du cube
* Pour finir le serveur doit retrasmetre tous les événements aux autres clients connectés

### Coté client

* Transmetre la position du cube au serveur
* Ecouter les chagements de position pour metre a jour la vue

## Attention

Lorsque le fichier index.js est modifié, il faut relancer le serveur `node index.js` pour que le nouveau programme soit rechargé.

## Corrigé

Vous trouvez le corrigé dans le dossier [corrigé](../corrige) !