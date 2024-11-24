<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chorus - Landing Page</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <!-- NAV BAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-purpGrad border-purple">

        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                            <i class="bi bi-search"></i>
                        </a>

                    </li>

                    <li class="profile-pic">
                        <a class="nav-link" href="#"><img src="./assets/img/chorusIcon.png" alt=""></a>
                    </li>

                </ul>


                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-pic">
                                <img id="perfil" class="img-fluid rounded-circle border-purple" src="./assets/img/defaultProfile.jpg" alt="Default Profile">
                            </div>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->

    <section id="heroSection">

        <h1>CHORUS</h1>

    </section>

    <!-- CARD SECTION -->

    <div class="container">
        <div class="row">

            <div class="col">
                    <!-- main -->
                <section class="main">
                    <!-- card -->
                    <div class="card">
                        <div class="detail">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="./assets/img/review1.png" alt="Picture"></div>
                        <h3>James Venture, 35</h3>
                        <h4>Guitarrista</h4>
                        <p>Llevaba tiempo pensando en unirme a una banda musical, gracias a Chorus encontré finalmente un grupo de artistas con los que crear un grupo compenetrado con el mismo enfoque de lo que queremos lograr.</p>

                    </div>
                <!-- /card -->
                </section>
            </div>
            <div class="col">
                    <!-- main -->
                <section class="main">
                    <!-- card -->
                    <div class="card">
                        <div class="detail">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="./assets/img/review2.png" alt="Picture"></div>
                        <h3>George Hammond, 46</h3>
                        <h4>Promotor</h4>
                        <p>El acercamiento que Chorus brinda entre la empresa y el artista facilita la producción y colaboración mucho, creando así un vinculo entre estas.</p>

                    </div>
                <!-- /card -->
                </section>
            </div>
        </div>
    </div>

</body>
</html>