<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 04</title>
</head>
<body>
    <?php
    // if COOKIE exists
    if(isset($_COOKIE['name'])){
        // delete COOKIE if log out
        if(isset($_POST['logout'])){

            setcookie('name','', time()-3600);
            header('Location: index.php');
        }

        echo '<b>Bonjour ' . $_COOKIE['name'] . '</b>';


        ?>
            <form action="index.php" method="post"> 
                <input type="submit" value="Déconnexion" name="logout">
            </form> 
        <?php

    }
    else{
        // create COOKIE if form filled
        if(isset($_POST['name'])){
            setcookie('name', $_POST['name'], time()+3600);
            header('Location: index.php');

        }
        else{
            ?>
            <form action="index.php" method="post"> 
                     <label for="name">Prénom :</label>
                     <input type="text" id="input" name="name" />
                 <input type="submit" value="Connexion">
             </form> 
         <?php

        }
    }
?>


</body>
</html>