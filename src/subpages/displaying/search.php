<?php 

    session_start(); // Inicializa la sesión
    require_once "../../classes/Usuario.php"; ;

    $usuario = unserialize($_SESSION["_usuario"]) ;

    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    $pagina = (isset($_POST["pagina"]))?$_POST["pagina"]:1;
    $offset = ($pagina - 1) * 6;


    // Recibir los datos de los usuarios
    if(!empty($_POST)):

        $busqueda = (isset($_POST["usuario"]))?$_POST["usuario"]:$_POST["busqueda"] ;
        $busqueda = $sqli->real_escape_string($busqueda) ;

        $sql = "SELECT IdUsu, NombreUsu, ApellidoUsu, PerfilUsu, Descripcion FROM Usuario
                WHERE (lower(NombreUsu) LIKE lower('%{$busqueda}%') OR lower(ApellidoUsu) LIKE lower('%{$busqueda}%')) AND (NOT NombreUsu = '{$usuario->nombre}' AND NOT ApellidoUsu = '{$usuario->apellido}')
                LIMIT 6 OFFSET $offset" ;

        $cant = "SELECT (count(*))/6 as 'total' FROM Usuario
                WHERE (lower(NombreUsu) LIKE lower('%{$busqueda}%') OR lower(ApellidoUsu) LIKE lower('%{$busqueda}%')) AND (NOT NombreUsu = '{$usuario->nombre}' AND NOT ApellidoUsu = '{$usuario->apellido}')" ;


    else:

            $sql = "SELECT IdUsu, NombreUsu, ApellidoUsu, PerfilUsu, Descripcion FROM Usuario
            WHERE NOT NombreUsu = '{$usuario->nombre}' AND NOT ApellidoUsu = '{$usuario->apellido}'
            LIMIT 6 OFFSET $offset" ;

            $cant = "SELECT (count(*))/6 as 'total' FROM Usuario" ;

    endif;

    $datos = $sqli->query($sql) ;
    $datos = $datos->fetch_all(MYSQLI_ASSOC) ;

    $total = $sqli->query($cant) ;
    $total = $total->fetch_assoc() ;
    $total = $total["total"] ;
    $total = ceil($total) ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Busqueda</title>

    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/navbar.css">
    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

        <!-- NAV BAR -->

        <?php require_once "./navBar.php" ?>

        <div class="container">

            <form action="./search.php" method="post">
                <div class="row">

                    <div class="col"></div>
                    <div class="m-5 col">

                    <!-- SEARCH INPUT -->

                        <div class="row">
                            <label for="usuario" class="form-label">Usuario a buscar:</label>
                        </div>
                        <div class="row">
                            <input type="text" class="form-control bg-input" id="usuario" name="usuario">
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <button class="bg-input rounded m-3">Buscar</button>
                            </div>
                            <div class="col"></div>
                        </div>


                    </div>
                    <div class="col"></div>

                </div>
            </form>

            <div class="row">

            <!-- MOSTRANDO LOS USUARIOS -->

            <?php 

            if(empty($datos)):

            ?>

                <h1 class="mt-5 text-center">No hay usuarios con esas caracteristicas</h1>

            <?php

            else:

                for($i = 0 ; $i < count($datos); $i++):

            ?>

                <div class="col">

                <div class="card">
                    <div class="detail p-2">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="<?= ($datos[$i]["PerfilUsu"])?$datos[$i]["PerfilUsu"]:"/assets/img/defaultProfile.jpg" ?>" alt="Picture"></div>
                        <form action="./foreignProfile.php" method="post" id="form-<?= htmlspecialchars($datos[$i]['IdUsu']) ?>">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($datos[$i]['IdUsu']) ?>">
                            <h3 style="cursor: pointer;" onclick="document.getElementById('form-<?= htmlspecialchars($datos[$i]['IdUsu']) ?>').submit();">
                                <?= $datos[$i]['NombreUsu'] ?> <?= $datos[$i]['ApellidoUsu'] ?>
                            </h3>
                            <p><?= $datos[$i]['Descripcion'] ?></p>
                        </form>
                    </div>
                </div>

                </div>

            <?php
                    endfor ;
            endif ; 

            ?>
            </div>

            <div class="row mt-2 mb-5">

                <div class="col"></div>

                <!-- PAGINACIÓN -->

                <div class="col">

                    <ul class="pagination d-flex justify-content-center">

                        <?php if($pagina != 1): ?>

                            <li class="page-item">

                                <form action="./search.php" method="POST">
                                    <button class="page-link bg-input">
                                        <input type="hidden" name="pagina" value="<?= htmlspecialchars(($pagina-1)) ?>">
                                        <input type="hidden" name="busqueda" value="<?= htmlspecialchars(isset($busqueda)?$busqueda:"") ?>">
                                        <span aria-hidden="true">&laquo;</span>
                                    </button>
                                </form>
                            </li>

                        <?php endif ; ?>

                        <li class="page-item"><a class="page-link bg-input"><?= $pagina ?></a></li>

                        <?php if(($pagina != $total) && (!empty($datos))): ?>
                            <li class="page-item ">
                                <form action="./search.php" method="POST">
                                    <button class="page-link bg-input">
                                        <input type="hidden" name="pagina" value="<?= htmlspecialchars(($pagina+1)) ?>">
                                        <input type="hidden" name="busqueda" value="<?= htmlspecialchars(isset($busqueda)?$busqueda:"") ?>">
                                        <span aria-hidden="true">&raquo;</span>
                                    </button>
                                </form>
                            </li>
                        <?php endif ; ?>

                    </ul>

                </div>
                <div class="col"></div>

            </div>


        </div>

</body>
</html>