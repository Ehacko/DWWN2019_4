<?php 
    session_start();

    $_SESSION['login'] = [0, ""];

    include 'head.php';

    include 'script/script.php';

    include 'header.php' ;
    include $page;
    include 'footer.php';
?>