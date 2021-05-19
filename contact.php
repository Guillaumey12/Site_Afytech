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
    <title>Afytech | Contacts</title>
</head>
<body>
    <!-- Header -->
    <?php include '/includes/header.php'; ?>
    <!-- end Header -->

    <div id="contact">
        <div id="hautcontact">
            <h1>Nous contacter</h1>
            <p>Une question ou une remarque? Ecrivez-nous juste un message !</p>
        </div>
        <div id="bascontact">
            <section class="cgauche">
                <h3>Information de Contact</h3>
                <p>Remplissez ce formulaire et notre équipe vous fera
                    un retour dans les 24 heures qui vont suivre</p>
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+22921603004">Tél: (+229) 21 60 30 04</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:contact@afyetch.com">Email: contact@afyetch.com</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.248274083677!2d2.3727584140936093!3d6.361905026787471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023576a4be277c1%3A0xbb2fcd57038cdc80!2sAFYTECH!5e0!3m2!1sfr!2sbj!4v1621411970816!5m2!1sfr!2sbj"> Aibatin C/ 1666, 041 BP 215 Cotonou BENIN </a>
                    </li>
                </ul>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.248274083677!2d2.3727584140936093!3d6.361905026787471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023576a4be277c1%3A0xbb2fcd57038cdc80!2sAFYTECH!5e0!3m2!1sfr!2sbj!4v1621411970816!5m2!1sfr!2sbj" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <section class="cdroite">
                <form action="#">
                   <div class="formulaire">
                        <label for="name">Name</label>
                        <input type="text" id="name">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                        <label for="telephone">Téléphone</label>
                        <input type="number" id="telephone">
                        <label for="message">Message</label>
                        <textarea name="message" id="message"></textarea>
                   </div>
                   <input type="submit" class="button" value="Envoyez">
                </form>
            </section>
        </div>
    </div>

    <!-- Header -->
    <?php include("includes/footer.php"); ?>
    <!-- end Header -->

    <script type="text/javascript" src="script.js"></script>
</body>
</html>