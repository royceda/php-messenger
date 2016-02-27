<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
        <title>Messenger</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>php-mess</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<style type="text/css">
form
{
        text-align:center;
}
</style>



<body>
        <form action="dialog_post.php" method="post">
                <p>
                        <label for="message">Message</label> : <textarea  name="message" id="message"></textarea>
                        <input type="submit" class="btn btn-primary" value="Send" />
                </p>
        </form>


<div class="list-group col-sm-3 col-sm-offset-4">
<?php
// Connexion à la base de données
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', '');
        // last 10 messages
        $response = $bdd->query('SELECT _from, message FROM messages  ORDER BY _date DESC LIMIT 0, 5');
        //$response = $bdd->prepare('SELECT _from, message FROM messages WHERE _from = ? ORDER BY _date DESC LIMIT 0, 5');
        //$response->execute(array($_COOKIE['id']));
        while ($data = $response->fetch())
        {
                echo '<a href="#" class="list-group-item "><h4 class="list-group-item-heading"> From:' . htmlspecialchars($data['_from']) .'</h4>
                <p class="list-group-item-text">'. htmlspecialchars($data['message']) . '</p>
                </a>';

        }
        $response->closeCursor();
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
</div>
</body>
</html>
