<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 04</title>
</head>
<body>
    <?php
       $str = "Dans l'espace, personne ne vous entend crier";
       $count = 1;

       for ($i = 0; isset($str[$i]); $i++) {
            $count++;
       }

       echo $count;
       
    ?>
</body>
</html>