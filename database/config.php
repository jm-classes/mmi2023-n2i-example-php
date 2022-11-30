<?php

require 'utils/functions.php';

// Charge les variables du fichier ".env" dans l'environnement courant
dotenv('.env');

// Connexion à la BDD MySQL avec les valeurs des variables d'environnement
$pdo = new PDO(
    getenv('APP_DSN'),
    getenv('APP_DB_USER'),
    getenv('APP_DB_PASSWORD')
);

$pdo->exec('SET NAMES UTF8');