<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 06</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder";

        for($i = 0; isset($str[$i]); $i--){
            echo "$str[$i]";
        }

       
    ?>
</body>
</html>