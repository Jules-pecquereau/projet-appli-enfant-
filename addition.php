            <?php           
                if (isset($_REQUEST["difficulte"])){
                    $_SESSION["difficulte"] = $_REQUEST["difficulte"];
                }
            
                if (isset($_SESSION["difficulte"])){
                    if ($_SESSION["difficulte"] == "Facile"){
                        $nombre1 = rand(1, 10);
                        $nombre2 = rand(1, 10);
                    }
                    if ($_SESSION["difficulte"] == "Moyen"){
                        $nombre1 = rand(10, 20);
                        $nombre2 = rand(10, 20);
                    }
                    if ($_SESSION["difficulte"] == "Difficile"){
                        $nombre1 = rand(20, 100);
                        $nombre2 = rand(20, 100);
                    }
                    echo "<div id='mere_calcul'><p class='calcul'>".$nombre1." + ".$nombre2." = </p></div>";
                    $resultat = 0;
                    $resultat = $nombre1 +$nombre2;
                    echo ' <form class="reponse" action="quizz.php" method="post">
                    <input class="value" type="number" name="reponse" placeholder="Réponse">
                    <input type="hidden" name="resultat" value='.$resultat.'>
                    <input type="hidden" name="affichage" value="afficher">
                    <input class="valider" type="submit" value="valider">
                    </form>';
                }
        
                if ($_SESSION["id"] != ""){
                    $id = $_SESSION["id"];
                }
                
                

                
                
                    if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
                        if ($_POST["reponse"] == $_POST["resultat"]){
                            echo "<p class='statut_rep'>bonne reponse</p>";
                            if ($_SESSION["id"] != ""){
                                $sql="UPDATE score set ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." = ".$_SESSION["calcul"]."_".$_SESSION["difficulte"]." + 1 WHERE utilisateur = ".$_SESSION["id"]."";
                                $temp=$pdo->query($sql);
                            
                            while($resultat_sql=$temp->fetch()){
                                
                
                            }
                            }
                        }
                        else{
                            echo "<p class='statut_rep'>mauvaise reponse</p>";
                        }
                    }
                    if(!isset($_REQUEST['difficulte'])){
                        echo'
                        <div id="index_calulette">
                        <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">
                        <p id="message" class="bulle"></p>  
                        </div>
                        <p style="display:none;" id="message_calc"> Super maintenant prépare toi pour '.$_REQUEST['difficulte'].'</p>
                        <script src="js/script.js"></script>';
                    }
            ?>