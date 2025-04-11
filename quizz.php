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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
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
                echo '<form class="form_difficulte" action="quizz.php" method = "post">
                <input class="facile" type="submit" value="Facile" name="difficulte">
                </br>
                <input class="moyen" type="submit" value="Moyen" name="difficulte">
                </br>
                <input class="difficile" type="submit" value="Difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
                <input type="hidden" value="1" name="sans_parler">
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
                <input class="facile" type="submit" value="Facile" name="difficulte">
                </br>
                <input class="moyen" type="submit" value="Moyen" name="difficulte">
                </br>
                <input class="difficile" type="submit" value="Difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
                <input type="hidden" value="1" name="sans_parler">
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
                <input class="facile" type="submit" value="Facile" name="difficulte">
                </br>
                <input class="moyen" type="submit" value="Moyen" name="difficulte">
                </br>
                <input class="difficile" type="submit" value="Difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
                <input type="hidden" value="1" name="sans_parler">
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
                <input class="facile" type="submit" value="Facile" name="difficulte">
                </br>
                <input class="moyen" type="submit" value="Moyen" name="difficulte">
                </br>
                <input class="difficile" type="submit" value="Difficile" name="difficulte">
                <input type="hidden" value="afficher" name="affichage">
                <input type="hidden" value="1" name="sans_parler">
            </form>';
            }
            if (isset($_REQUEST["affichage"])){
                if ($_REQUEST["affichage"] == "afficher"){
                    include ("division.php"); 
                }
            }
        }
    }
    if(isset($_SESSION["difficulte"])){
        if (isset($_SESSION["id"])){
            if ($_SESSION["id"] != ""){
                $sql="SELECT * FROM score WHERE score.utilisateur = ".$_SESSION["id"];
                $temp=$pdo->query($sql);
                while($resultat=$temp->fetch()){
                    echo "<p class='score'>Score totale : ".$resultat["".$_SESSION["calcul"]."_".$_SESSION["difficulte"].""]."</p>";
                }
            }
        }
    }
    ?>
    <?php
    if(!isset($_GET['calcul']) && isset($_SESSION["difficulte"]) && isset($_REQUEST["calcul_type"])){
            echo'
            <div id="index_calulette">
            <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">
            <p id="message" class="bulle"></p>  

            </div>
            <p style="display:none;" id="message_calc"> Choisi maintenant ton type de calcul</p>
            <script src="js/script.js"></script>';        
    }

    if(isset($_GET['calcul'])){
        echo'
            <div id="index_calulette">
            <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" class="img_qui_change" alt="">
            <p id="message" class="bulle"></p>  

            </div>
            <p style="display:none;" id="message_calc"> Choisi maintenant ton type de calcul</p>
            <script src="js/script.js"></script>';   

        
}

if(isset($_SESSION['difficulte']) && !isset($_GET["calcul"]) && isset($_POST{"resultat"})){
    echo' 
    <div id="index_calulette">
    <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">
    <p id="message" class="bulle"></p>  
    </div>'; 
    if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
        if ($_POST["reponse"] == $_POST["resultat"]){
            echo "<p style='display:none;' id='message_calc'> Bonne réponse bien joué</p>";}
        else{
            echo "<p style='display:none;' id='message_calc'> Tu as faux, la réponse était ".$_POST["resultat"]."</p>";}
        }  
        echo'<script src="js/script.js"></script>';
}

if (isset($_REQUEST["sans_parler"])){
    echo '<img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">';

}


    

        





?>
<a href="index.php" class="menu">Menu principal</a>
</body>
</html>