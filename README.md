## Installation
Clonez le projet depuis le dépôt GitHub :
git clone https://github.com/JunelAmelon/gesnote.git


## Installez les dépendances avec Composer :
composer install
Dans  .env  configurez les informations de base de données :

## Générez la clé d'application :
php artisan key:generate

## Exécutez les migrations pour créer les tables de base de données :
php artisan migrate

## Démarrez le serveur de développement :

php artisan serve

## Configuration
Configurez d'autres paramètres dans le fichier .env si nécessaire.