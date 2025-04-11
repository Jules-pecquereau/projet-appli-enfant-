    <?php           
            

            if (isset($_REQUEST["difficulte"])){
                $_SESSION["difficulte"] = $_REQUEST["difficulte"];
            }
        
            if (isset($_SESSION["difficulte"])){
                if ($_SESSION["difficulte"] == "Facile"){
                    $valeur = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30];
                    $index = array_rand($valeur);
                    $nombre1 = $valeur[$index];
                    $nombre2 = 2;
                }
                if ($_SESSION["difficulte"] == "Moyen"){
                    $valeur = [6, 12, 18, 24, 30, 36, 42, 48, 54, 60, 66, 72, 78, 84, 90];
                    $index = array_rand($valeur);
                    $nombre1 = $valeur[$index];
                    $nombre2 = 6;
                }
                if ($_SESSION["difficulte"] == "Difficile"){
                    $valeur = [12, 24, 36, 48, 60, 72, 84, 96, 108, 120, 132, 144, 156, 168, 180];
                    $index = array_rand($valeur);
                    $nombre1 = $valeur[$index];
                    $nombre2 = 12;
                }
                echo "<div id='mere_calcul'><p class='calcul'>".$nombre1." ÷ ".$nombre2." = </p></div>";
                $resultat = 0;
                $resultat = $nombre1 / $nombre2;
                echo ' <form class="reponse" action="quizz.php" method="post">
                <input class="value" type="number" name="reponse" placeholder="Réponse" required>
                <input type="hidden" name="resultat" value='.$resultat.'>
                <input type="hidden" name="nombre1" value='.$nombre1.'>
                <input type="hidden" name="nombre2" value='.$nombre2.'>
                <input type="hidden" name="signe" value="÷">
                <input type="hidden" name="affichage" value="afficher">
                <input class="valider" type="submit" value="valider">
                </form>';
            }

            $id = $_SESSION["id"];    
            if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
                if ($_POST["reponse"] == $_POST["resultat"]){
                    echo"non";
                    if ($_SESSION["id"] != ""){
                        $sql="UPDATE score SET ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." = ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." + 1 WHERE utilisateur = ".$id;
                        $pdo->exec($sql);                  
                    }
                
                }

            }
        ?>