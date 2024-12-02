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

    if(isset($_POST["id"])):

        $sql = "SELECT NombreUsu, ApellidoUsu, CorreoUsu, PerfilUsu, EdadUsu, Descripcion FROM Usuario 
                WHERE IdUsu = '{$_POST["id"]}'" ;

        $perfil = $sqli->query($sql) ;

        $perfil = $perfil->fetch_assoc();

        $sql = "SELECT IdPublic, TituloPublic, TextoPublic, ImagenPublic FROM portfolio
                WHERE IdUsu = '{$_POST["id"]}'" ;

        $datos = $sqli->query($sql) ;

        if ($datos->num_rows > 0):

            $publ = $datos->fetch_all(MYSQLI_ASSOC);

            array_push($publicaciones, $publ) ;

        endif ;

        $sql = "SELECT IdFun FROM usuario_funcion 
        WHERE IdUsu = '{$_POST["id"]}';" ;     

        $result = $sqli->query($sql);

        if ($result && $result->num_rows > 0) {

            $result = $result->fetch_all(MYSQLI_NUM);
            $idFun = $result;

            $funciones = [] ;

            for($i = 0 ; $i < count($idFun) ; $i++):

                $sql = "SELECT NombreFuncion FROM Funcion 
                        WHERE IdFuncion = '{$idFun[$i][0]}';" ;  


                $result = $sqli->query($sql);
                $result = $result->fetch_assoc();

                array_push($funciones, $result['NombreFuncion']) ;

            endfor ;

        }

    endif;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Perfil de <?= $perfil["NombreUsu"] ?> <?= $perfil["ApellidoUsu"] ?></title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!-- NAV BAR -->

    <?php require_once "./navBar.php" ?>

    <!-- MAIN PAGE -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-purple border-purple altura sticky pt-5 pb-5"> 

                <div class="row mt-2 mb-3">

                    <div class="col"></div>
                    <div class="col">

                        <img class="rounded-circle m-5 w-max text-center" src="<?= ($perfil["PerfilUsu"])?$perfil["PerfilUsu"]:"/assets/img/defaultProfile.jpg" ?>" alt="">

                    </div>
                    <div class="col"></div>

                </div>

                <div class="row mb-4 text-center">

                    <div class="row">
                        <h3><?= $perfil["NombreUsu"] ?> <?= $perfil["ApellidoUsu"] ?></h3>
                    </div>
                    <div class="row">
                        <h4><?= $perfil["EdadUsu"] ?></h4>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <?php 

                                if(!empty($funciones) && 2 < count($funciones)):

                            ?>

                                <label for="funciones">Ver funciones</label>

                                <select id="funciones" name="funciones">

                                <option disabled selected>-----------------</option>

                                <?php 

                                        for($i = 0 ; (empty($funciones)) | $i < count($funciones); $i++): 

                                ?>

                                        <option disabled><?= $funciones[$i] ?></option>

                                <?php 
                                        endfor ; 
                                ?>

                                </select>

                            <?php

                                elseif(!empty($funciones) && 2 >= count($funciones)):

                                    for($i = 0 ; (empty($funciones)) | $i < count($funciones); $i++): 
                            ?>

                                        <h4><?=$funciones[$i]?></h4>

                            <?php
                                    endfor ; 
                                endif ;
                            ?>

                        </div>
                        <div class="col"></div>
                    </div>

                </div>

            </div>

            <div class="col-9">

                <?php 

                    if($perfil["Descripcion"]):

                ?>

                    <div class="row mt-4 text-center">
                        <h1>Descripción</h1>

                        <div class="col-2"></div>
                        <div class="col-8">
                            <!-- main -->
                            <div class="card bg-purple">
                                    <p class="m-4 text-center"><?= $perfil["Descripcion"] ?></p>
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

                    <h1 class="mt-5 text-center">Publicaciones</h1>


                <?php

                        for($i = 0 ; $i < count($publicaciones) ; $i++):

                ?>

                    <div class="row mt-4">
                        
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card bg-purple">
                                <div class="row">
                                    <div class="col-1"></div>
                                    <div class="mt-5 col-6">
                                        <h4><?= $publicaciones[0][$i]["TituloPublic"] ?></h4>
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                    <p class="m-4"><?= $publicaciones[0][$i]["TextoPublic"] ?></p>
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                                <?php if($publicaciones[0][$i]["ImagenPublic"]): ?>

                                    <div class="row pb-3 text-center">
                                        <div class="col">
                                            <img class="pub-image" src="<?= $publicaciones[0][$i]["ImagenPublic"] ?>" alt="">
                                        </div>
                                    </div>

                                <?php endif ; ?>
                            </div>
                        </div>
                        <div class="col-2"></div>

                </div>

                <?php 

                        endfor ;

                    endif;

                    if((empty($publicaciones))&&!($perfil["Descripcion"])):

                ?>

                <h1 class="mt-5 text-center">Este perfil no tiene contenidos</h1>

                <?php 

                    endif;

                ?>

            </div>
        </div>
    </div>

</body>
</html>