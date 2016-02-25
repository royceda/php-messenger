<?php
// Connexion à la base de données
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', 'aaaa');
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}
// prepared query
$req = $bdd->prepare('INSERT INTO chat (username, message) VALUES(?, ?)');
$req->execute(array($_POST['username'], $_POST['message']));


header('Location: deialog.php');
?>
