<?php
session_start();
include("header.php");
include("bdd.php");
$sql="SELECT * FROM utilisateur WHERE identifiant=".$_SESSION["id"];
$temp=$pdo->query($sql);
while($resultat=$temp->fetch()){
    echo "<h1>Statistique de ".$resultat["pseudo"]." </h1>";
}

$sql="SELECT * FROM score WHERE utilisateur=".$_SESSION["id"];
$temp=$pdo->query($sql);
while($resultat=$temp->fetch()){
    $score_addition=$resultat["Addition_Facile"]+$resultat["Addition_Moyen"]+$resultat["Addition_Difficile"];
    $score_soustraction=$resultat["Soustraction_Facile"]+$resultat["Soustraction_Moyen"]+$resultat["Soustraction_Difficile"];
    $score_Multiplication=$resultat["Multiplication_Facile"]+$resultat["Multiplication_Moyen"]+$resultat["Multiplication_Difficile"];
    $score_Division=$resultat["Division_Facile"]+$resultat["Division_Moyen"]+$resultat["Division_Difficile"];
    $erreur=$resultat["erreur"];

}
$score_totale=$score_addition+$score_soustraction+$score_Multiplication+$score_Division;
if($erreur!=0){
    $pourcentage_reussite = $score_totale*100/($score_totale+$erreur);
}
else if($erreur==0 && $score_totale == 0 ){
    $pourcentage_reussite=0;
}
else{
    $pourcentage_reussite=100;
}
echo "<div class='container2'><div class='score2'>Score total : <strong>".$score_totale."</strong></div>";
echo "<div class='score2'>Nombre d'erreur totales : <strong>$erreur</strong></div>";
echo "<div class='score2'>Pourcentage de réussite :<strong> ".round($pourcentage_reussite)." %</strong></div></div>";
echo "<div class='container1'><div class='score'>Score total des additions : ".$score_addition."</div>";
echo "<div class='score'> Score total des soustractions : ".$score_soustraction."</div>";
echo "<div class='score'>Score total des multiplications : ".$score_Multiplication."</div>";
echo "<div class='score'>Score total des divisions : ".$score_Division."</div></div>";




?>

