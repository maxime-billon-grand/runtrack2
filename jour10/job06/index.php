<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 06</title>
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
        $query = 'SELECT COUNT(*) FROM etudiants';
        $result = $connect->query($query);
        $fetched_result = $result->fetch_array();
    ?>
    <table>
        <thead>
            <th>Nombre d'étudiants</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $fetched_result[0];?></td>
            </tr>
        </tbody>
    </table>
    

</body>
</html>