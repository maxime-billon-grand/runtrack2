<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 02 - Job 03</title>
</head>
<body>
    <?php 
    for ($i = 0; $i <= 100; $i++) {
        if ($i <= 20){
        echo "<p><i>$i</i></p>";
        }
        elseif ($i === 42) {
            echo "<p><u>La Plateforme_</u></p>";
        }
        elseif ($i >= 25 && $i <= 50){
            echo "<p><u>$i</u></p>";
        }
        else {
            echo "<p>$i</p>";
        }
    }
    
    ?> 
</body>
</html>