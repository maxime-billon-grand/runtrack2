<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 02 - Job 01</title>
</head>
<body>
    <?php 
    for ($i = 0; $i <= 1337; $i++) {
        if ($i === 42){
        echo "<p><b><u>$i</u></b></p>";
        }
        else {
            echo "<p>$i</p>";
        }
    }
    
    ?> 
</body>
</html>
