<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 05</title>
</head>
<body>
    <?php
    function occurences($str, $char){
        $count = 0;
        for ($i=0; isset($str[$i]) ; $i++) { 
            if ($str[$i] === $char){
                $count++;
            }
        }
        return $count;
    }

    echo occurences("salut, ça va", "a");

    ?>
    
</body>
</html>