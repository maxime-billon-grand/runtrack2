<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 06 - Job 05</title>
    <?php
    if($_POST){
        switch($_POST["style"]){
            case "style_1":
                echo '<link rel="stylesheet" href="style1.css">';
                break;
            case "style_2":
                echo '<link rel="stylesheet" href="style2.css">';
                break;
            case "style_3":
                echo '<link rel="stylesheet" href="style3.css">';
                break;
            case "style_4":
                echo '<link rel="stylesheet" href="style4.css">';
                break;
        }
    }
    ?>
</head>
<body>

    <form action="index.php" method="post">
        <div class="form-row">
            <label for="style-select">Style :</label>
            <select name="style" id="style-select">
                <option value="style_1">Style 1</option>
                <option value="style_2">Style 2</option>
                <option value="style_3">Style 3</option>
                <option value="style_4">Style 4</option>
            </select>
        </div>
        <input type="submit" value="Choisir">
    </form>
</body>
</html>