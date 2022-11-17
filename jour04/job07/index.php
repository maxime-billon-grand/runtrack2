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
            <input type="text" class="max" name="width" />
        <div>
        <div>
            <label for="height">Hauteur :</label>
            <input type="text" class="max" name="height" />
        <div>
        <input type="submit" value="Dessiner la maison">
    </form><br/>


    <?php
    if ($_POST){
// MLOOP for the roof
        for($h=1; $h <= $_POST["height"]; $h++){
            // Aloop for the space before the /
            for ($spaceBefore = 1; $spaceBefore <= ($_POST["height"] - $h); $spaceBefore++){
                echo "&nbsp;";
            }
            echo "/";

            // Xloop for the underscore inside the roof
            for ($underscoreInside = 1; $underscoreInside <= ($h*2 - 2) ; $underscoreInside++){
                echo "_";
            }
            echo "\<br/>";
        }

// ILOOP for the wall
        for($h=1; $h <= $_POST["height"]; $h++){
            echo "|";
            if ($h == $_POST["height"]){
                // Mloop at the underscore at the ground
                for ($w=1; $w <= ($_POST["width"] - 2); $w++){
                    echo "_";
                }
            }
            else{
                // Eloop for the space inside the wall
                for ($w=1; $w <= ($_POST["width"] - 2); $w++){
                    echo "&nbsp;";
                }
            }

            echo "|<br/>";
        }
    }

    // Copyright Maxime Billon-Grand 2022
?>

</body>
</html>