<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 02</title>
    <style>
        table{
            border: 2px solid black;
        }
        
        th, td {
            border: 2px solid black;
            padding: 1em;
        }
    </style>

</head>
<body>
    <?php
        $connect = new mysqli('localhost', 'root', '', 'jour09');
        $query = 'SELECT `nom`, `capacite` FROM `salles`';
        $result = $connect->query($query);
        $fetched_result = $result->fetch_all();
        
    ?>
    <table>
        <thead>
            <th>Nom</th>
            <th>Capacité</th>
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