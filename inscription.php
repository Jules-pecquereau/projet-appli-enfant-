<?php
session_start();
include('header.php');
?>
<body>
    <h1>Inscription</h1>
    <div id="inscription">
    <form action="inscription.php" method="post">
    <div id="inscription_gauche">
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="pseudo" placeholder="pseudo" required>
        <input type="date" name="date" required> 
    </div>
    <div id="inscription_droite">
        <input type="text" name="mail" placeholder="mail d'un adulte" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="password" name="mdp1" placeholder="Réecrire votre mot de passe" required>
        <?php
    include("commande.php");
    ?>
    </div >
    <div id="btn_inscri">
        <input id="obejet_btn_inscription" type="submit" name="bouton" value="Confirmer votre inscription" required>
        
    </div>
    <div id="connecter_vous">
    <p><a href="connexion.php" class="connectez">Connectez vous maintenant !</a></p>
    </div>
</form>
   </div> 
<script src="script.js"></script>
</body>
</html>

