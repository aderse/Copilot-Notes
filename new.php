<?php

# I want to create a form for the user to fill out that will allow them to create a new note.

# I need to create a new database connection.

require 'db.php';

# I need to check if the user has submitted the form.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # I need to insert the new note into the database.

    $statement = $pdo->prepare("
        insert into notes (title, body, created_at)
        values (:title, :body, :created_at)
    ");

    $statement->execute([
        ':title' => $_POST['title'],
        ':body' => $_POST['body'],
        ':created_at' => date('Y-m-d H:i:s')
    ]);

    # I need to redirect the user to the homepage.

    header('Location: /');
    exit();
}

# I need to close the database connection.

$pdo = null;

# I need to load the view.

require 'new.html.php';