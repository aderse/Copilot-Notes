<?php

# Check if there's been a POST request.
# If POST request, then save to database.
# If GET request, then display the form.

if ($_POST) {

    $note = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    # I need to save the note to the database.

    require 'db.php';

    $statement = $pdo->prepare("
        update notes
        set title = :title, body = :body
        where id = :id

    ");

    $statement->execute([
        ':title' => $title,
        ':body' => $body,
        ':id' => $note
    ]);

    # I need to redirect the user to the homepage.

    header('Location: /');

    exit();

} else {

    # I need to be able to edit the note

    $note = $_GET['id'];


    # Get the note from the database based on the id passed in.

    require 'db.php';

    $statement = $pdo->prepare('select * from notes where id = :id');

    $statement->execute([
        ':id' => $note
    ]);

    $note = $statement->fetch(PDO::FETCH_OBJ);

    # I need to close the database connection.

    $pdo = null;

}






require 'edit.html.php';

