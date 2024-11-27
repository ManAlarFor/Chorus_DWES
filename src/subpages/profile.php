<?php 
    session_start(); // Inicializa la sesión
    require_once "../classes/Usuario.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - User Profile</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="shortcut icon" href="../assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="../js/dropdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!-- NAV BAR -->

    <?php require_once "./navBar.php" ?>

    <!-- MAIN PAGE -->

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-3 bg-purple border-purple position-fixed pt-5 pb-5"> 

                <div class="row mt-5 mb-3">

                    <div class="col"></div>
                    <div class="col">

                        <img class="rounded-circle m-5 w-max" src="<?= ($usuario->perfil)?$usuario->perfil:"/assets/img/defaultProfile.jpg" ?>" alt="">

                    </div>
                    <div class="col"></div>

                </div>

                <div class="row mb-5">

                    <h3><?= $usuario->nombre ?> <?= $usuario->apellido ?></h3>

                </div>

                <div class="row mb-5">

                    <div class="col"></div>
                    <div class="col p-4">
                        <button class="btn btn-warning">Editar Perfil</button>
                    </div>
                    <div class="col"></div>

                </div>

            </div>

            <div class="col-9"></div>
        </div>
    </div>

</body>
</html>