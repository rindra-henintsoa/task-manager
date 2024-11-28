# Symfony 6.4.12 - Application

## Description

Ce projet est une application web développée avec Symfony 6.4.12. Ce fichier `README.md` contient les instructions pour installer, configurer et exécuter l'application en local. Il inclut également les informations de connexion pour les utilisateurs avec différents rôles.

## Prérequis

Avant d'installer et d'exécuter l'application, vous devez vous assurer d'avoir les éléments suivants installés :

- [PHP 8.1 ou supérieur](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download) (optionnel, mais recommandé)

## Installation

### 1. Clonez le dépôt

Clonez le dépôt Git contenant le projet sur votre machine locale :

git clone https://github.com/rindra-henintsoa/task-manager.git

Configurez la base de données

Ouvrez le fichier .env et modifiez la variable DATABASE_URL pour correspondre à votre configuration locale de base de données (par exemple, MySQL) :
DATABASE_URL="mysql://root:root@127.0.0.1:3306/nom_de_votre_base_de_donnees"

Exécutez les migrations pour créer les tables nécessaires :

dotenv
Copier le code
DATABASE_URL="mysql://root:root@127.0.0.1:3306/nom_de_votre_base_de_donnees"

Connexion
Identifiants de connexion
Voici les identifiants pour vous connecter avec différents rôles dans l'application :

Admin
Identifiant : adminmanager@gmail.com
Mot de passe : adminmanager

Membre
Identifiant : user10@gmail.com
Mot de passe : user101
