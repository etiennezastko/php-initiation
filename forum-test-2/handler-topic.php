<?php
session_start();
if ($_POST) {

    if (
        isset($_POST["topic_author"]) && !empty($_POST["topic_author"])
        && isset($_POST["topic_object"]) && !empty($_POST["topic_object"])
        && isset($_POST["topic_text"]) && !empty($_POST["topic_text"])
    ) {
        $_SESSION['success'] = 'votre message à été publié !';
        header('location:index.php');

        $author = strip_tags($_POST['topic_author']);
        $object = strip_tags($_POST['topic_object']);
        $text = strip_tags($_POST['topic_text']);


        require_once("db-connect.php");
        $sql = "INSERT INTO topic (`author`, `object`, `text`) VALUES (:topic_author, :topic_object , :topic_text)";
        $query = $db->prepare($sql);
        $query->bindValue(':topic_author', $author, PDO::PARAM_STR);
        $query->bindValue(':topic_object', $object, PDO::PARAM_STR);
        $query->bindValue(':topic_text', $text, PDO::PARAM_STR);
        $query->execute();
        echo 'tout est ok !';
    } else {
        $_SESSION['error'] = 'il maqnue des informations';
        header('location:index.php');
    }
} else {
    echo 'vous devez publier quelque chose.';
}
