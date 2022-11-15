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
    /* This function tells if the $nbr is a prime number by testing if $nbr is divisable by the array $a
    if yes, it means that $nbr is not a prime number, so it returns False */
    function testPremier($a, $nbr){
        $prime = True;
        foreach($a as $nbrTest){
            if ($nbr % $nbrTest == 0){
                $prime = False;
            }
        }
        
        return $prime;
    }

    /* This array contains 2, 3, 5, 7, and all the prime numbers before the $i in the loop
        Like this, all prime numbers will be tested as a possible disvisor of $i */
    $prime_array = [2, 3, 5, 7];

    for ($i = 2; $i <= 1000; $i++) {
        if ($i === 2 || $i === 3|| $i === 5|| $i === 7){
            echo "<p>$i</p>";
        }
        elseif (testPremier($prime_array, $i)){
            echo "<p>$i</p>";
            $prime_array[] = $i;
        }
    }   

// It exists an alternate method I wrote previously but some numbers are falsely considered as prime numbers, for example: 77
/*
    for ($i = 2; $i <= 1000; $i++) {
        if ($i === 2 || $i === 3|| $i === 5|| $i === 7){
            echo "<p>$i</p>";
        }
        elseif ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0 && $i % 7 !== 0){
            echo "<p>$i</p>";
        }
    }   
*/
    ?> 
</body>
</html>