<?php

# I need to display a single note based on the id within the url.

# I need to create a new database connection.

require 'db.php';

# I need to fetch the note from the database.

$statement = $pdo->prepare('select * from notes where id = :id');

$statement->execute([
    ':id' => $_GET['id']
]);

$note = $statement->fetch(PDO::FETCH_OBJ);

# I need to close the database connection.

$pdo = null;

# I need to load the view.

require 'note.html.php';
