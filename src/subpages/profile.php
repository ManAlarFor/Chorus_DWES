<?php 
    session_start(); // Inicializa la sesión
    require_once "../classes/Usuario.php" ;

    $usuario = unserialize($_SESSION["_usuario"]) ;

    $publicaciones = [] ;

    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    $sql = "SELECT IdPublic, TituloPublic, TextoPublic, ImagenPublic FROM portfolio
            WHERE IdUsu = '{$usuario->id}'" ;

        $datos = $sqli->query($sql) ;

        if ($datos->num_rows > 0):

            for($i = 0 ; $i < $datos->num_rows ; $i++):

                $publ = $datos->fetch_assoc();

                array_push($publicaciones, $publ) ;

            endfor ;

        endif


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!-- NAV BAR -->

    <?php require_once "./navBar.php" ?>

    <!-- MAIN PAGE -->

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-3 bg-purple border-purple altura sticky pt-5 pb-5"> 

                <div class="row mt-2 mb-3">

                    <div class="col"></div>
                    <div class="col">

                        <img class="rounded-circle m-5 w-max" src="<?= ($usuario->perfil)?$usuario->perfil:"/assets/img/defaultProfile.jpg" ?>" alt="">

                    </div>
                    <div class="col"></div>

                </div>

                <div class="row mb-4">

                    <h3><?= $usuario->nombre ?> <?= $usuario->apellido ?></h3>
                    <h4><?= $usuario->edad ?></h4>
                    <?php 

                        if(!empty($usuario->funcion)):

                            for($i = 0 ; (empty($usuario->funcion)) | $i < count($usuario->funcion); $i++): 

                    ?>

                        <h4><?= $usuario->funcion[$i] ?></h4>

                    <?php 
                            endfor ; 

                        endif ;
                    ?>

                </div>

                <div class="row mb-5">

                    <div class="col"></div>
                    <div class="col p-4">
                        <button class="btn btn-warning">Editar Perfil</button>
                    </div>
                    <div class="col"></div>

                </div>

            </div>

            <div class="col-9">

                <?php 

                    if($usuario->descripcion):

                ?>

                    <div class="row mt-4">
                        <h1>Descripción</h1>

                        <div class="col-2"></div>
                        <div class="col-8">
                            <!-- main -->
                            <div class="card bg-purple">
                                    <p class="m-4"><?= $usuario->descripcion ?></p>
                            </div>
                        </div>
                        <div class="col-2"></div>

                </div>

                <?php 

                    endif;

                ?>

                <?php 

                    if(!empty($publicaciones)):

                ?>

                    <h1 class="mt-5">Publicaciones</h1>


                <?php

                        for($i = 0 ; $i < count($publicaciones) ; $i++):

                ?>

                    <div class="row mt-4">
                        
                        <div class="col-2"></div>
                        <div class="col-8">
                            <!-- main -->
                            <div class="card bg-purple">
                                <div class="row">
                                    <h4 class="pt-4"><?= $publicaciones[$i]["TituloPublic"] ?></h4>
                                </div>

                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                    <p class="m-4"><?= $publicaciones[$i]["TextoPublic"] ?></p>
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                                <?php if($publicaciones[$i]["ImagenPublic"]): ?>

                                    <div class="row pb-3">
                                        <div class="col"></div>
                                        <div class="col">
                                            <img src="<?= $publicaciones[$i]["ImagenPublic"] ?>" alt="">
                                        </div>
                                        <div class="col"></div>
                                    </div>

                                <?php endif ; ?>
                            </div>
                        </div>
                        <div class="col-2"></div>

                </div>

                <?php 

                        endfor ;

                    endif;

                ?>


            </div>
        </div>
    </div>

</body>
</html>