<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand"  onclick="gola(4)">Une société, disons... Gaz de france</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="navbar-brand" onclick="gola(1)">Articles</a>
          </li>
          <li class="nav-item">
            <span class="nav-link" onclick="gola(2)">Commandes</span>
          </li>
          <li class="nav-item">
            <span class="nav-link" onclick="gola(3)">Client</span>
          </li>
        </ul>
        </div>
    </nav>
    
    <?php
        function gola($a) {
            switch($a) {
                case 1:
                    $_POST['page'] = 'article.php';
                    echo ('<script type="text/javascript"> document.getElementById("footer").style.backgroundColor = "red"; </script>');
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
            }
        } 
    ?>
</header>