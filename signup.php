<?php

try{
$bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', 'aaaa');
$req = $bdd->prepare('INSERT INTO user VALUES(username, password)');
$req -> execute(array('user' => $_POST['user'], 'password' => $_POST['password']));

}catch(Exception $e){
 die('Error: ' . $e->getMessage());
}


 ?>
