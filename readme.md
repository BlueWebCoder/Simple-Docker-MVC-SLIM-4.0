# Simple-Docker-MVC-SLIM-4.0
MVP from SLIM 4.0, a simple PHP framework, powered by Docker deploy environment

Ce projet est une version minimal d'un projet sous la forme du design pattern MVC à l'aide d'un petit framework appelé SLIM. Il contient les fichiers minimum à l'utilisation d'un MVC dont un fichier de configuration de base de donnée et propulse un formulaire de login pour l'exemple . Ce projet utilise Docker Compose pour faciliter le déploiement et la gestion des conteneurs Docker.

## Prérequis
Assurez-vous d'avoir Docker et Docker Compose installés sur votre système. Vous pouvez les télécharger depuis le site officiel de Docker :

- Docker : https://www.docker.com/
- Docker Compose : https://docs.docker.com/compose/install/

## Configuration
Avant de lancer l'application, vous devez configurer votre accès base de donnée dans le fichier app/config/db.php

## Installation
1. Clonez ce dépôt Git sur votre machine :
$ git clone https://github.com/BlueWebCoder/Simple-Docker-MVC-SLIM-4.0
2. Accédez au répertoire du projet : $ cd Simple-Docker-MVC-SLIM-4.0
4. Lancez les conteneurs Docker à l'aide de Docker Compose : $ docker-compose up
Cela va construire les images Docker et démarrer les conteneurs en arrière-plan.

## Utilisation
Une fois les conteneurs en cours d'exécution, vous pouvez accéder à l'application à l'adresse suivante :

- Application Web : http://localhost:8090
- PhpMyAdmin : http://localhost:8899

## Arrêt
Pour arrêter les conteneurs Docker, exécutez la commande suivante : $ docker-compose down

Cela arrêtera les conteneurs et supprimera les ressources associées.
----
C'est tout ! Vous devriez maintenant être prêt à exécuter le projet Docker en suivant ces instructions. Si vous rencontrez des problèmes, n'hésitez pas à ouvrir une nouvelle issue dans le dépôt Git. Bon développement !
