# Contribuer au projet

## Installation et mise à jour avec Composer

La gestion des librairies se fait entièrement via Composer. Les librairies installées et mises à jour par composer sont visibles dans le fichier composer.json à la racine du projet.
En principe les numéros de version dans ce fichier sont configurés pour que composer n’installe que les mises à jour de version dite mineure afin d’éviter d’installer une version dite majeure qui pourrait avoir des incompatibilités avec le code.

La commande pour faire une mise à jour des librairies est :  
`composer update`

Les librairies sont installées dans le dossier vendor/ , en cas de besoin si des fichiers venaient à manquer suite à une mauvaise manipulation, il est possible de réinstaller l’ensemble des librairies avec la commande :  
`composer install`

Enfin pour installer de nouvelles librairies nécessaire au développement de nouvelles fonctionnalités la commande est :  
`composer require <nom_du_composant>`

Dans tous les cas, il est important d’effectuer ce genre de manipulations en ayant la possibilité de revenir en arrière, c’est ce que nous allons voir plus bas avec l’utilisation de Git et des branches.

## Méthode de travail


## Git et Github

Le projet est versionné à l’aide de Git et Github. Il est conseillé d'utiliser un IDE intégrant ces fonctionnalités, sinon il est toujours possible d’utiliser git en ligne de commande, ce que nous n’aborderons pas dans ce document.  
Vous trouverez le projet actuel à cet adresse : https://github.com/OSEvohe/OC-P8-TodoList  
Il s’agit d’un ‘fork’ du projet originel visible ici : https://github.com/saro0h/projet8-TodoList

## Workflow

Afin de pouvoir collaborer voici le workflow à respecter.  

**Pour la 1ere utilisation il faut :**

1. Cloner le projet sur votre machine de développement.
2. Installer le projet comme vu au chapitre précédent avec composer install
3. Suivre les instructions du Readme.md pour la suite de l’installation

**Pour collaborer voici les étapes indispensables :**

1. Synchroniser votre version avec la version en ligne sur github afin d’avoir les toutes dernières modifications.
2. Créer les issues décrivant les étapes que vous allez effectuer.
3. Créer une nouvelle branche avec le nom et le numéro de l’issue
4. Développez votre code !
5. Faites des commits réguliers à chaque étape importante de votre développement.
6. Faites un ‘Push’ régulier afin que vos commits soit présents sur Github
7. Lorsque votre fonctionnalité est développée créez un ‘Pull request’ et assignez votre responsable en tant que reviewer
8. Faites les modifications qui ont été demandé par le ou les reviewers
9. Finalement faites un merge avec la branche principale lorsque tout est validé.

Il est important que votre code fasse l’objet de test unitaire ou fonctionnel.
Ces tests seront à écrire et à exécuter avant toute validation définitive de votre branche.


## Bonnes pratiques

**Votre code devra respecter un certain nombre de bonnes pratiques.**

* Respect du PSR-4
* Respect de la structure des fichiers et des dossiers de Symfony. Notamment les controllers devront contenir le moins de logique métier possible, celle-ci sera présente dans des services, les entités contiendront aucune logique, etc.
Voir les bonnes pratiques : https://symfony.com/doc/current/best_practices.html
* Votre code devra passer les tests de qualités vus dans le document d’audit, c'est-à-dire l’analyse de CodeClimate et SonarCloud