<?php


        if (isset($_REQUEST["log"])){
            if ($_REQUEST["log"]==0){
            $_SESSION["connexion"]=0;
            
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
    </head>
    <header>
        <div id="logo">
            <img src="image/logo_SuperMatos.png" id="logo_app" alt="">
        </div>
        <div id="bouton_connexion">
                <?php
                    if ($_SESSION["connexion"]==1){#si la personne est connecter alors ca affiche un bouton pour se deconnecter 
                        echo"    
                        <form action='index.php?log=0' method='post'>
                        <input type='submit' name='connecter' value='se deconnecter'>
                        </form>";
                    }
                    else {#sinon cela affiche un bouton pour se connecter 
                        echo"    
                        <form action='connexion.php' method='post'>
                            <input type='submit' name='connecter' value='se connecter'>
                        </form>";
                    }

                ?>
                
        </div>
    </header>
    </html>