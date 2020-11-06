<html>
    <head>
       <meta charset="utf-8">
       <title>PhotoForYou</title>
            <!-- CSS -->
              <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
              <link rel="stylesheet" href="css/style.css" type="text/css" />

            <!-- JS, Popper.js, et jQuery -->
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <body>
            <?php // Barre de nav
                include ("include/entete.inc.php");
            ?>
                <!-- header -->
            <header>
                <div class="container text-center">
                    <img src="image/logo.png">
                </br>
                    <h1>PhotoForYou</h1>
                    <h3>Des pros au service des professionnels de la communication</h3>
                </div>
            </header>
        </br>
                 <!-- Carrousel -->
            <div class="container text-center">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="image/carrousel1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/carrousel2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/carrousel3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Suivant</span>
                </a>
              </div>
              <div class="jumbotron jumbotron-fluid">
                <div class="textJumbotron">
                  <p class="lead">Moins de temps à chercher. Plus de résultats. Découvrez les images qui vous aideront à vous démarquer.</p>
                  <p class="lead">
                    <a class="btn btn-primary btn-lg" href="../PhotoForYou2019/inscription.php" role="button">Incrivez-vous !</a>
                  </p>
                </div>
            </div>

                <!-- Cartes -->
                <div class="row">

<div class="col mt-4">

      <div class="card-deck" style="color: white;">
      
    <div class="card bg-warning border-dark">
      <img class="card-img-top" src="image/carte1.jpg" alt="paysages"/>
      <div class="card-img-overlay">
        <h5 class="card-title">Paysages</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title">Les paysages</h5>
        <p class="card-text">Une collection de photos extraordinaires réalisées par des photographes professionnels. Redecouvrez la planète terre ! </p>
        <button type="button" class="btn btn-primary">Je veux voir...</button>
      </div>
      <div class="card-footer">
        <small>Dernière mise à jour 1 Septembre 2019</small>
      </div>
          </div>
          
    <div class="card bg-success border-dark">
      <img class="card-img-top" src="image/carte2.jpg" alt="Elit Amet">
      <div class="card-img-overlay">
        <h5 class="card-title">Portraits</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title">Les portraits</h5>
        <p class="card-text">Toutes les expressions, tous les visages du sourire aux larmes. Vous trouverez le portrait qu'il vous faut pour vos publications.</p>
        <button type="button" class="btn btn-primary">Je veux voir...</button>
      </div>
      <div class="card-footer">
        <small>Dernière mise à jour 23 Aout 2019</small>
      </div>
          </div>
          
    <div class="card bg-danger border-dark">
      <img class="card-img-top" src="image/carte3.jpg" alt="Sollicitudin Ornare Malesuada">
      <div class="card-img-overlay">
        <h5 class="card-title">Evènements</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title">Les évenements</h5>
        <p class="card-text">Que ce soit les mariages, férias, soirées DJ, ou d'autres évènements. Vous trouverez la photo pour mettre en valeur votre évènement.</p>
        <button type="button" class="btn btn-primary">Je veux voir...</button>
      </div>
      <div class="card-footer">
        <small>Dernière mise à jour 20 Juillet 2019</small>
      </div>
          </div>
          
      </div>
      
  </div>
  
</div>
</br>

                <!-- Les tarifs -->
            <section class="tarif" id="tarif">
            <div class="tarif">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Essaie</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">0 € <small class="text-muted">/ mois</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>5 photos offertes</li>
                          <li>Usage privé</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Faire un essai</button>
                      </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Formule Découverte</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">9 € <small class="text-muted">/ mois</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>20 crédits</li>
                          <li>20 % de remise sur les photos</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Acheter</button>
                      </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Formule Pro</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">19 € <small class="text-muted">/ mois</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>60 crédits</li>
                          <li>30 % de remise sur les photos</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Acheter</button>
                      </div>
                    </div>
                  </div>
                </section>
                
    <?php // Footer
        include ("include/footer.inc.php");
    ?>

    </body>
</html>
