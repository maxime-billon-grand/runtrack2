<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 02</title>
</head>
<body>
    <?php
        if(isset($_POST["reset"])){
            setcookie('nbrVisit', 1, time()+3600*2);
            header("Location: index.php");
            exit();
        }

        if(isset($_COOKIE['nbrVisit'])){
            $nbrVisites = $_COOKIE['nbrVisit'] +1;
            setcookie('nbrVisit', $nbrVisites, time()+3600*2);
            echo 'Il s\'agit de votre visite n°' . $_COOKIE['nbrVisit'];
        }
        else{
            setcookie('nbrVisit', 1, time()+3600*2);
            echo 'Il s\'agit de votre visite n°' . $_COOKIE['nbrVisit'];
        }

    ?>   

    <form method="post" action="index.php">
        <input type="submit" name="reset" value="Réinitialiser le compteur"/>
    </form>
</body>
</html>