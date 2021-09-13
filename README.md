# BookmarksManager

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](https://salim.link)  [![forthebadge](https://salim.link/public/files/badge.svg)](https://salim.link)

BookmarksManager est un simple gestionnaire de favoris basé sur le framework Laravel.

## Config
Ci-dessous, se trouve la configuration technique mis en place pour ce projet.
* [Windows 10](https://www.microsoft.com/fr-fr/windows/) - Système d'Exploitation
* [SublimeText](https://www.sublimetext.com) - Editeur de texte
* [Laragon](https://laragon.org) - Serveur LAMP
* [phpMyAdmin](https://www.phpmyadmin.net) - gestionnaire de Bases de données MySql
* [Laravel](https://laravel.com) - Framework PHP
* [Bootstrap](https://getbootstrap.com) - Framework CSS

## Installation

Voici les instructions pour installer le projet sur votre hébergement web.

### Hébergement Web

- Télécharger ce repository Github et l'extraire.
- Récupérer vos FTP et se connecter sur votre serveur web via un logiciel comme Filezilla.
- Envoyer le contenu du repository extrait vers vers votre serveur web via Filezilla.
- Aller au niveau de votre outil d'administration de bases de données et créer une base de données vide si ce n'est pas encore fait.
- Ouvrir le fichier **.env** et y saisir les informations de connexion à la base de données.
- Récupérer les informations SMTP de votre adresse email et les saisir également dans le fichier **.env** 
- Remplacer la variable **APP_NAME** par le nom que vous voulez donner à votre application, ici ca sera **BookmarksManager**.
- Remplacer la variable **APP_ENV** par **prod**.
- Remplacer la variable **APP_DEBUG** par **false**.
- Remplacer la variable **APP_URL** par l'**adresse URL de votre nom de domaine**.  
- Pour générer la clé à assigner à la variable **APP_KEY**, il va falloir utilisr un terminal.  
Et pour ca je vous recommande d'installer **Laragon** pour utiliser son terminal **Cmder**.  
- Dézipper le repertoire github téléchargé quelque part sur votre disque dur et copier le chemin du répertoire  
- Ouvrir la console **Cmder** et y coller le chemin.  
Exemple : **```cd C:\SERVEUR\www\bookmarksmanager\bookmarksmanager```**.  
- Maintenant pour générer la clé, saisir : **```php artisan key:generate```**
- La dernière étape consiste à générer la base de données avec une seule ligne de commande : **```php artisan migrate```**  

## Demonstration
[![forthebadge](https://salim.link/public/files/demo.svg)](https://salimbenfarhat.alwaysdata.net/BookmarksManager/)  
* **Jeu de données**
* ID [**sabdemo_bm001@yopmail.com**] | MDP [**demo001**]  
* ID [**sabdemo_bm002@yopmail.com**] | MDP [**demo002**]  
* ID [**sabdemo_bm003@yopmail.com**] | MDP [**demo003**]   

## Historique des Versions
**Dernière version stable :** 1.0


## Auteur
* **Salim Benfarhat** _alias_ [@salimbenfarhat](https://github.com/salimbenfarhat)

## Soutien
Pour me soutenir et soutenir le projet, je vous invite à faire un petit geste.
  
🤑 Espace Sponsorisé :  
- Pour installer SwissBorg (et gagner un ticket à gratter de 1 à 100€) :  
  https://salim.click/swissborg  
- Pour installer l'application Crypto.com et gagner 25$ en CRO :  
  https://salim.click/cryptocom  
- Pour créer un Compte Binance et gagner des remises sur les frais (10%) :  
  https://salim.click/binance  

💰 Faire une donation :  
- Wallet BTC : **bc1qslzgv5pqm4u9l4gj2axgjqsl84jgjdw3klscwj**
- Wallet ETH : **0x836e6f534795E30f22369F3F664B807A76BCaC85**
- Wallet SOL : **J4jJ7hb2csfmLHtUNMuk5MMgrcy4Fw8fHm2BrrwqxzFX**
- Wallet DOGE : **DQoonK2Dkw3QkDJpdZ4JWY9y6VVme2sWYn**