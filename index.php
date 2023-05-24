<?php

require 'db.php';

$statement = $pdo->prepare('select * from notes');
$statement->execute();
$notes = $statement->fetchAll(PDO::FETCH_OBJ);

require 'notes.html.php';

# I need to close the database connection.

$pdo = null;