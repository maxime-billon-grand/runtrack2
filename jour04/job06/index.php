<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 06</title>
</head>
<body>

    <form action="index.php" method="post"> 
        <div>
            <label for="number">Nombre :</label>
            <input type="text" id="number" name="number" />
        <div>
        <input type="submit" value="Calcul">
    </form>

    <?php

    if ($_POST){
        if($_POST["number"] % 2 === 0){
            echo "<p>".$_POST["number"]." est un nombre pair</p>";
        }
        else{
            echo "<p>".$_POST["number"]." est un nombre impair</p>";
        }
    }

        ?>
    
</body>
</html>