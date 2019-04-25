<?php 
    session_start();

    $_SESSION['login'] = [1, "gabriel"];

    include 'head.php';

    include 'script/script.php';
    include $page;
    include 'footer.php';
?>