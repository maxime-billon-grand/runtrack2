<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 06</title>
</head>
<body>
    <?php
    function leetSpeak($str){
        for($i=0; isset($str[$i]); $i++){
            switch ($str[$i]){
                case "a":
                case "A":
                    $str[$i] = "4";
                    break;
                case "b":
                case "B":
                    $str[$i] = "8";
                    break;
                case "e":
                case "E":
                    $str[$i] = "3";
                    break;
                case "g":
                case "G":
                    $str[$i] = "6";
                    break;
                case "l":
                case "L":
                    $str[$i] = "1";
                    break;
                case "s":
                case "S":
                    $str[$i] = "5";
                    break;
                case "t":
                case "T":
                    $str[$i] = "7";
                    break;
            }
        }

        return $str;
    }

    echo leetSpeak("ABCDEF");
    ?>


</body>
</html>