<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 02</title>
</head>
<body>
    <?php
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

        for ($i = 0; isset($str[$i]); $i=$i+2) {
            echo $str[$i];
        }
    ?>
</body>
</html>