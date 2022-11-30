<?php

/**
 * Fonction dont le rôle est de charger les fichiers ".env"
 * dans des variables d'environnement.
 */
function dotenv($filename)
{
    if (!file_exists($filename)) {
        throw new InvalidArgumentException(sprintf('%s does not exist', $filename));
    }

    if (!is_readable($filename)) {
        throw new RuntimeException(sprintf('%s file is not readable', $filename));
    }

    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value, " \n\r\t\v\x00'\"");

        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}