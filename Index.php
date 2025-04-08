<?php
session_start();
include('header.php');
?>
<html>
<body>
    <form action="index.php">
        <div id="menu_index">
            <div id="addition"><input type="submit" value="Addition" name="calcul"></div>
            <div id="soustraction"><input type="submit" value="Soustraction" name="calcul"></div>
            <div id="multiplication"><input type="submit" value="Multiplication" name="calcul"></div>
            <div id="division"><input type="submit" value="Division" name="calcul"></div>
        </div>
    </form>
    <?php
    if (isset($_REQUEST["calcul"])){
        if ($_REQUEST["calcul"] == 'Addition'){
            include ("addition.php");   
        }
    }
    ?>

</body>
</html>