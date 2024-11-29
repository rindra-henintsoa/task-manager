# Task Manager - Installation et Lancement

## Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :
- PHP (version 7.4 ou supérieure)
- Composer
- Un serveur de base de données (MySQL ou MariaDB)
- Symfony CLI (facultatif)

---

## Installation

### 1. Cloner le dépôt
Clonez le projet depuis GitHub en exécutant la commande suivante dans votre terminal :

```
git clone https://github.com/rindra-henintsoa/task-manager.git
```

### 2. Accéder au projet
Naviguez vers le répertoire du projet cloné :

```
cd task-manager
```

### 3. Basculer vers la branche database
Passez sur la branche contenant la base de données pour l'importer :

```
git checkout database
```

### 4. Importer la base de données
- Ouvrez votre outil de gestion de base de données (par exemple, phpMyAdmin, MySQL Workbench, ou via terminal).
- Importez le fichier de base de données fourni dans le projet (situé dans le répertoire).

### 5. Basculer vers la branche database
Une fois la base de données importée, revenez sur la branche principale :

```
git checkout master
```

### 6. Basculer vers la branche database
Ouvrez le fichier .env à la racine du projet et mettez à jour la variable DATABASE_URL avec vos informations de connexion 

```
DATABASE_URL="mysql://db_username:db_userpasser@db_host:db_port/db_name?serverVersion=mariadb-10.4.13&charset=utf8"
```

Remplacez les valeurs suivantes :

db_username : Nom d'utilisateur de votre base de données.
db_userpasser : Mot de passe de votre base de données.
db_host : Adresse du serveur de base de données (généralement 127.0.0.1 ou localhost).
db_port : Port de votre serveur (par défaut, 3306 pour MySQL/MariaDB).
db_name : Nom de la base de données importée

### 7. Installer les dépendances
Exécutez la commande suivante pour installer toutes les dépendances nécessaires via Composer :

```
composer install
```

### 8. Démarrer le serveur Symfony
Démarrez le serveur interne Symfony en exécutant la commande suivante :

```
symfony serve
```

Si vous n'avez pas Symfony CLI, utilisez la commande suivante à la place :
```
php -S 127.0.0.1:8000 -t public
```

### 9. Accéder au projet
Ouvrez votre navigateur et accédez à l'adresse affichée après le lancement du serveur

```
http://127.0.0.1:8000
```

### 10. Connexions

Page de connexion "/connexion"
Utilisez les identifiants suivants pour vous connecter :
Administrateur :
- Identifiant : adminmanager@gmail.com
- Mot de passe : adminmanager
Membre :
- Identifiant : user10@gmail.com
- Mot de passe : user101
