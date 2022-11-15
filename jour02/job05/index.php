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

    function testPremier($a, $nbr){
        $prime = True;
        foreach($a as $nbrTest){
            if ($nbr % $nbrTest == 0){
                $prime = False;
            }
        }
        
        return $prime;
    }

    $prime_array = array(2, 3, 5, 7);

    for ($i = 2; $i <= 1000; $i++) {
        if ($i === 2 || $i === 3|| $i === 5|| $i === 7){
            echo "<p>$i</p>";
        }
        elseif (testPremier($prime_array, $i)){
            echo "<p>$i</p>";
            $prime_array[] = $i;
        }


    }   
    
    ?> 
</body>
</html>