<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 05</title>
</head>
<body>

    <?php
    if(!$_POST){ ?>

    <form action="index.php" method="post"> 
        <div>
            <label for="username">Identifiant :</label>
            <input type="text" id="username" name="username" />
        <div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" />
        </div>
        <input type="submit" value="Connexion">
    </form>

    <?php
    }
    else {
        if($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
            echo "C'est pas ma guerre";
        }
        else{
            echo "Votre pire cauchemar";
        }
    }
    ?>
</body>
</html>