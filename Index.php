<?php
session_start();
include('header.php');
$texte = str_split("Boaqz");


?>

    <body >
        <audio id="audio">
        <source src="son/parle.mp3" type="audio/mpeg">
    </audio>
        <div>
            <img src="image/calculette_qui_parle_pas.png" id="img_qui_change" alt="">
        <div class="bulle"> <p id="message"></p></div>
        <script src="js/script.js"></script>
    </div>
</body>
    </html>

<!-- border-radius: 200px 144px 151px 0px;
-webkit-border-radius: 200px 144px 151px 0px;
-moz-border-radius: 200px 144px 151px 0px; -->