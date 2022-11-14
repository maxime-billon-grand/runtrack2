<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str =  "Chaine de caractères";
    $int = 42;
    $float = 4.2;
    $bool = true;
    ?> 

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>String</td>
                <td>$str</td>
                <td><?php echo $str;?></td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>$int</td>
                <td><?php echo $int;?></td>
            </tr>
            <tr>
                <td>Float</td>
                <td>$float</td>
                <td><?php echo $float;?></td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>$bool</td>
                <td><?php echo $bool;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>