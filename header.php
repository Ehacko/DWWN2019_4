<header>

    <form method="post" id="LinkForm"><input id="LinkInput" type="hidden" name="page"></form>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand"  onclick="gola('accueil.php')">Une société, disons... Gaz de france</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="navbar-brand" href="#" onclick="gola('article.php')">Articles</a>
          </li>
          <li class="nav-item">
            <span class="nav-link" onclick="gola('commandes.php')">Commandes</span>
          </li>
          <li class="nav-item">
            <span class="nav-link" onclick="gola('client.php')">Client</span>
          </li>
          <li class="nav-item">
            <span class="nav-link" onclick="document.getElementById('logout').submit();">Déconnection</span>
          </li>
        </ul>
        </div>
    </nav> 
</header>


<form action="" id="logout" method="post">
   <input type="number" name="log" value="1" style="display: none">
</form>