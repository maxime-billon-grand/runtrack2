<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 02 - Job 04</title>
</head>
<body>
    <?php 
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0){
        echo "<p>FizzBuzz</p>";
        }
        elseif ($i % 3 === 0){
            echo "<p>Fizz</p>";
        }
        elseif ($i % 5 === 0){
            echo "<p>Buzz</p>";
        }
        else {
            echo "<p>$i</p>";
        }
    }
    
    ?> 
</body>
</html>