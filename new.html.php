<?php

# I need to create an html form for the user to fill out that has a title and a body.

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>New Note</title>
</head>

<body>

    <h1>New Note</h1>

    <form method='post'>
        <div>
            <label for='title'>Title</label>
            <input id='title' name='title' type='text'>
        </div>
        <div>
            <label for='body'>Body</label>
            <textarea id='body' name='body'></textarea>
        </div>
        <button type='submit'>Create</button>
    </form>

</body>

</html>