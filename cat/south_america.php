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
    <title>Wild Beer! Amérique du Sud</title>
  </head>

  <body class="bg-secondary">
    <!-- NAVBAR Thomas -->
    <header>
      <?php include('../header_cat.php') ?>
    </header>
    <div class="container-fluid bg-quentin">
      <div class="container"><br>

        <section id="descripCat" class="text-center">
          <h2 class="text-warning text-center khtext2">
            <!--LE NOM DE VOTRE CATEGORIE-->
            Les Bières d'Amérique du Sud
          </h2>
          <br>
          <!--LE TEXTE DESCRIPTIF DE VOTRE CATEGORIE-->
          <p class="text-justify qbtext">En Amérique du Sud aujourd’hui, la bière reste la boisson la plus populaire
            et la plus consommée dans une grande majorité de pays. Historiquement, on retrouve trace de boisson de mais fermenté mais
            c'est surtout au XVIe siècle que l'on retrouve trace des premières bières au manioc. Cette boisson est considérée comme sacrée par les peuples locaux.
            <br>
            Depuis 50 ans, les bières d'Amérique du Sud ont pu s'imposer dans le marché mondiale.
            Notament la société brésilienne AB-Inbev qui distibue la brahma qui est la cinquième bière la plus consommée au monde.
            <br>
            Le savoir faire européen dans le brassage de bière a migré avec les peuples colonisateurs et la plupart des grandes bières sont a l'origine créée par des Allemands, des Suisses ou des Belges.
            On retrouve donc des goûts de bières communs à l'Europe mais certaines spécificités sont très intéressantes a découvrir et vous en trouverez dans notre catalogue.
          </p>
        </section>
      </div>
      <div class="container">

        <section>

          <h3 class="text-warning text-center khtext2">Les produits top ventes</h3>
          <br>
          <div id="carousselTopVente" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <div class="card-deck">
                        <div class="card custom-card kev-card">
                          <div class="row">
                            <div class="col-12">
                              <img class="card-img-top kev-card2" src="../asset/img/quentin/skol.jpg" alt="Card image">
                            </div>
                            <div class="col-12">
                              <div class="card-body black-card d-flex flex-column justify-content-center bg-dark text-light">
                                <h4 class="card-title text2 text-center font-text kh-text3">La gamme Skoll</h4>
                                <div class="text text-center">
                                  <p class="card-text font-text">
                                    Un gage de qualité et d'efficaciter. Pensez a gouter la bière la plus populaire du Brésil.
                                  </p>
                                </div>
                                <div class="d-flex justify-content-around">
                                  <button type="button" name="button" class="btn btn-warning center-block mb-3 kev-card3"> Découvrez la gamme !</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card-deck">
                        <div class="card custom-card kev-card">
                          <div class="row">
                            <div class="col-12">
                              <img class="card-img-top kev-card2" src="../asset/img/quentin/brahma.jpg" alt="Card image">
                            </div>
                            <div class="col-12">
                              <div class="card-body black-card d-flex flex-column justify-content-center bg-dark text-light">
                                <h4 class="card-title text2 text-center font-text kh-text3">Brahma</h4>
                                <div class="text text-center">
                                  <p class="card-text font-text">
                                    Aussi connue que le corcovado, la brahma est surement la marque la plus reconnue dans tout le Brésil.
                                  </p>
                                </div>
                                <div class="d-flex justify-content-around">
                                  <button type="button" name="button" class="btn btn-warning center-block mb-3 kev-card3"> La gamme complète !</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
          </div>
        </section>
      </div>
      <div class="container">
        <section id="nosProduits">
          <h3 class="text-center text-warning khtext2">
            Notre Sélection :
          </h3>
          <div class="container">
            <div class="row d-flex justify-content-around">
          <?php
            $southAmericaBeer = array(
                array(
                  "nom" => "Factory Export",
                  "image" => "../asset/img/quentin/bresilFactoryExport.png",
                  "description" => "Une bière de type lager avec un mélange de malts et une combinaison de houblon frappant.",
                  "prix" => 2.50,
                  "noteGout" => 3,
                  "noteSoif" => 1.5,
                  "noteAmertume" => 2,
                  "pays" => "Brésil",
                  "tauxAlcool" => 5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 15.00,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Soleron Helles",
                  "image" => "../asset/img/quentin/bresilSolerun.png",
                  "description" => "Bière à basse fermentation, facile à boire! Goût malté modérés, arôme à base de plantes.",
                  "prix" => 1.80,
                  "noteGout" => 5,
                  "noteSoif" => 1.5,
                  "noteAmertume" => 2,
                  "pays" => "Brésil",
                  "tauxAlcool" => "5",
                  "fermentation" => "Basse",
                  "prixCaisse" => 11.00,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Tupiquim Dubbel",
                  "image" => "../asset/img/quentin/bresilTupiquimDubbel.png",
                  "description" => "Bière forte qui fait penser à la Dubbel Ale Belge. Plusieurs fois primés par des jurys brésiliens.",
                  "prix" => 2.50,
                  "noteGout" => 4,
                  "noteSoif" => 2,
                  "noteAmertume" => 1,
                  "pays" => "Brésil",
                  "tauxAlcool" => 6.1,
                  "fermentation" => "Basse",
                  "prixCaisse" => 14.50,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Murica",
                  "image" => "../asset/img/quentin/argentineMurica.png",
                  "description" => "Une bière blonde très douce et très facile a boire. A cosommer très fraiche un jour d'été et au bord d'une piscine.",
                  "prix" => 1.50,
                  "noteGout" => 2,
                  "noteSoif" => 1,
                  "noteAmertume" => 1.5,
                  "pays" => "Argentine",
                  "tauxAlcool" => 4.5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 8.50,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Patagonia",
                  "image" => "../asset/img/quentin/argentinePatagonia.png",
                  "description" => "Une Pilsner patagonienne avec du corps et bien équilibrée signée Cerveceria y Malteria Quilmes !",
                  "prix" => 2.00,
                  "noteGout" => 3.5,
                  "noteSoif" => 2,
                  "noteAmertume" => 0,
                  "pays" => "Brésil",
                  "tauxAlcool" => 3.5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 11.50,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Quilmes",
                  "image" => "../asset/img/quentin/argentineQuilmes.png",
                  "description" => "Une pils rafraîchissante ne manquera pas de vous rappeler l'exotisme de votre voyage en Amérique du Sud.",
                  "prix" => 1.85,
                  "noteGout" => 3,
                  "noteSoif" => 1.5,
                  "noteAmertume" => 0.5,
                  "pays" => "Argentine",
                  "tauxAlcool" => 5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 11.00,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Union Belgian Blond Ale",
                  "image" => "../asset/img/quentin/bresilUnion.png",
                  "description" => "Une bière forte et avec de la personalité qui rappel les bières Belges",
                  "prix" => 2.15,
                  "noteGout" => 2,
                  "noteSoif" => 0.5,
                  "noteAmertume" => 2,
                  "pays" => "Brésil",
                  "tauxAlcool" => 5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 11.00,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Imaculada Helles",
                  "image" => "../asset/img/quentin/bresilMaculada.png",
                  "description" => "Recette Allemande équilibrée entre le malt et le houblon. On retrouve la douceur et la fraicheur du malt.",
                  "prix" => 1.50,
                  "noteGout" => 2.5,
                  "noteSoif" => 2,
                  "noteAmertume" => 0.5,
                  "pays" => "Brésil",
                  "tauxAlcool" => 4.5,
                  "fermentation" => "Basse",
                  "prixCaisse" => 8.50,
                  "prixFut" => "NA"
                ),
                array(
                  "nom" => "Felsen Märzen",
                  "image" => "../asset/img/quentin/felsenMarzen.jpg",
                  "description" => "Une recette parfaite pour découvrir une bière noire avec des belles notes de café.",
                  "prix" => 2.25,
                  "noteGout" => 4,
                  "noteSoif" => 1.5,
                  "noteAmertume" => 1.5,
                  "pays" => "Brésil",
                  "tauxAlcool" => 5.5,
                  "fermentation" => "Haute",
                  "prixCaisse" => 13.50,
                  "prixFut" => "NA",
                )
            );


            for ($i = 0 ; $i < count($southAmericaBeer); $i++){

             echo('
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-1 py-2 ">
                <div class="card p-1">
                  <div class="row m-0">
                    <div class="col-sm-12  col-5 px-0 d-flex align-items-center">
                      <img class="card-img-top " data-toggle="modal" data-target="#'.str_replace(" ", "_",$southAmericaBeer[$i]["nom"]).'" src="'.$southAmericaBeer[$i]['image'].'" alt="Card image">
                    </div>
                    <div class="card-body  col-sm-12  col-7 bg-dark text-white">
                      <h4 class="card-title  text-center  ">'.$southAmericaBeer[$i]['nom'].'</h4>
                      <p class="card-text text-justify">'.$southAmericaBeer[$i]['description'].'</p>

                      <p class="text-success font-weight-bold text-center">'.$southAmericaBeer[$i]['prix'].' €</p>
                      <button type="button" name="button" class="btn btn-warning btn-block  p-1"> Ajouter au Panier !</button>
                    </div>
                  </div>
                </div>
              </div>
               <!-- DEBUT partie popup  -->
               <div id="'.str_replace(" ", "_",$southAmericaBeer[$i]["nom"]).'" class="modal fade" role="dialog">
                 <div class="modal-dialog modal-lg">
                   <div class="modal-content">
                     <div class="modal-header bg-dark text-light">
                       <div class="container-fluid">
                         <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                             <!-- TITRE DU POPUP  -->
                             <h4 class="modal-title">'.$southAmericaBeer[$i]['nom'].'</h4>
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
                             <img class="card-img-top tom-image" src="'.$southAmericaBeer[$i]['image'].'" alt="Card image">
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
                                         <td>'.$southAmericaBeer[$i]['noteGout'].'/5</td>
                                         <td>'.$southAmericaBeer[$i]['noteSoif'].'/2</td>
                                         <td>'.$southAmericaBeer[$i]['noteAmertume'].'/2</td>
                                       </tr>
                                     </table>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td class="font-weight-bold">Alcool/volume</td>
                                   <td>'.$southAmericaBeer[$i]['tauxAlcool'].'%</td>
                                 </tr>
                                 <tr>
                                   <td class="font-weight-bold">fermentation</td>
                                   <td>'.$southAmericaBeer[$i]['fermentation'].'</td>
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
                                 <td>'.$southAmericaBeer[$i]['prix'].' €</td>
                               </tr>
                               <tr>
                                 <td class="font-weight-bold">Caisse (x6)</td>
                                 <td>'.$southAmericaBeer[$i]['prixCaisse'].' €</td>
                               </tr>
                               <tr>
                                 <td class="font-weight-bold">Fut</td>
                                 <td>'.$southAmericaBeer[$i]['prixFut'].'</td>
                               </tr>
                             </table>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>');
             };
               ?>
             </div>
           </div>
         </div>
       </section>
    <!--FOOTER Noel -->
    <footer>

      <?php include('../footer_cat.php') ?>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
  </body>

</html>
