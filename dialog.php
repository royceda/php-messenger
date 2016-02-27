<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
        <title>Messenger</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
                        <label for="pseudo">Pseudo</label> : <input type="text" name="username" id="username" /><br />
                        <label for="message">Message</label> : <input type="text" name="message" id="message" /><br />
                        <input type="submit" value="Envoyer" />
                </p>
        </form>
<?php
// Connexion à la base de données
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=messenger', 'root', '');
        // last 10 messages
        $response = $bdd->query('SELECT _from, message FROM messages ORDER BY _date DESC LIMIT 0, 10');
        while ($data = $response->fetch())
        {
                echo '<p><strong>' . htmlspecialchars($data['_from']) . '</strong> : ' . htmlspecialchars($data['message']) . '</p>';
        }
        $response->closeCursor();
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>

</body>
</html>
