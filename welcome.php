<?php
session_start();
$_SESSION['username'] = $_COOKIE['username'];
$_SESSION['image'] = "/upload"
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">

<head>
        <title>php-mess</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>


<body>
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                        <div class="navbar-header">
                                <a class="navbar-brand" href="#">
                                        <img alt="Brand" src="https://avatars3.githubusercontent.com/u/10850615?v=3&s=460" width="100%" height="100%">
                                </a>
                                <?php
                                echo '<a class="navbar-brand">'. $_SESSION['username'].'</a>';
                                ?>
                        </div>
                </div>
        </nav>


        <div class="container">
                <div class="row">
                        <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', '');
                        $req = $bdd->query('SELECT * FROM user');
                        while($data = $req->fetch()){
                                //print_r($data);
                                //echo 'user : "' . $data['username'] . '  ';


                        //while loop
                        ?>
                <div class="col-sm-3 col-md-4">
                        <div class="thumbnail">
                                <img style="width: 200px; height: 200px"
                                <?php
                                if($data['image']){
                                        echo 'src=" ' . $data['image']. '"';
                                }else {
                                        echo 'src="https://scontent-cdg2-1.xx.fbcdn.net/hprofile-xta1/v/t1.0-1/p160x160/1928831_10153620257739724_1605897933318662058_n.jpg?oh=81e218f4f3043d17070ae703c264f7c7&oe=575C47E9"';
                                }
                                        ?>
                                        alt="...">
                                        <div class="caption">
                                                <h3><?php echo $data['username']?></h3>
                                                <p>...</p>
                                                <p><a href="#" class="btn btn-primary" role="button">Profile</a> <a href="#" class="btn btn-default" role="button">Messages</a></p>
                                        </div>
                                </div>
                        </div>


                <?php  
        }

                 ?>

        </div>
</div>




</body>
</html>
