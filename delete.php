<?php

# I need to delete a note based on the ID in the URL.

# I need to create a new database connection.

require 'db.php';

# I need to delete the note from the database.

$statement = $pdo->prepare('delete from notes where id = :id');

$statement->execute([
    ':id' => $_GET['id']
]);

# I need to redirect the user to the homepage.

header('Location: /');

exit();