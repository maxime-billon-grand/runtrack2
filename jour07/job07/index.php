<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 07</title>
</head>
<body>

<?php // FUNCTIONS

// Function Split string at each space
function explosion($str){
        $word = "";
        $wordlist = [];

        // For each letter, if it's a add $word to the $list, and empty the $word
        for($i = 0; isset($str[$i]); $i++){
            if($str[$i] === " "){
                $wordlist[] = $word;
                $word = "";
            }
            else {
                $word = $word . $str[$i];
            }
        }
        $wordlist[] = $word;

        return $wordlist;
}

// Function GRAS
function gras($str){

    $arr=explosion($str);
    $upper = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    foreach($arr as $w){
        $isUppercase = False;

        foreach($upper as $letter){
            if ($w[0] === $letter){
                $isUppercase = True;
            }
        }

        if ($isUppercase){
            echo "<b>$w</b> ";
        }
        else{
            echo $w . " ";
        }
    }
}

function findIndex($char){
    $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    for ($i=0; isset($alphabet[$i]); $i++) { 
        if ($alphabet[$i] == $char){
            $index=$i;
        }
    }
    if ($index > 25){
        return [True, $index % 26];
    }
    else {
        return [False, $index];
    }
}

function cesar($str, $decal){
    $lower=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $upper=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    for ($i=0; isset($str[$i]) ; $i++) { 
        $findIndex = findIndex($str[$i]);
        if ($findIndex[0]){
            $str[$i] = $upper[($findIndex[1] + $decal)%26];
        }
        else{
            $str[$i] = $lower[($findIndex[1] + $decal)%26];
        }
    }
    return $str;
}

function plateforme($str){
    $arr=explosion($str);

    foreach($arr as $w){
        if (isset($w[-2])){
            if($w[-2] === "m" && $w[-1] === "e"){
                $w = $w . "_";
            }
        }
        echo $w . " ";
    }
}


?>

<!-- FORM IN A TABLE -->
<form action="index.php" method="get">
    <table>
        <thead>
            <tr>
                <th><label for="input-str">Texte</label></th>
                <th><label for="select-fct">Fonction</label></th>
                <th><label for="input-dclg">Decalage</label></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="imput-str" name="str"/></td>
                <td>
                    <select id="select-fct" name="function">
                        <option value="gras" >Gras</option>
                        <option value="cesar" >Cesar</option>
                        <option value="plateforme" >Plateforme</option>
                    </select>
                </td>
                <td><input type="number" id="input-dclg" name="dclg"/></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="GO !">
</form>

<?php

if(isset($_GET["str"]) && isset($_GET["function"]) && isset($_GET["dclg"])){

    switch ($_GET["function"]){
        case "gras":
            echo "FONCTION GRAS > ";
            echo gras($_GET["str"]);
            break;
        case "cesar":
            echo "FONCTION CESAR > ";
            echo cesar($_GET["str"], $_GET["dclg"]);
            break;
        case "plateforme":
            echo "FONCTION CESAR > ";
            echo plateforme($_GET["str"]);
            break;
    }
}


?>
    
</body>
</html>