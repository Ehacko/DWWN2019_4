<?php
//    if (isset($_POST['page'])) { $page = $_POST['page'].'html'; }
//    else { header 'location?page=accueil'; }*
    $page = 'accueil';

    include 'head.php'; 
?>

<?php include $page ;?>

<?php include 'footer.html'; ?>

