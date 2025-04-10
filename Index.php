<?php
session_start();
include('header.php');
$texte = str_split("Boaqz");


?>

    <body >
        <audio id="audio">
        <source src="son/parle.mp3" type="audio/mpeg">
    </audio>
        <div id="index_calulette">
            <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">
        <p id="message" class="bulle"></p>  
        <script src="js/script.js"></script>
    </div>
</body>
    </html>

