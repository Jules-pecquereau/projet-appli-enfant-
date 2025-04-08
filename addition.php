<?php
$difficulte = 0;

if ($difficulte == 0){
    echo '<form action="index.php">
        <input type="submit" value="facile" name="difficulte">
        <input type="submit" value="moyen" name="difficulte">
        <input type="submit" value="difficile" name="difficulte">
    </form>';
    $difficulte = 1;
}


?>