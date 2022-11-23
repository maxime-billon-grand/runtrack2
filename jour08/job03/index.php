<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 03</title>
</head>
<body>
    <?php 
    session_start();

    // create or reset the array if doesn't exists or press the reset button
    if(!isset($_SESSION['name']) || isset($_POST['reset'])){
        $_SESSION['name']=[];
    }

    ?>
    <form action="index.php" method="post"> 
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="input" name="name" />
        <div>
        <input type="submit" value="Ajout">
    </form>

    <form action="index.php" method="post">
        <input type="submit" value="Réinitialiser" name="reset">
    </form>

    <?php
        if(isset($_POST['name'])){
            $_SESSION['name'][] = $_POST['name'];

            echo '<ul>';
            foreach($_SESSION['name'] as $name){
                echo "<li>$name</li>";
            }
            echo'</ul>';
        }
    ?>

</body>
</html>