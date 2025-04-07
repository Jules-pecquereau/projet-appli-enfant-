<?php 
    include("bdd.php");


if (isset ($_POST["prenom"]) && isset ($_POST["nom"]) && isset ($_POST["pseudo"]) && isset ($_POST["date"]) && isset ($_POST["mail"]) && isset ($_POST["mdp"])){
    if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        $sql = "INSERT INTO `utilisateur`(`mdp`, `nom`, `prenom`, `pseudo`,`date_naissance`, `mail`) VALUES ('".$_POST['mdp']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['pseudo']."','".$_POST['date']."','".$_POST['mail']."')";
        $pdo->exec($sql);}
    else{
        echo "email invalide";
    }
    
}


?>