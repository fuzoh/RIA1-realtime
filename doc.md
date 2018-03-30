# Temps réel avec les websokets

## Problématique

Avec l'arrivée d'applications web de plus en plus interactives et réactives, il étais nésaisaire de développer un protocole full-duplex qui permette de comuniquer entre un serveur des des clients (navigateurs) web. L'objectif est principalement de pouvoir posser des données vers les clients en temps réel (pas de rechargement de pages, pas d'autoload). Et de permettre au client de streamer du contenu vers le serveur.

Exemple : les applications de messagerie (whatsapp web, telegram) utilisent ce protocole pour récupérer et pousser des messages sans rechargement.

Pourquoi ne pas utiliser de l'ajax ?? L'ajax ne permet pas d'ouvrir un canal entre client serveur, on effectue juste des applels http asynchrones vers le serveur. Le serveur ne peut pas non plus pousser de données vers le client.

## Technologies

Pour remédier a la problématique, on protocole a été développé et standardisé, les [websokets](https://developer.mozilla.org/fr/docs/WebSockets).

## Lien avec le module RIA

## Exemple

## Exercice

## En bref !

## Pour aller plus loin

## Références / sources