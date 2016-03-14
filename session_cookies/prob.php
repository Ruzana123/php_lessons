<?php
    session_start(); 
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } 
    echo "Вы обновили эту страницу " . $_SESSION['counter']++ . "раз.";
    echo "<br> <a href=" . $_SERVER['PHP_SELF'] . "> обновить" . "</a>"; 
?>