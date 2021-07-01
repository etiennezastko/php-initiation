<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fom</title>
</head>

<body>
    <?php

    foreach ($result as $topic) {
    ?>
        <p><?= $topic['text'] ?></p>
    <?php
    }
    ?>


    <form action="handler-topic.php" method="post">
        <fieldset>
            <legend>form</legend>
            <div>
                <label for="input_author">Author : </label>
                <input type="text" id="input_author" name="author">
            </div>
            <br>
            <div>
                <label for="input_object">Object : </label>
                <input type="text" id='input_object' name='object'>
            </div>
        </fieldset>
        <br>
        <div>
            <div>
                <label for="input_text">Message :</label>
                <input type="textarea" id='input_text' name='text'>
            </div>
            <br>
            <input type="submit">
            <br>
    </form>
</body>

</html>