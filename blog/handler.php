<?php
echo "<p>" . $_POST["author"] . "</p>";
echo "<p>" . $_POST["object"] . "</p>";
echo "<p>" . $_POST["text"] . "</p>";



// Ceci est pour obliger les personnes qui remplissent le formulaire à remplir tout les champs
if (
    isset($_POST["author"]) && !empty($_POST["author"])
    && isset($_POST["object"]) && !empty($_POST["object"])
    && isset($_POST["text"]) && !empty($_POST["text"])
) {

    require_once("db-connect.php");
    $author = strip_tags($_POST['author']);
    $object = strip_tags($_POST['object']);
    $text = strip_tags($_POST['text']);


    $sql = "INSERT INTO articles (`author`, `object`, `text`) VALUES(:author,:object,:text)";


    $query = $db->prepare($sql);
    $query->bindValue(':author', $author, PDO::PARAM_STR);
    $query->bindValue(':object', $object, PDO::PARAM_STR);
    $query->bindValue(':text', $text, PDO::PARAM_STR);
    $query->execute();

?>

    <a href="index.php"><button>Display blog</button></a>
<?php
} else {
    echo "Remplissez tous les champs";
}
?>
<?php
$servername = 'localhost';
$dbname = 'blog';
$username = 'root';
$password = '';
try {
    $db = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* echo 'success'; */
} catch (PDOException $e) {
    echo 'connexion failed' . $e->getMessage();
}
