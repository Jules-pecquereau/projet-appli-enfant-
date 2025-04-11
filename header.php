<?php
    if (!isset($_SESSION["connexion"])){
        $_SESSION["connexion"] = 0;
    }
        if (isset($_REQUEST["log"])){
            if ($_REQUEST["log"]==0){
            $_SESSION["connexion"]=0;
            $_SESSION["id"]="";
        }
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
    <header>
        <div id="logo">
            <a href="index.php"><img src="image/logo_SuperMatos.png" class="logo" alt="Logo" title="Logo"></a>
        </div>
        <a href="quizz.php?calcul_type=1" class='quizz_btn'>Quizz !!</a>
        <div id="bouton_connexion">
                <?php
                if (isset($_SESSION["connexion"])){
                    if ($_SESSION["connexion"]==1){#si la personne est connecter alors ca affiche un bouton pour se deconnecter 
                        echo"<a class='statistique' href='profil.php'>Statistique</a>";
                        echo"    
                        <form action='index.php?log=0' method='post'>
                        <input class='deconnexion' type='submit' name='connecter' value='Se deconnecter'>
                        </form>";
                    }
                    else {#sinon cela affiche un bouton pour se connecter 
                        echo"<div class='nav'>
                            <a href='connexion.php' class='nav_btn'>Se connecter</a>
                            <a href='inscription.php' class='nav_btn'>S'inscrire</a>
                        </div>";
                    }
                }

                ?>
        </div>

    </header>
    </html>