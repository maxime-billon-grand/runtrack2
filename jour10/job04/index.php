<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 04</title>
    <style>
        table{
            border: 2px solid black;
        }
        
        th, td {
            border: 2px solid black;
            padding: 1em;
            text-align: center;
        }
    </style>

</head>
<body>
    <?php
        $connect = new mysqli('localhost', 'root', '', 'jour09');
        $query = 'SELECT `prenom`, `nom`, `naissance`, `sexe`, `email` FROM `etudiants` WHERE `prenom` LIKE \'T%\'';
        $result = $connect->query($query);
        $fetched_result = $result->fetch_all();
        
    ?>
    <table>
        <thead>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </thead>
        <tbody>

            <?php
            foreach($fetched_result as $line){
                echo '<tr>';
                foreach($line as $value){
                    echo "<td>$value</td>";
                }
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
    

</body>
</html>