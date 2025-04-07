<?php 
    include("bdd.php");


if (isset ($_POST["prenom"]) && isset ($_POST["nom"]) && isset ($_POST["pseudo"]) && isset ($_POST["date"]) && isset ($_POST["mail"]) && isset ($_POST["mdp"])){
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        echo "adresse mail invalide";}
    else{
        if (strlen($_POST["mdp"]) < 8) {
            echo "Le mot de passe doit faire au moins 8 caractères.";
        } elseif (!preg_match('/[A-Z]/', $_POST["mdp"])) {
            echo "Il faut au moins une majuscule.";
        } elseif (!preg_match('/[a-z]/', $_POST["mdp"])) {
            echo "Il faut au moins une minuscule.";
        } elseif (!preg_match('/[0-9]/', $_POST["mdp"])) {
            echo "Il faut au moins un chiffre.";
        } else {
            if ($_POST["mdp"] != $_POST["mdp1"]){
                echo "Les mots de passe ne sont pas identique !";
            }
            else{

            $sql = "INSERT INTO `utilisateur`(`mdp`, `nom`, `prenom`, `pseudo`,`date_naissance`, `mail`) VALUES ('".$_POST['mdp']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['pseudo']."','".$_POST['date']."','".$_POST['mail']."')";
            $pdo->exec($sql);}
        }
    }
}
    



?>