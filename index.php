<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo-2.jpg">
    <title>Afytech | Accueil</title>
</head>
<body>
    <!-- Header -->
        <?php include '/includes/header.php'; ?>
    <!-- end Header -->

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/afytech_code.jpeg" width="780" min-height="170"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/afytech_camera.jpeg" width="780" min-height="170" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/afytech_reseau.jpeg" width="780" min-height="170" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- end Slider -->

    <!-- Contenu -->
    <div id="contenant">
        <div class="contenu">
            <div class="scontenu1"> 
                <p>
                    Que vous avez besoin d’une caméra de sécurité, nos conseillers sont la pour vous guider tout au long du
                processus. Protéger votre investissement dès aujourd’hui, que ça soit pour votre immeuble locatif ou votre
                 entreprise nous avons une solution adaptée à vos besoins. Nous utilisons des marques de grande qualité. Votre
                  installation sera effectuée avec le plus grand professionnalisme et le plus discrètement possible.
                </p> 
            </div>
            <div class="scontenu2"></div>
            <div class="scontenu3"></div>
            <div class="scontenu4">
                <p>
                    Ce n’est un secret pour personne que les réunions en visioconférence sont en plein essor, en grande partie
                 grâce à la pandémie de COVID-19. Mais les réunions en ligne avaient leurs avantages même avant la pandémie,
                  permettant de se connecter et de collaborer quand il était impossible de se réunir. Depuis quelques années, le travail
                   à distance a augmenté de plus de 100 %,ce qui exige des outils de communication virtuels.
                </p>
            </div>
        </div>
    </div>
    <!-- end Contenu -->

    <!-- Header -->
    <?php include("includes/footer.php"); ?>
    <!-- end Header -->

    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>