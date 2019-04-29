<?php 
    session_start();

    include 'script/script.php';

    include 'head.php';

    include ('header.php');
    include ($page);
    include ('footer.php');
?>