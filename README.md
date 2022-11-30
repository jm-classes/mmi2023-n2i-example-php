# Projet PHP

## Template d'exemple

Structure du dossier : 

```bash
database/          
└── config.php  # <-- pour gérer la connexion à MySQL

utils/
└── functions.php  # <-- pour les fonctions utiles générales au projet

views/
├── contact.phtml  # <-- partie HTML pour l'accueil
├── index.phtml  # <-- partie HTML pour la page de contact
└── layouts/
    └── frontend.phtml  # <-- Doctype des pages du front-end

index.php  # <-- partie PHP pour l'accueil
contact.php  # <-- partie PHP pour la page de contact

.env.example  # <-- Fichier pour accueillir les variables d'environnement
.gitignore  # <-- Fichier pour dire à Git d'ignorer des éléments
```

## Installer le projet

Le projet tourne au minimum sur PHP 7.4, et fonctionne avec une base MySQL 8.

Pour faire tourner le projet d'exemple, il vous faut créer une base MySQL nommée `n2i`:

```sql
CREATE DATABASE IF NOT EXISTS `n2i`
    DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Puis créer une table d'exemple pour les posts :

```sql
CREATE TABLE `posts` (
  `id` int UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Puis insérer des données factices dans la tables `posts` :

```sql
INSERT INTO `posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Bienvenue sur notre site web', 'Let\'s make use of protected routes (also called private routes). Therefore, we will create a new component. In the case of protecting against unauthorized users (here: unauthenticated users), the component will check whether the authentication token is present. If it is present, the component will render its children. However, if it is absent, the user gets a conditional redirect with React Router\'s declarative Navigate component to the login page (here: Home page): …', '2022-11-29 08:58:47'),
(2, 'La nuit de l\'info va démarrer', 'Le plus fun serious-game regroupant des milliers d’étudiants pour développer une application informatique en une nuit', '2022-11-29 08:58:47');
```

Ensuite, renommez le fichier `.env.example` en `.env` et adaptez le login/password à votre base de données perso (Wamp/Mamp/Xamp).

Enfin, lancez Wamp/Mamp/Xamp et ouvrez le projet dans votre navigateur :

- http://localhost/index.php
- http://localhost/contact.php

---

N'hésitez pas à ajouter des choses à cette structure et à l'adapter à votre besoin.