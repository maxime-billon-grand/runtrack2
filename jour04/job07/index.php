<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 07</title>
    <style>
        *{
            font-family: consolas;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post"> 
        <div>
            <label for="width">Largeur :</label>
            <input type="text" id="width" name="width" />
        <div>
        <div>
            <label for="height">Hauteur :</label>
            <input type="text" id="height" name="height" />
        <div>
        <input type="submit" value="Calcul">
    </form><br/>


    <?php
    if ($_POST){
        for($h=1; $h <= $_POST["height"]; $h++){
            for ($spaceBefore = 1; $spaceBefore <= ($_POST["height"] - $h); $spaceBefore++){
                echo "&nbsp;";
            }
            echo "/";
            for ($underscoreInside = 1; $underscoreInside <= ($h*2 - 2) ; $underscoreInside++){
                echo "_";
            }
            echo "\<br/>";
        }

        for($h=1; $h <= $_POST["height"]; $h++){
            echo "|";

            if ($h == $_POST["height"]){
                for ($w=1; $w <= ($_POST["width"] - 2); $w++){
                    echo "_";
                }
            }
            else{
                for ($w=1; $w <= ($_POST["width"] - 2); $w++){
                    echo "&nbsp;";
                }
            }

            echo "|<br/>";
        }
    }
    

        ?>
</body>
</html>