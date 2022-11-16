<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 07</title>
</head>
<body>
    <?php
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $str2 = "";

       for($i = 0; isset($str[$i]); $i++){
            if (!isset($str[$i+1])){
                $str2 = $str2.$str[0];
            }
            else{
                $str2 = $str2.$str[$i+1];
            }
            
       }
       
       echo $str2;

    ?>
</body>
</html>