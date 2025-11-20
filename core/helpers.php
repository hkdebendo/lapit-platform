<?php
// core/helpers.php

/**
 * Récupère une valeur de config par clé, ex. config('db.host') ou config('base_url')
 */
function config(string $key)
{
    static $conf = null;
    if ($conf === null) {
        $conf = require __DIR__ . '/../config/config.php';
    }
    // supporte les sous-clés avec point
    $parts = explode('.', $key);
    $value = $conf;
    foreach ($parts as $part) {
        if (!isset($value[$part])) {
            throw new Exception("Clé de config introuvable : $key");
        }
        $value = $value[$part];
    }
    return $value;
}
