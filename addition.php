            <?php           
          

                if (isset($_REQUEST["difficulte"])){
                    $_SESSION["difficulte"] = $_REQUEST["difficulte"];
                }
            
                if (isset($_SESSION["difficulte"])){
                    if ($_SESSION["difficulte"] == "facile"){
                        $nombre1 = rand(1, 10);
                        $nombre2 = rand(1, 10);
                    }
                    if ($_SESSION["difficulte"] == "moyen"){
                        $nombre1 = rand(10, 20);
                        $nombre2 = rand(10, 20);
                    }
                    if ($_SESSION["difficulte"] == "difficile"){
                        $nombre1 = rand(20, 100);
                        $nombre2 = rand(20, 100);
                    }
                    echo $nombre1." + ".$nombre2;
                    $resultat = 0;
                    $resultat = $nombre1 +$nombre2;
                    echo '<form action="quizz.php" method="post">
                    <input type="number" name="reponse" placeholder="Réponse">
                    <input type="hidden" name="resultat" value='.$resultat.'>
                    <input type="hidden" name="affichage" value="afficher">
                    <input type="submit" value="valider">
                    </form>';
                }
        
                $id = $_SESSION["id"];
                

                
                
                if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
                    if ($_POST["reponse"] == $_POST["resultat"]){
                        echo "bonne reponse";
                        $sql="UPDATE score set ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." = ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." + 1 WHERE utilisateur = ".$id."";
                        $temp=$pdo->query($sql);
                        while($resultat_sql=$temp->fetch()){
                            
            
                        }
                    }
                    else{
                        echo "mauvaise reponse";
                    }
                }
            ?>