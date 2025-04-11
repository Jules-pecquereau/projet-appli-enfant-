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
                echo "<div id='mere_calcul'><p class='calcul'>".$nombre1." x ".$nombre2." = </p></div>";
                $resultat = 0;
                $resultat = $nombre1 * $nombre2;
                echo ' <form class="reponse" action="quizz.php" method="post">
                <input class="value" type="number" name="reponse" placeholder="Réponse" required>
                <input type="hidden" name="resultat" value='.$resultat.'>
                <input type="hidden" name="nombre1" value='.$nombre1.'>
                <input type="hidden" name="nombre2" value='.$nombre2.'>
                <input type="hidden" name="signe" value="x">
                <input type="hidden" name="affichage" value="afficher">
                <input class="valider" type="submit" value="valider">
                </form>';
            }
    
            $id = $_SESSION["id"];
            if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
                if ($_POST["reponse"] == $_POST["resultat"]){
                                        if ($_SESSION["id"] != ""){
                        $sql="UPDATE score set ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." = ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." + 1 WHERE utilisateur = ".$id."";
                        $temp=$pdo->query($sql);
                        while($resultat_sql=$temp->fetch()){
                        
        
                    }
                }
            }

            }
        ?>