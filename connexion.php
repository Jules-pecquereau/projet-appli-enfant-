<?php
session_start();
include('bdd.php');
$_SESSION["connexion"] = 0;
$erreur = 0;
$sql="SELECT * FROM `utilisateur`";
$temp=$pdo->query($sql);
while($resultat=$temp->fetch()){
    if (isset($_POST["pseudo"]) && isset($_POST["mdp"])){ #vérifie si les valeurs de l'utilisateur sont correct
        
        if ($_POST["pseudo"] == $resultat["pseudo"] && $_POST["mdp"] == $resultat["mdp"]){
            $_SESSION["connexion"] = 1;
        }
    }
    else{
        $erreur = 1 ;
        echo "erreur";
        if ($resultat["admin"] == 1){ #si l'utilisateur est un admin, le faire savoir à la session
            $_SESSION["admin"] = 1;
        }
        
    }
}






    include("header.php");
    ?>
<body>
    <br>
    
    <div id="form_connexion">
    <div id="couleur_form">
    <?php
    if ($_SESSION["connexion"] == 0){ #Vérifie si la personne est connectée ou non
                echo '<form action="connexion.php?connexion='.$_SESSION['connexion'].'" method="post">
                    <div id="pseudo"><input type="text" name="pseudo" placeholder="Pseudo" required></div>
                    <div id="mdp"><input type="password" name="mdp" placeholder="Mot de passe" required></div>
                    <div ><input id="btn" type="submit" name="bouton" value="Valider"></div>
                </form>'; 
                if ($erreur == 1)
                    echo'Pseudo ou mot de passe incorrect';
            }
            if ($_SESSION["connexion"] == 1){ #si la personne est connectée, renvoie à l'index
                header('Location: index.php');
                
            }

            ?>
            <p>vous n'avez pas de compte ?</p><a href="inscription.php">inscriver vous !</a> 
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>