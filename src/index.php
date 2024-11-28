<?php 
    session_start(); // Inicializa la sesión
    require_once "./classes/Usuario.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chorus - Landing Page</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="shortcut icon" href="./assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <!-- NAV BAR -->

    <?php require_once "./subpages/navBar.php" ?>

    <!-- HERO SECTION -->

    <section id="heroSection">

        <h1>CHORUS</h1>

    </section>

    <!-- CARD SECTION -->

    <div class="container">
        <div class="row">

            <div class="col">
                <!-- card -->
                <div class="card">
                    <div class="detail">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="./assets/img/review1.png" alt="Picture"></div>
                        <h3>James Venture, 35</h3>
                        <h4>Guitarrista</h4>
                        <p>Llevaba tiempo pensando en unirme a una banda musical, y con Chorus encontré finalmente artistas con los que crear un grupo compenetrado.</p>
                    </div>
                </div>
            </div>


                <!-- /card -->
            <div class="col">
                <!-- main -->
                <div class="card">
                    <div class="detail">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="./assets/img/review2.png" alt="Picture"></div>
                        <h3>George Hammond, 46</h3>
                        <h4>Promotor</h4>
                        <p>El acercamiento que Chorus brinda entre la empresa y el artista facilita la producción y colaboración mucho, creando así un vinculo entre estas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
