<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo_afy.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">  
    <title>Afytech | Projets</title>
</head>
<body>
    <!-- Header -->
    <?php include '/includes/header.php'; ?>
    <!-- end Header -->

    <div id="projet">
        <section class="nprojet">
            <h1>ALISON</h1>
            <p class="paraprojet">
                ALISON (a) propose des cours en ligne gratuits. Considéré par certains (a) comme le premier MOOC 
                (ce que d’autres réfutent vigoureusement (a), un avis généralement partagé (a)), il compte de nombreux 
                utilisateurs dans les pays en développement.
            </p>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="nprojet">
            <h1>BRCK</h1>
            <p class="paraprojet">
                BRCK (a) a d’abord conçu des matériels et logiciels pour remédier à des problèmes de connectivité 
                spécifiques en Afrique. Il repose sur la plateforme iHub (a), à Nairobi, épicentre régional pour des 
                initiatives EdTech innovantes en Afrique de l’Est (un futur billet du blog EduTech détaillera 
                quelques-uns des projets fascinants liés aux technologies éducatives au Kenya). BRCK cible désormais 
                l’éducation (a).
            </p>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                </div>
            </div>
        </section>

        <section class="nprojet">
            <h1>EkStep</h1>
            <p class="paraprojet">
                Selon moi, au niveau mondial, c’est actuellement EkStep (a), une organisation philanthropique en Inde (a) 
                qui mène le projet à grande échelle le plus intéressant dans le domaine des technologies éducatives : 
                la mise en place de plateformes open source afin d’aider les pouvoirs publics à relever différents (a) défis (a).
            </p>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <video controls class="d-block w-100">
                        <source src="videos/ .mp4" type="video/mp4">
                        <source src="videos/ .ogg" type="video/ogg">
                        Votre navigateur ne supporte pas cette vidéo.
                    </video>
                </div>
            </div>
        </section>

        <section class="nprojet">
            <h1>Foundation for Learning Equality </h1>
            <p class="paraprojet">
                On connaît principalement Foundation for Learning Equality (FLE) (a) pour KAlite (a), une version hors
                 ligne de Khan Academy. Grâce à son expérience avec KAlite, FLE a imaginé l’application Kolibri, qui 
                 rend  essible une technologie éducative de qualité, sans connexion Internet, à des populations 
                 démunies..
            </p>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img  src="images/afytech_reseau.jpeg" alt="image1" class="d-block w-100">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- end Footer -->

    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>