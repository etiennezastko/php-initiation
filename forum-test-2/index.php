<?php

require_once('db-connect.php');
$sql = 'SELECT * FROM `topic`';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <a href="form-topic.php">publier un nouveau topic</a>
    <?php

    foreach ($result as $topic) {
    ?>
        <p><?= $topic['object'] ?></p>
    <?php
    }
    ?>
</body>

</html>