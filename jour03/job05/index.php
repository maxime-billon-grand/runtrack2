<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        thead{
            font-weight: 700;
        }

        table, td{
            border: 2px solid black;
            text-align: center;
            padding: 0 1em;
        }
    </style>
    <title>Jour 03 - Job 05</title>
</head>
<body>
    <?php
        $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
       
        $dic=[
            "vowels" => ["A", "a", "E", "e", "I", "i", "O", "o", "U", "u", "Y", "y"],
            "consonants" => ["z","r","t","p","q","s","d","f","g","h","j","k","l","m","w","x","c","v","b","n"]
        ];
        $countV = 0;
        $countC = 0;


        for($i = 0; isset($str[$i]); $i++){
            foreach($dic["vowels"] as $vowel){
                if($str[$i] === $vowel){
                    $countV++;
                }
            }
            foreach($dic["consonants"] as $consonant){
                if($str[$i] === $consonant){
                    $countC++;
                }
            }
        }
        
    ?>
    <table>
        <thead>
            <tr>
                <td>Consonnes</td>
                <td>Voyelles</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $countC;?></td>
                <td><?php echo $countV;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>