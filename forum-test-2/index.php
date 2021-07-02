<?php include('header.php'); ?>

<?php
if (!empty($_SESSION['error'])) {
    echo '<div class="alert alert-danger" role="alert">' .
        $_SESSION['error'] . '</div>';
    $_SESSION['error'] = '';
} else {
    echo '<div class="alert alert-success" role="alert">' .
        $_SESSION['success'] . '</div>';
    $_SESSION['success'] = '';
}
?>
<a href="form-topic.php"><button type="button" class="btn btn-outline-primary">Ajouter un sujet</button></a>

<?php include('footer.php'); ?>