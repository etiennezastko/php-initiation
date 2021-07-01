<?php
if ($_POST) {

    if (
        isset($_POST["topic_author"]) && !empty($_POST["topic_author"])
        && isset($_POST["topic_object"]) && !empty($_POST["topic_object"])
        && isset($_POST["topic_text"]) && !empty($_POST["topic_text"])
    ) {

        $author = strip_tags($_POST['topic_author']);
        $object = strip_tags($_POST['topic_object']);
        $text = strip_tags($_POST['topic_text']);


        require_once("db-connect.php");
        $sql = "INSERT INTO topic (`author`, `object`, `text`) VALUES (:topic_author, :topic_object , :topic_text)";
        $query = $db->prepare($sql);
        $query->bindValue(':topic_author', $sauthor, PDO::PARAM_STR);
        $query->bindValue(':topic_object', $object, PDO::PARAM_STR);
        $query->bindValue(':topic_text', $text, PDO::PARAM_STR);
        $query->execute();
    } else {
        echo "Remplissez tous les champs";
    }
} else {
    echo 'vous devez publier quelque chose.';
}
