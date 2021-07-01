<?php
if (!empty($_POST['user_name'])) {
    $name = $_POST["user_name"];
    $mail = $_POST["user_mail"];
    $msg = $_POST["user_message"];
    echo 'je m\'appelle <span style="color:blue">' . $name . "</span>, mon adresse email est " .  $mail . "<br> " . $msg;
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    ?>

    <form action="form.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="birthdate">date de naissance :</label>
            <input type="date" id="birthdate" name="user_birthdate">
        </div>
        <div>
            <label for="humeur">Comment allez vous ? :</label>
            <input type="color" id="mood" name="user_mood">

        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
            <div class="button">
                <button type="submit">Envoyer le message </button>
                <img src="images/send.png" alt="send" class="flaticon-send">
                <a href="http://">
                </a>


            </div>
        </div>

    </form>
</body>

</html>