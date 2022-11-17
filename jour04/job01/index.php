<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 01</title>
</head>
<body>

    <form action="index.php" method="get">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name" />
        <div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="text" id="mail" name="user_email" />
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>
<?php
        $count=0;
        foreach($_GET as $key => $value){
            $count++;
        }
    echo "<p>Il y a $count arguments</p>";
?>
</body>
</html>