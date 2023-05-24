<?php

$config = require 'config.php';

// Create a new database connection using PDO.

try {
    $pdo = new PDO(
        $config['database']['connection'] . ';dbname=' . $config['database']['name'],
        $config['database']['username'],
        $config['database']['password']
    );
} catch (PDOException $e) {
    die('Could not connect.');
}

