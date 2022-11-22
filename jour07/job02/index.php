<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 02</title>
</head>
<body>
    <?php
    function bonjour($jour){
        if ($jour){
            echo "Bonjour";
        }
        else {
            echo "Bonsoir";
        }
    }

    $myBool = True;
    
    bonjour($myBool);

    ?>


    
</body>
</html>