<?php

if(isset($_POST['signup']) AND $_POST['signup'] == "Sign up"){
  echo '<h2> Sign</h2>';
  header("Location: ./form.php");
}
else if(isset($_POST['username'])){
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', '');
    $req = $bdd->prepare('SELECT * FROM user WHERE username = ?');
    $req->execute(array($_POST['username']));
    $data = $req->fetch();

    if(isset($_POST['password']) AND $_POST['password'] == $data['password']){
      ?>
      <h1> OKKKKKK !!! </h1>

      <?php
      //echo '<p>bonjour ' . $data['username'] . '</p>';
      setcookie('username',$_POST['username'] , time() + 1*24*3600);
      setcookie('id', $data['id'], time() + 1*24*3600);
      header("Location: ./welcome.php");

  }else {
    echo '<p> invalid password</p>';
    include('login.php') ;
  }

  }catch(Exception $e){
    die('Error: ' . $e->getMessage());
  }
}



?>
