<?php

try{

$file = $_FILES['file'];

//file management
if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0){
 if ($_FILES['file']['size'] <= 4000000)
 {
  // Testons si l'extension est autorisée
  $infosfichier = pathinfo($_FILES['file']['name']);
  $extension_upload = $infosfichier['extension'];
  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG');
  if (in_array($extension_upload, $extensions_autorisees))
  {
    $path = 'uploads/' . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $path);
    echo 'envoi a bien été effectué !';
  }
 }
}




$bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', 'aaaa');
$req = $bdd->prepare('INSERT INTO user VALUES(username, password, image)');
$req -> execute(array('user' => $_POST['user'], 'password' => $_POST['password']));

}catch(Exception $e){
 die('Error: ' . $e->getMessage());
}


 ?>
