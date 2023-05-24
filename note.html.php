<?php

# I need to display the note.

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Note</title>
</head>

<body>

    <h1>Note</h1>

    <article>
        <h2><?php echo $note->title ?></h2>
        <p><?php echo $note->body ?></p>
    </article>

    <footer>
        <a href="edit.php?id=<?php echo $note->id ?>">Edit</a>
        <a href="delete.php?id=<?php echo $note->id ?>">Delete</a>
    </footer>

</body>

</html>
