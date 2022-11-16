<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 03</title>
</head>
<body>
    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that.";
        $vowels = ["A", "a", "E", "e", "I", "i", "O", "o", "U", "u", "Y", "y"];

        for($i = 0; isset($str[$i]); $i++){
            foreach($vowels as $vowel){
                if($str[$i] == $vowel){
                    echo $str[$i];
                }
            }
        }
    ?>
</body>
</html>