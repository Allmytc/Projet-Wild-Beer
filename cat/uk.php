<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Wild Beer! Grande Bretagne</title>
  </head>
  <body class="bg-secondary jm-cat">
    <!-- NAVBAR Thomas -->
    <header>
      <?php include('../header_cat.php');?>
    </header>
    
    <div class="container text-dark ">
      <h2 class=" text-center"><!--LE NOM DE VOTRE CATEGORIE-->Les Bières anglo saxonnes</h2>
      <h5 class="text-center py-3"><!--LE TEXTE DESCRIPTIF DE VOTRE CATEGORIE-->La bière britannique a une tradition fort ancienne et présente un vaste échantillon de types authentiques: bières amères, tièdes et sombres exportées dans le monde entier  que ce soit la porter, le stout ou la pale ale.</h5>
      
      <section class="container d-none d-md-block mb-3">
        <div id="carousselTopVente" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card w-100" style="width: 18rem;">
                <div class="card-img">
                  <img src="../asset/img/jm/beers/kilkennyTop.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Kilkenny</h5>
                  <p class="card-text text-center">Servie dans la plupart des pubs irlandais, la Kilkenny saura vous surprendre avec son goût légèrement amer et acidulé</p>
                  <p class="card-text text-success font-weight-bold text-center">3.40€ </p>
                  <a href="#" class="btn btn-warning center-block mb-3 kev-card3">Ajouter au panier!</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card w-100" style="width: 18rem;">
                <div class="card-img">
                  <img src="../asset/img/jm/beers/BrewdogTop.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Brew Dog</h5>
                  <p class="card-text text-center">Selon la rumeur, la Jack Hammer est une bière tellement houblonnée que l'on y retrouve plus d'amertume que le palais humain ne peux  détecter.</p>
                  <p class="card-text text-success font-weight-bold text-center">3.40 € </p>
                  <a href="#" class="btn btn-warning center-block mb-3 kev-card3">Ajouter au panier!</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card w-100" style="width: 18rem;">
                <div class="card-img">
                  <img src="../asset/img/jm/beers/guinessTop.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Guiness</h5>
                  <p class="card-text text-center">Une bière premium thailandaise empreinte d’exotisme et d’élégance.</p>
                  <p class="card-text text-success font-weight-bold text-center">3.10 € </p>
                  <a href="#" class="btn btn-warning center-block mb-3 kev-card3">Ajouter au panier!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousselTopVente" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousselTopVente" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </section>
      <section id="nosProduits" class="pb-3">
        <div class="row d-flex align-items-stretch">
          <!--card start-->
          <?php include('ukData.php');
          foreach ($beers as $beer) { ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2">
            <div class="card p-1">
              <div class="row m-0">
                <div class="col-sm-12  col-5 px-0 d-flex align-items-center">
                  <img class="card-img-top " data-toggle="modal" data-target=<?="#".$beer['title'] ?> src="<?="../asset/img/jm/beers/".$beer['img']?>" alt="Card image">
                </div>
                <div class="card-body  col-sm-12  col-7 bg-dark text-white">
                  <h4 class="card-title  text-center  "><?=ucfirst($beer['title']) ?></h4>
                  <p class="card-text text-justify"><?=$beer['description'] ?></p>
                  
                  <p class="text-success font-weight-bold text-center"><?=$beer['bottlePrice'] ?></p>
                  <button type="button" name="button" class="btn btn-warning btn-block  p-1"> Ajouter au Panier !</button>
                </div>
              </div>
            </div>
          </div>
          <!-- DEBUT partie popup  -->
          <div id=<?=$beer['title'] ?> class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <!-- TITRE DU POPUP  -->
                        <h4 class="modal-title"><?=ucfirst($beer['title']) ?></h4>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <!--  BOUTON CROIX FERMETURE -->
                        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                  <!-- CORPS DU POP UP  -->
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <!--  IMAGE DANS LE POPUP -->
                        <img class="card-img-top" src=<?="../asset/img/jm/beers/".$beer['img'] ?> alt="Card image">
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="row">
                          <table class="table table-borderless table-responsive">
                            <tr>
                              <td class="align-middle font-weight-bold">Note</td>
                              <td>
                                <table class="table table-bordered">
                                  <!-- TABLEAU GOUT/SOIF  -->
                                  <tr>
                                    <td>Gout</td>
                                    <td>Soif</td>
                                    <td>Amertume</td>
                                  </tr>
                                  <tr>
                                    <td>2/5</td>
                                    <td>1.5/2</td>
                                    <td>0/2</td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold">Alcool/volume</td>
                              <td>3.8%</td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold">Fermentation</td>
                              <td>Basse</td>
                            </tr>
                          </table>
                        </div>
                        <div class="row">
                          <!-- BOUTON RESEAU SOCIAUX  -->
                          <button class="btn"><i class="fa fa-twitter"></i></button>
                          <button class="btn"><i class="fa fa-facebook"></i></button>
                          <button class="btn"><i class="fa fa-google-plus"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <br><br>
                        <table class="table">
                          <!--TABLEAU PRIX   -->
                          <tr>
                            <td class="font-weight-bold">Unité</td>
                            <td>7€</td>
                          </tr>
                          <tr>
                            <td class="font-weight-bold">Caisse (x6)</td>
                            <td>30€</td>
                          </tr>
                          <tr>
                            <td class="font-weight-bold">Fut</td>
                            <td>100€</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--modal end-->
          <?php
          } ?>
        </div>
      </section>
    </div>
    
    <footer>
      <?php include('../footer_cat.php');?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
  </body>
</html>