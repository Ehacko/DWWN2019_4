<?php
    echo $_SESSION["login"][0];
    if ($_SESSION['login'][0] == 0) { include 'accueil_login.php'; }
    else { include 'accueil_accoumpt.php'; }
?>
  