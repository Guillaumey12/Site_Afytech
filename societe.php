<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/logo_afy.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">        <title>Afytech | Société</title>
    </head>
<body>
    <!-- Header -->
    <?php include '/includes/header.php'; ?>
    <!-- end Header -->

    <div class="title_image1">
       <img src="images/Afytech_societe_image.jpeg" alt="image societe" class="fadeInDown">
    </div>

    <div class="container " id="section_un">
        <p>
            AFYTECH est une jeune entreprise spécialisée dans les technologies de l’information et la transformation digitale. Nous sommes situés à Aibatin C/ 1666, 041 BP 215 Cotonou BENIN et nous vous accompagnerons dans tous vos projets technologiques.
        </p>

        <p>
            Créé par un jeune dynamique ayant prêt de 10 ans d’expérience dans la gestion de projets, Etude, Conception et développement de solution en technologie de l’information, Mise en œuvre de procédures interne, Analyse des besoins, Architecture technique, sécurité des systèmes d’information, configuration installation, administration de différents Systèmes et Gestion de centre de traitement de données. AFYTECH est composée de Jeunes Ingénieurs et Techniciens Supérieurs qui ont fait de la technologie de l'information et de la communication leur métier.
            Nous travaillons avec de grand partenaires (MICROSOFT, AITEK, ATOS, DELL, AVAYA,	 LOGITECH…) internationaux afin d’atteindre les objectifs. 
        </p>

        <p>
        Nous sommes en mesure de fournir un service de soutien rapide et robuste à vos besoins quelle que soit la région. Non seulement nous sommes dotés de personnel technique très professionnel, mais également équipé des installations et des outils opérationnels de dernière génération.
        </p>
    </div>

    <!-- LES 6 CARTES -->
    <div class="container" id="section_deux">
        <div class= "container titre"><h2>Nous évoluons dans plusieurs domaines à savoir:</h2></div> 
        <div id="card">
            <div class="row card_lign" id="card_complet">
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#developpement1"><img src="images/afytech Image developpement web.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-text">Développement d'application de grande envergure.</h6>
                        </div>
                        </a> 
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#camera1"><img src="images/afytech_caméra_de_sueveillance.jpg" class="card-img-top" alt="afytech_caméra_de_sueveillance">
                        <div class="card-body">
                          <h6 class="card-text">Mise en place de système de surveillance et sécurité.</h6>
                        </div>
                        </a> 
                      </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#produit1"><img src="images/afytech_distribution_de_prodiuts .jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-text">Distribution des Produits</h6>
                        </div>
                        </a> 
                      </div>
                </div>
  
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#maintenance1"><img src="images/afytech  Image Contrat de maintenance.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-text">Contrat de maintenance informatique.</h6>
                        </div>
                        </a> 
                      </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#reseau1"><img src="images/afytech  Image Réseau informatique.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-text">Mise en place de réseaux informatique.</h6>
                        </div>
                        </a> 
                      </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <a href="service.php#conference1"><img src="images/afytech  Image Visioconférence.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-text">Mise en place de système de conférence audio et visioconférencce.</h6>
                        </div>
                        </a> 
                      </div>
                </div>
                
           </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- end Footer -->

    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>