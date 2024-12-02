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
    <title>Chorus - <?= $usuario->nombre ?> <?= $usuario->apellido ?> Profile</title>

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

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-purple border-purple altura sticky pt-5 pb-5"> 

                <div class="row mt-2 mb-3">

                    <div class="col"></div>
                    <div class="col">

                        <img class="rounded-circle m-5 w-max text-center" src="<?= ($usuario->perfil)?$usuario->perfil:"/assets/img/defaultProfile.jpg" ?>" alt="">

                    </div>
                    <div class="col"></div>

                </div>

                <div class="row mb-4 text-center">

                    <div class="row">
                        <h3><?= $usuario->nombre ?> <?= $usuario->apellido ?></h3>
                    </div>
                    <div class="row">
                        <h4><?= $usuario->edad ?></h4>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <?php 

                                if(!empty($usuario->funcion) && 2 < count($usuario->funcion)):

                            ?>

                                <label for="funciones">Ver funciones</label>

                                <select id="funciones" name="funciones">

                                <option disabled selected>-----------------</option>

                                <?php 

                                        for($i = 0 ; (empty($usuario->funcion)) | $i < count($usuario->funcion); $i++): 

                                ?>

                                        <option disabled><?= $usuario->funcion[$i] ?></option>

                                <?php 
                                        endfor ; 
                                ?>

                                </select>

                            <?php

                                elseif(!empty($usuario->funcion) && 2 >= count($usuario->funcion)):

                                    for($i = 0 ; (empty($usuario->funcion)) | $i < count($usuario->funcion); $i++): 
                            ?>

                                        <h4><?=$usuario->funcion[$i]?></h4>

                            <?php
                                    endfor ; 
                                endif ;
                            ?>

                        </div>
                        <div class="col"></div>
                    </div>

                </div>

                <div class="row mb-5 text-center">

                    <div class="col"></div>
                    <div class="col p-4">
                        <a href="./portfolioAdd.php"><button class="btn btn-success">Añadir Publicación</button></a>
                    </div>
                    <div class="col p-4">

                        <form action="/subpages/profileEdit.php" method="get">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($usuario->id) ?>">
                            <input type="hidden" name="nombre" value="<?= htmlspecialchars($usuario->nombre) ?>">
                            <input type="hidden" name="apellido" value="<?= htmlspecialchars($usuario->apellido) ?>">
                            <input type="hidden" name="imagen" value="<?= htmlspecialchars( ($usuario->perfil)?($usuario->perfil):"") ?>">
                            <input type="hidden" name="descripcion" value="<?= htmlspecialchars( $usuario->descripcion) ?>">
                            <input type="hidden" name="correo" value="<?= htmlspecialchars( $usuario->correo) ?>">
                            <input type="hidden" name="edad" value="<?= htmlspecialchars( $usuario->edad) ?>">
                            <?php if(!empty($usuario->funcion)):?>
                                <input type="hidden" name="funcion" value="<?= htmlspecialchars( implode(",", $usuario->funcion)) ?>">
                            <?php endif; ?>
                            <button class="btn btn-warning">Editar Perfil</button>
                        </form>
                    </div>
                    <div class="col"></div>

                </div>

            </div>

            <div class="col-9">

                <?php 

                    if($usuario->descripcion):

                ?>

                    <div class="row mt-4 text-center">
                        <h1>Descripción</h1>

                        <div class="col-2"></div>
                        <div class="col-8">
                            <!-- main -->
                            <div class="card bg-purple">
                                    <p class="m-4 text-center"><?= $usuario->descripcion ?></p>
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
                                        <h4><?= $publicaciones[$i]["TituloPublic"] ?></h4>
                                    </div>
                                    <div class="mt-5 col-2">
                                        <form action="/subpages/portfolioEdit.php" method="get">
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($publicaciones[$i]["IdPublic"]) ?>">
                                            <input type="hidden" name="titulo" value="<?= htmlspecialchars($publicaciones[$i]["TituloPublic"]) ?>">
                                            <input type="hidden" name="contenido" value="<?= htmlspecialchars($publicaciones[$i]["TextoPublic"]) ?>">
                                            <input type="hidden" name="imagen" value="<?= htmlspecialchars($publicaciones[$i]["ImagenPublic"]) ?>">
                                            <button class="btn btn-warning">Editar</button>
                                        </form>
                                    </div>
                                    <div class="mt-5 col-2">
                                    <form action="/subpages/portfolioDelete.php" method="get">
                                        <input type="hidden" name="id" value="<?= htmlspecialchars($publicaciones[$i]["IdPublic"]) ?>">
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>

                                    </div>
                                    <div class="col-1"></div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                    <p class="m-4"><?= $publicaciones[$i]["TextoPublic"] ?></p>
                                    </div>
                                    <div class="col-1"></div>
                                </div>

                                <?php if($publicaciones[$i]["ImagenPublic"]): ?>

                                    <div class="row pb-3 text-center">
                                        <div class="col">
                                            <img class="pub-image" src="<?= $publicaciones[$i]["ImagenPublic"] ?>" alt="">
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

                    if((empty($publicaciones))&&!($usuario->descripcion)):

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