<?php
session_start();
include('header.php');
?>
<html>
<body>
    <form action="index.php">
        <input type="submit" value="Addition" name="calcul">
        <input type="submit" value="Soustraction" name="calcul">
        <input type="submit" value="Multiplication" name="calcul">
        <input type="submit" value="Division" name="calcul">
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