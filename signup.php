<?php

try{

//echo htmlspecialchars($_POST['username']);
//echo htmlspecialchars($_FILES['myfile']['name']);
//file management
if (isset($_FILES['myfile']) AND $_FILES['myfile']['error'] == 0){
 if ($_FILES['myfile']['size'] <= 4000000)
 {
   $file = $_FILES['myfile'];
  // Testons si l'extension est autorisée
  $infosfichier = pathinfo($_FILES['myfile']['name']);
  $extension_upload = $infosfichier['extension'];
  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG');
  if (in_array($extension_upload, $extensions_autorisees))
  {
    $path = 'file/' . basename($_FILES['myfile']['name']);
    move_uploaded_file($_FILES['myfile']['tmp_name'], $path);
    echo 'envoi a bien été effectué : ';
    //echo htmlspecialchars($_POST['username']);
    echo $path;
  }
 }
}




$bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', 'aaaa');
$req = $bdd->prepare('INSERT INTO user VALUES(username, password, image)');
$req -> execute(array('user' => $_POST['user'], 'password' => $_POST['password'], 'image' => $path));


}catch(Exception $e){
 die('Error: ' . $e->getMessage());
}


 ?>
