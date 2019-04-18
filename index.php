<?php 
    if (isset($_POST['page'])) { $page = $_POST['page']; }
    else { $page = 'accueil.html' ; }

    include 'head.php'; 
?>

<?php include $page ;?>

<?php include 'footer.html'; ?>