# Exemple avec socket.io

Vous trouverez dans ce dossier un exemple simple de l'utilisation des websokets avec simple chat.

## Comment démarrer l'exemple

Avant, n'oubliez pas d'installer les dépendance, voir README du dépot.

1. Rendez vous dans le doosier de l'exemple.
2. Lancez le script node.js :
```sh
node index.js
```
3. Le serveur se lance
4. Rendez-vous dans votre navigateur, et ouvrez `localhost:3000`

## Utilisation

En ouvrant plusieurs navigateurs vous pourrez envoyer des messages qui seront imédiatement poussé sur tous les autres navigateurs connectés.

## Fonctionnement

Le serveur node.js [index.js](index.js) crée un endpoint pour les websokets, et sers le fichier index.html, qui est la simple page web qui permet de soumetre des messages.
Le serveur ici ce contente de renvoyer tous les messages recus sur tous les clients connectés.

Dans le [index.html](index.html) on trouve un poil de javascript pour envoyer les messages au serveur de websokets quand l'utilisateur clique sur send.