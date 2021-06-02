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
    <title>Afytech | Accueil</title>
</head>
<body>
  <!-- Header -->
      <?php include '/includes/header.php'; ?>
  <!-- end Header -->

  <!-- Slider -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/afytech_code.jpeg" class="d-block w-100" alt="code" style="
    opacity: 0.8;
">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slideInLeft">La Digitalisation des processus,</h1>
        <p class="slideInRight">Un atout majeur pour une administration moderne et éfficace.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/afytech_camera.jpeg" class="d-block w-100" alt="camera" style="
    opacity: 0.8;
">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slideInLeft" >La Sécurité électronique,</h1>
          <p class="slideInRight" >La garantie d'une protection fiable et aux normes.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/afytech_reseau.jpeg" class="d-block w-100" alt="cable" style="
    opacity: 0.8;
">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slideInLeft">L'infrastructure informatique,</h1>
          <p class="slideInRight">Une solution dorsale pour la performance de votre entreprise.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
  <!-- end Slider -->

  <!-- Contenu -->
    <div id="contenant">
        <div class="contenu">
            <div class="scontenu1"> 
                <p>
                Vous souhaitez améliorer la production de votre entreprise, avoir des statistiques fiable, le secret tient 
                en trois mots : digitalisation des processus. C’est la clé pour optimiser le fonctionnement de votre 
                entreprise tout en adoptant une gestion plus agile permettant aux collaborateurs d’être mieux organisés. 
                Pour digitaliser, il ne suffit pas de créer un site web et d’envoyer des newsletters ! Nous parlons ici de 
                transformer en profondeur vos processus métiers, de travailler à partir d’un workflow bien défini, de mettre
                 en place une organisation plus souple et plus collaborative, et d’avoir une vision globale de vos processus.
                  Afytech accompagnera dans ce processus du début à la fin avec son équipe de jeune développeurs dynamique 
                  et très talentueux.
                </p> 
            </div>
            <div class="scontenu2"></div>
            <div class="scontenu3"></div>
            <div class="scontenu4">
                <p>
                Quel que soit votre besoin en sécurité électronique (contrôle d’accès, vidéo surveillance, détection 
                d’intrusion, détection et d’extinction automatique d’incendie, biométrie, alarme), en visioconférence, 
                nous allons vous accompagner avec des équipements de dernières génération. Protéger votre investissement 
                dès aujourd’hui, que ça soit pour votre immeuble locatif ou votre entreprise nous avons une solution 
                adaptée à vos besoins. Nous utilisons des marques de grande qualité. Votre installation sera effectuée 
                avec le plus grand professionnalisme et le plus discrètement possible.
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