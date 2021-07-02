<?php include('header.php'); ?>
<form action="handler-topic.php" method="POST">
    <fieldset>
        <legend>Votre Sujet</legend>
        <div>
            <label for="input_author">Auteur : </label>
            <input type="text" class="form-control" id="input_author" name="topic_author">
        </div>
        <br>
        <div>
            <label for="input_object">Sujet : </label>
            <input type="text" class="form-control" id='input_object' name='topic_object'>
        </div>
    </fieldset>
    <br>
    <div>
        <div>
            <label for="input_text">Votre Message :</label>
            <input type="textarea" class="form-control" id='input_mail' name='topic_text'>
        </div>
        <br>
        <button class="btn btn-outline-primary" type="submit">envoyer</button>
</form>
<?php include('footer.php'); ?>