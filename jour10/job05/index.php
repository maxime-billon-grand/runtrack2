<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 05</title>
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
        $query = 'SELECT * FROM etudiants WHERE naissance <= CURDATE() - INTERVAL 18 YEAR';
        $result = $connect->query($query);
        
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
            while (($fetched_result = $result->fetch_array()) != NULL){
                echo "<tr><td>" . $fetched_result['prenom'] . "</td>";
                echo "<td>" . $fetched_result['nom'] . "</td>";
                echo "<td>" . $fetched_result['naissance'] . "</td>";
                echo "<td>" . $fetched_result['sexe'] . "</td>";
                echo "<td>" . $fetched_result['email'] . "</td></tr>";
            }

            ?>
        </tbody>
    </table>
    

</body>
</html>