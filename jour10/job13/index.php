<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 13</title>
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
        $query = 'SELECT salles.nom as nomSalle, etage.nom as nomEtage FROM salles JOIN etage WHERE salles.id_etage = etage.id';
        $result = $connect->query($query);

    ?>
    <table>
        <thead>
            <th>Nom de la salle</th>
            <th>Etage de la salle</th>
        </thead>
        <tbody>
        <?php
            while (($fetched_result = $result->fetch_array()) != NULL){
                echo "<tr><td>" . $fetched_result['nomSalle'] . "</td>";
                echo "<td>" . $fetched_result['nomEtage'] . "</td></tr>";
            }

            ?>
        </tbody>
    </table>
    

</body>
</html>