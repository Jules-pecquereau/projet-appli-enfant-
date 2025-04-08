<?php           
          

          if (isset($_REQUEST["difficulte"])){
              $_SESSION["difficulte"] = $_REQUEST["difficulte"];
          }
      
          if (isset($_SESSION["difficulte"])){
              if ($_SESSION["difficulte"] == "facile"){
                  $valeur = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30];
                  $index = array_rand($valeur);
                  $nombre1 = $valeur[$index];
                  $nombre2 = 2;
              }
              if ($_SESSION["difficulte"] == "moyen"){
                $valeur = [6, 12, 18, 24, 30, 36, 42, 48, 54, 60, 66, 72, 78, 84, 90];
                $index = array_rand($valeur);
                $nombre1 = $valeur[$index];
                $nombre2 = 6;
              }
              if ($_SESSION["difficulte"] == "difficile"){
                $valeur = [12, 24, 36, 48, 60, 72, 84, 96, 108, 120, 132, 144, 156, 168, 180];
                $index = array_rand($valeur);
                $nombre1 = $valeur[$index];
                $nombre2 = 12;
              }
              echo $nombre1." ÷ ".$nombre2;
              $resultat = 0;
              $resultat = $nombre1 / $nombre2;
              echo '<form action="index.php" method="post">
              <input type="decimal" name="reponse" placeholder="Réponse">
              <input type="hidden" name="resultat" value='.$resultat.'>
              <input type="hidden" name="affichage" value="afficher">
              <input type="submit" value="valider">


              </form>';
          }
  
  
          if (isset($_POST["reponse"]) && isset($_POST["resultat"])){
              if ($_POST["reponse"] == $_POST["resultat"]){
                  echo "bonne reponse";
              }
              else{
                  echo "mauvaise reponse";
              }
          }
      ?>