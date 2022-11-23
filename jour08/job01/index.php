<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 01</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_POST["reset"])){
            $_SESSION['nbrVisit'] = 0;
        }
        

        if(isset($_SESSION['nbrVisit'])){
            $_SESSION['nbrVisit'] ++;
            echo 'Il s\'agit de votre visite n°' . $_SESSION['nbrVisit'];
        }
        else{
            $_SESSION['nbrVisit'] = 1;
            echo 'Il s\'agit de votre visite n°' . $_SESSION['nbrVisit'];
        }
    ?>
    <form method="post" action="index.php">
        <input type="submit" name="reset" value="Réinitialiser le compteur"/>
    </form>


</body>
</html>