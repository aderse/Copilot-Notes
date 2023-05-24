<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Notes</title>
</head>

<body>

    <h1>Notes</h1>

    <header>
        <a href="new.php">Add Note</a>
    </header>

    <ul>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="note.php?id=<?php echo $note->id ?>">
                    <?php echo $note->title ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>





