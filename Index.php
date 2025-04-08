<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>SuperMatos</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <link rel="stylesheet" href="style.css">
    </head>
<html>
<body>
    <form action="index.php">
        <div id="menu_index">
            <div id="addition"><input type="submit" value="Addition" name="calcul"></div>
            <div id="soustraction"><input type="submit" value="Soustraction" name="calcul"></div>
            <div id="multiplication"><input type="submit" value="Multiplication" name="calcul"></div>
            <div id="division"><input type="submit" value="Division" name="calcul"></div>
        </div>
    </form>
    <?php
    if (isset($_REQUEST["calcul"])){
        $_SESSION["calcul"] = $_REQUEST["calcul"];
    }
    
    if (isset($_SESSION["calcul"])){
        if ($_SESSION["calcul"] == 'Addition'){
            include ("addition.php"); 
        }
    }

    ?>
 <a href="connexion.php">kaka</a>
</body>
</html>