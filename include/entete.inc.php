<?php
  // Permet de savoir s'il y a une session. 
  // C'est-à-dire si un utilisateur s'est connecté à votre site 
  if(!isset($_SESSION)){
    session_start(); 
  }
  // Fichier PHP contenant la connexion à votre BDD
  //include('bd/connexionDB.php'); 
?>

<head>
       <meta charset="utf-8">
       <title>PhotoForYou</title>
            <!-- CSS -->
            <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
            <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

            <!-- JS, Popper.js, et jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </head>
    
    <body>
                            <!--Barre de Navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../PhotoForYou2019/index.php">PhotoForYou</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Photos </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Acheter</a>
                          <a class="dropdown-item" href="#">Vendre</a>
                          <a class="dropdown-item" href="#">Les plus populaires</a>
                          <a class="dropdown-item" href="#">Les nouveautés</a>
                        </div>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../PhotoForYou2019/index.php#tarif"> Tarifs</a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <?php if(!isset($_SESSION["auth"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../PhotoForYou2019/inscription.php">S'inscrire</a>
                      </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../PhotoForYou2019/connexion.php">S'identifier</a>
                      </li>
                  <?php }else{ ?>
                    <li class="nav-item"><p class="nav-link">Bonjour <?= $_SESSION["auth"]->pseudo; //sert à faire un echo plus vite ?></p></li>
                    <?php if(intval($_SESSION["auth"]->role) == 1){ ?>
                      <!-- C'est un photographe -->
                      <li class="nav-item">
                        <a class="nav-link" href="espace-photographe.php">Mon espace</a>
                      </li>
                    <?php }else{ ?>
                    <!-- C'est un client -->
                      <li class="nav-item">
                        <a class="nav-link" href="espace-client.php">Mon espace</a>
                      </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                    </li>
                  <?php } ?>
                </ul>
            </div>
        </nav>
    </body>
</html>