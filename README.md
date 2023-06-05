# monartisan

# TEST DE RECRUTEMENT

Ce dépôt contient le code source de mon projet Laravel.

## Installation

Suivez les étapes ci-dessous pour installer et configurer le projet en local.

### Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP (version 8.1)
- Composer (version 2.3.7)

### Étapes d'installation

1. Clonez ce dépôt sur votre machine :

   ```shell
   git clone https://github.com/votre-utilisateur/mon-projet-laravel.git

2. Accédez au répertoire du projet :

    ```shell
    cd mon-projet-laravel

3. Installez les dépendances du projet avec Composer :
    ```shell
    composer install

4. Générez une clé d'application Laravel :

    ```shell
    php artisan key:generate

5. Configurez les informations de connexion à la base de données dans le fichier .env. Assurez-vous d'indiquer le nom de la base de données, le nom d'utilisateur et le mot de passe appropriés.

6. Exécutez les migrations pour créer les tables de la base de données :

    ```shell
    php artisan migrate

7. Lancez le serveur de développement :

    ```shell
    php artisan serve


Le projet sera accessible à l'adresse "http://localhost:8000".
