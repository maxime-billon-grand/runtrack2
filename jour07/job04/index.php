<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 04</title>
</head>
<body>
    <?php
    function calcule($val1, $op, $val2){
        switch($op){
            case "+":
                return $val1 + $val2;
                break;
            case "-":
                return $val1 - $val2;
                break;
            case "*":
                return $val1 * $val2;
                break;
            case "/":
                return $val1 / $val2;
                break;
            case "%":
                return $val1 % $val2;
                break;
        }
    }

    echo calcule(2, "/", 3);

    ?>
    
</body>
</html>