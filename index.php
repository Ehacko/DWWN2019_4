<?php include 'head.php'; ?>

<?php include 'script.php'; ?>

<?php include $page; ?>


    
    <?php
        function gola($a) {
            switch($a) {
                case 1:
                    echo 'ecth';
                    include 'article.php';
                    //$_POST['page'] = 'article.php';
                    //echo ('<script type="text/javascript"> document.getElementById("footer").style.backgroundColor = "red"; </script>');
                    break;
                case 2:
                    $_POST['page'] = 'Commandes.php';
                    echo ('<script type="text/javascript"> document.getElementById("footer").style.backgroundColor = "red"; </script>');
                    break;
                case 3:
                    $_POST['page'] = 'Client.php';
                    echo ('<script type="text/javascript"> document.getElementById("footer").style.backgroundColor = "red"; </script>');
                    break;
                case 4:
                    $_POST['page'] = 'accueil.php';
                    echo ('<script type="text/javascript"> document.getElementById("footer").style.backgroundColor = "red"; </script>');
                    break;
        } }
    ?>

<?php include 'footer.php'; ?>