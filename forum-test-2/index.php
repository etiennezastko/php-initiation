<?php
session_start();
include('header.php');
require_once('db-connect.php');
$sql = 'SELECT * FROM topic';
$query = $db->prepare($sql);
$query->execute();
$topics = $query->fetchAll(PDO::FETCH_ASSOC)
?>
<?php
if (!empty($_SESSION['error'])) {
    echo '<div class="alert alert-danger" role="alert">' .
        $_SESSION['error'] . '</div>';
    $_SESSION['error'] = '';
}
if (!empty($_SESSION['success'])) {
    echo '<div class="alert alert-success" role="alert">' .
        $_SESSION['success'] . '</div>';
    $_SESSION['success'] = '';
}
?>


<div class="row">
    <?php
    foreach ($topics as $topic) { ?>

        <div class="col-4"><?= $topic['object']; ?></div>
        <div class="col-4"><?= $topic['author']; ?></div>
        <div class="col-4">
            <a href="view-topic.php?id=<?= $topic['id']; ?>">voir discussion</a>
        </div>

    <?php
    } ?>
</div>
<a href=" form-topic.php"><button type="button" class="btn btn-outline-primary">Ajouter un sujet</button></a>

<?php include('footer.php'); ?>