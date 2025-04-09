<?php
session_start();
include("bdd.php");
if (!isset($_SESSION["id"])){
    $_SESSION["id"] = "";
}
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
    <form action="quizz.php">
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
            if (isset($_REQUEST["calcul"])){
                if ($_REQUEST["calcul"] == 'Addition')
                echo '<form action="quizz.php" method = "post">
                <input type="submit" value="facile" name="difficulte">
                <input type="submit" value="moyen" name="difficulte">
                <input type="submit" value="difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
            </form>';
            }
            if (isset($_REQUEST["affichage"])){
                if ($_REQUEST["affichage"] == "afficher"){
                    include ("addition.php"); 
                }
            }
        }
    }

    if (isset($_SESSION["calcul"])){
        if ($_SESSION["calcul"] == 'Soustraction'){
            if (isset($_REQUEST["calcul"])){
                if ($_REQUEST["calcul"] == 'Soustraction')
                echo '<form action="quizz.php" method = "post">
                <input type="submit" value="facile" name="difficulte">
                <input type="submit" value="moyen" name="difficulte">
                <input type="submit" value="difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
            </form>';
            }
            if (isset($_REQUEST["affichage"])){
                if ($_REQUEST["affichage"] == "afficher"){
                    include ("soustraction.php"); 
                }
            }
        }
    }

    if (isset($_SESSION["calcul"])){
        if ($_SESSION["calcul"] == 'Multiplication'){
            if (isset($_REQUEST["calcul"])){
                if ($_REQUEST["calcul"] == 'Multiplication')
                echo '<form action="quizz.php" method = "post">
                <input type="submit" value="facile" name="difficulte">
                <input type="submit" value="moyen" name="difficulte">
                <input type="submit" value="difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
            </form>';
            }
            if (isset($_REQUEST["affichage"])){
                if ($_REQUEST["affichage"] == "afficher"){
                    include ("multiplication.php"); 
                }
            }
        }
    }

    if (isset($_SESSION["calcul"])){
        if ($_SESSION["calcul"] == 'Division'){
            if (isset($_REQUEST["calcul"])){
                if ($_REQUEST["calcul"] == 'Division')
                echo '<form action="quizz.php" method = "post">
                <input type="submit" value="facile" name="difficulte">
                <input type="submit" value="moyen" name="difficulte">
                <input type="submit" value="difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
            </form>';
            }
            if (isset($_REQUEST["affichage"])){
                if ($_REQUEST["affichage"] == "afficher"){
                    include ("division.php"); 
                }
            }
        }
    }
    if (isset($_SESSION["id"])){
        if ($_SESSION["id"] != ""){
            $sql="SELECT * FROM score WHERE score.utilisateur = ".$_SESSION["id"];
            $temp=$pdo->query($sql);
            while($resultat=$temp->fetch()){
                echo $resultat["".$_SESSION["calcul"]."_".$_SESSION["difficulte"].""];
            }
        }
    }
    ?>

 <a href="index.php">compte de monte kaka</a>
</body>
</html>