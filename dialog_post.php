<?php
// Connexion à la base de données
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', '');
 // prepared query
 $req = $bdd->prepare('INSERT INTO messages (_from, _to, message) VALUES(?, 2, ?)');
 $req->execute(array($_COOKIE['id'], $_POST['message']));

}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}


header('Location: dialog.php');
?>
