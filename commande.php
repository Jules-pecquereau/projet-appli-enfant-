<?php 
    include("bdd.php");


if (isset ($_POST["prenom"]) && isset ($_POST["nom"]) && isset ($_POST["pseudo"]) && isset ($_POST["date"]) && isset ($_POST["mail"]) && isset ($_POST["mdp"])){
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        echo "<p>adresse mail invalide</p>";}
    else{
        if (strlen($_POST["mdp"]) < 8) {
            echo "<p>Le mot de passe doit faire au moins 8 caractères.</p>";
        } elseif (!preg_match('/[A-Z]/', $_POST["mdp"])) {
            echo "<p>Il faut au moins une majuscule.</p>";
        } elseif (!preg_match('/[a-z]/', $_POST["mdp"])) {
            echo "<p>Il faut au moins une minuscule.</p>";
        } elseif (!preg_match('/[0-9]/', $_POST["mdp"])) {  
            echo "<p>Il faut au moins un chiffre.</p>";
        } else {
            if ($_POST["mdp"] != $_POST["mdp1"]){
                echo "<p>Les mots de passe ne sont pas identique !</p>";
            }
            else{

            $sql = "INSERT INTO `utilisateur`(`mdp`, `nom`, `prenom`, `pseudo`,`date_naissance`, `mail`) VALUES ('".$_POST['mdp']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['pseudo']."','".$_POST['date']."','".$_POST['mail']."')";
            $pdo->exec($sql);} 
            $id = $pdo->lastInsertId();

            $sql2 = "INSERT INTO score (utilisateur) VALUES ('".$id."')";
            $pdo->exec($sql2);
        }
    }
}
    



?>