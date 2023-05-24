<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Edit Note</title>
</head>

<body>

    <h1>Edit Note</h1>

    <form method='post'>
        <div>
            <label for='title'>Title</label>
            <input id='title' name='title' type='text' value='<?php echo $note->title ?>'>
        </div>
        <div>
            <label for='body'>Body</label>
            <textarea id='body' name='body'><?php echo $note->body ?></textarea>
        </div>
        <input type='hidden' name='id' value='<?php echo $note->id ?>'>
        <button type='submit'>Update</button>
    </form>

</body>

</html>