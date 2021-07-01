<?php
$name = $_POST["user_name"];
$mail = $_POST["user_mail"];
$mood = $_POST["user_mood"];
$msg = $_POST["user_message"];
echo 'je m\'appelle <span style="color:blue">' . $name . "</span>, mon adresse email est " .  $mail . "<br> " . $msg;
$current_date = date('Y-m-d');
$birth_date = $_POST['user_birthdate'];
$age = $current_date - $birth_date;
echo ' j\'ai ' . $age . ' ans. ';
echo '<br>' . $current_date;
echo '<br>' . $birth_date;

if ($mood == 'bien') {
    echo 'je vais bien';
} else {
    echo 'c\'est l\'enfer sur terre';
}
