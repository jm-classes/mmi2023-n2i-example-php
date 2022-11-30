<?php
require 'database/config.php';

$posts = $pdo->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_OBJ);

// Envoi de la réponse au client
const PAGE_TITLE        = 'Accueil';
const PAGE_LAYOUT_FILE  = 'frontend.phtml';
const PAGE_CONTENT_FILE = 'index.phtml';

require 'views/layouts/' . PAGE_LAYOUT_FILE;