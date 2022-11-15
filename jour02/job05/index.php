<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 02 - Job 05</title>
</head>
<body>
    <?php 
    for ($i = 2; $i <= 1000; $i++) {
        if ($i === 2 || $i === 3 || $i === 5 || $i === 7){
            echo "<p>$i</p>";
        }
        elseif ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0 && $i % 7 !== 0){
            echo "<p>$i</p>";
        }
        else{
        }

    }   
    
    ?> 
</body>
</html>