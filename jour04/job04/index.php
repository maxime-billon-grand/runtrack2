<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 04</title>
    <style>
        td{
            border: 2px solid black;
        }
        thead{
            font-weight:900;
        }
    </style>
</head>
<body>

    <form method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name" />
        <div>
        <div>
            <label for="mail">E-mail :</label>
            <input type="text" id="mail" name="user_email" />
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>
<?php
    if($_POST){
        echo "<table>
        <thead>
            <tr>
                <td>Argument</td>
                <td>Valeur</td>
            </tr>
        </thead>
        <tbody>";

        foreach($_POST as $key => $value){
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
        }
        echo "</tbody></table>";
    }

?>
</body>
</html>
