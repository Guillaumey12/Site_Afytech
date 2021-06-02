<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo_afy.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
    <title>Afytech | Boutique</title>
</head>
<body>
    <!-- Header -->
        <?php include '/includes/header.php'; ?>
    <!-- end Header -->

    <div class="container" id="boutiques">
        <div class="title-boutique" col-lg-8>
            <h2> <marquee behavior="" direction="left">Soyez les bienvenus dans la boutique de Afytech</marquee> </h2>
        </div>

        
         <!-- LES RECHERCHES -->
        <div class="rechercheproduit">
            <form action="#" id="btn-recherche" >
                <input type="text" placeholder="Rechercher les produits...">    
                <i class="fa fa-search" aria-hidden="true" type="submit"></i>
            </form>
        </div>

        <!-- LES CATEGORIES -->
        <section id="Categorie">
            <div class="container">
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Réseau</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Réseau</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Sécurité</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Visio conférence</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Réseau</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Réseau</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Sécurité</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <a href="#">Visio conférence</a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                    </div>
                </div>
            </div>
        </section>
       

        <div class="row">

            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="panneau_brassage.php">
                                <img src="images/produit_afytech_panneau_de_brassage.jpg" class="card-img" alt="afytech_panneau de brassage">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <a href="panneau_brassage.php"><h5 class="card-title">Panneau de brassage utp cat6 à 24 ports</h5></a>
                                <a href="panneau_brassage.php"><p class="card-text">Les connections de données à grande vitessesont ésentielles pour suivre le rythme des affaires aujourd'hui. Enyco en a tenu compte lors du développemen...</p></a>
                                <p class="card-text">
                                    <small class="text-muted">PRIX: 10.000 F CFA</small>
                                    <div class="container" id="boutache">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Acheter
                                        </button>

                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Nous ne pouvons pas accepter les paiements en ligne </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p>Veillez nous contacter sur ces numéros: </p>
                                                    <p>(+229) 91 79 66 66</p>
                                                    <p>(+229) 21 60 30 04</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="sonnerie_govee.php"><img src="images/afyech_sonneriz_sans_fil_P.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <a href="sonnerie_govee.php"><h5 class="card-title">Sonette sans fil de GOVEE</h5></a>
                                <a href="sonnerie_govee.php"><p class="card-text">Sonnette Sans Fil IP66 avec 1 Transmetteur et 1 Récepteur Enfichable, Carillon de Porte d'une Portée de 300M, 36 Mélodies au 5 Niveaux de Volume pour Maison, Magasin, Boutique....</p></a>
                                <p class="card-text">
                                    <small class="text-muted">PRIX: 10.000 F CFA</small>
                                    <div class="container" id="boutache">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Acheter
                                        </button>

                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Nous ne pouvons pas accepter les paiements en ligne </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p>Veillez nous contacter sur ces numéros: </p>
                                                    <p>(+229) 91 79 66 66</p>
                                                    <p>(+229) 21 60 30 04</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="sonnerie_tecknet.php"><img src="images/afytech_sonnerie_tecknet_P.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <a href="sonnerie_tecknet.php"><h5 class="card-title">Sonnette sans Fil de TECKNET</h5></a>
                                <a href="sonnerie_tecknet.php"><p class="card-text">Sonnette sans Fil, IP44 Sonnette sans Fil Exterieur Etanche à 300 Mètres de Portée, Sonnette de Porte Kit de Carillon avec LED Flash et 38 .</p></a>
                                <p class="card-text">
                                    <small class="text-muted">PRIX: 10.000 F CFA</small>
                                    <div class="container" id="boutache">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Acheter
                                        </button>

                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Nous ne pouvons pas accepter les paiements en ligne </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p>Veillez nous contacter sur ces numéros: </p>
                                                    <p>(+229) 91 79 66 66</p>
                                                    <p>(+229) 21 60 30 04</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="visio.php"><img src="images/afytech_visio_P.png" class="card-img" alt="Visio"></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <a href="visio.php"><h5 class="card-title">IX CU360 (Visio)</h5></a>
                                <a href="visio.php"><p class="card-text">Solution tout-en-un pour petites salles de réunion et huddle rooms.</p></a>
                                <p class="card-text">
                                    <small class="text-muted">PRIX: 10.000 F CFA</small>
                                    <div class="container" id="boutache">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Acheter
                                        </button>

                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Nous ne pouvons pas accepter les paiements en ligne </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p>Veillez nous contacter sur ces numéros: </p>
                                                    <p>(+229) 91 79 66 66</p>
                                                    <p>(+229) 21 60 30 04</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- end Footer -->

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="boutiques.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>