<?php
session_start();
include('header.php');
require_once('db-connect.php');
if (isset($_GET['id']) && empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $sql = 'SELECT * FROM `topic` WHERE `topic_id`=:id';
    $sql = 'SELECT * FROM topic';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $topic = $query->fetchAll();
} else {
    $_SESSION['error'] = 'je ne sais pas ce que vous voulez faire';
    header('location:index.php');
}
