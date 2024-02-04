## Installation
Clonez le projet depuis le dépôt GitHub :
git clone https://github.com/JunelAmelon/gesnote.git

## Importer la base de donnee  gesnote qui se trouve dans le repertoire principal

## Installez les dépendances avec Composer :
composer install

## Exécutez les migrations pour créer les tables de base de données :
php artisan migrate

## Démarrez le serveur de développement :

php artisan serve

## Configuration
Configurez d'autres paramètres dans le fichier .env si nécessaire.

## admin info
route login: http://localhost:8000/login/form/admin
Id: 20
Mdp: 11

## Un identifiant de connexion prof deja disponible
id: 10
mdp:10

## Un identifiant de connexion etudiant deja disponible
id: 01
mdp:01

## les fonctionalites disponibles dans le menu du haut de la page d'admin ne sont pas encore operationnelle