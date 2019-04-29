<?php
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'][0] == 0) { include 'accueil_login.php'; }
        else { include 'accueil_accoumpt.php'; }
    } else { include 'accueil_login.php'; }
?>
  
