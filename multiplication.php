    <?php           
            

            if (isset($_REQUEST["difficulte"])){
                $_SESSION["difficulte"] = $_REQUEST["difficulte"];
            }
        
            if (isset($_SESSION["difficulte"])){
                if ($_SESSION["difficulte"] == "Facile"){
                    $nombre1 = rand(1, 3);
                    $nombre2 = rand(1, 10);
                }
                if ($_SESSION["difficulte"] == "Moyen"){
                    $nombre1 = rand(3, 6);
                    $nombre2 = rand(1, 10);
                }
                if ($_SESSION["difficulte"] == "Difficile"){
                    $nombre1 = rand(7, 10);
                    $nombre2 = rand(1, 10);
                }
                echo "<p class='calcul'>".$nombre1." x ".$nombre2." = </p>";
                $resultat = 0;
                $resultat = $nombre1 * $nombre2;
                echo ' <form class="reponse" action="quizz.php" method="post">
                <input class="value" type="number" name="reponse" placeholder="Réponse">
                <input type="hidden" name="resultat" value='.$resultat.'>
                <input type="hidden" name="affichage" value="afficher">
                <input class="valider" type="submit" value="valider">
                </form>';
            }
    
            $id = $_SESSION["id"];
            if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
                if ($_POST["reponse"] == $_POST["resultat"]){
                    echo "bonne reponse";
                    if ($_SESSION["id"] != ""){
                        $sql="UPDATE score set ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." = ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." + 1 WHERE utilisateur = ".$id."";
                        $temp=$pdo->query($sql);
                        while($resultat_sql=$temp->fetch()){
                        
        
                    }
                }
            }
                else{
                    echo "mauvaise reponse";
                }
            }
        ?>