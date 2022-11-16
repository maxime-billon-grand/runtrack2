<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 01</title>
</head>
<body>
    <ul>
    <?php
    $array = [200, 204, 173, 98, 171, 404, 459];
    foreach($array as $val){
        if ($val % 2 === 0){
            echo " <li>$val est pair</li>";
        }
        else {
            echo "<li>$val est impair</li>";
        }
    }
    ?>
    </ul> 
</body>
</html>