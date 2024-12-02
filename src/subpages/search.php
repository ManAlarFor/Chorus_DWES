<?php 
    session_start(); // Inicializa la sesión
    require_once "../classes/Usuario.php" ;

    $usuario = unserialize($_SESSION["_usuario"]) ;

    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    $pagina = (isset($_GET["pagina"]))?$_GET["pagina"]:1;
    $offset = ($pagina - 1) * 6;



    if(!isset($_POST["usuario"])):


        $sql = "SELECT IdUsu, NombreUsu, ApellidoUsu, PerfilUsu, Descripcion FROM Usuario
                WHERE NOT NombreUsu = '{$usuario->nombre}'
                LIMIT 6 OFFSET $offset" ;

        $cant = "SELECT (count(*))/6 as 'total' FROM Usuario" ;

    elseif(!empty($_POST)):

        $busqueda = $_POST["usuario"] ;
        $busqueda = $sqli->real_escape_string($busqueda) ;

        $sql = "SELECT IdUsu, NombreUsu, ApellidoUsu, PerfilUsu FROM Usuario
                WHERE NOT NombreUsu = '{$usuario->nombre}'" ;

    endif;

    $datos = $sqli->query($sql) ;

    $datos = $datos->fetch_all(MYSQLI_ASSOC) ;

    $total = $sqli->query($cant) ;

    $total = $total->fetch_assoc() ;

    $total = $total["total"] ;

    $total = round($total) ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Busqueda</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <link rel="shortcut icon" href="../assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

        <!-- NAV BAR -->

        <?php require_once "./navBar.php" ?>

        <!-- SEARCH BUTTON -->

        <div class="container">

            <form action="./search.php" method="post">
                <div class="row">

                    <div class="col"></div>
                    <div class="m-5 col">

                        <div class="row">
                            <label for="usuario" class="form-label">Usuario a buscar:</label>
                        </div>
                        <div class="row">
                            <input type="text" class="form-control bg-input" id="usuario" name="usuario" required>
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


            <?php 

            if(!empty($datos)): 
                for($i = 0 ; $i < count($datos); $i++):

            ?>

                <div class="col">

                <div class="card">
                    <div class="detail">
                        <div class="detail-images"><img class="img-fluid rounded-circle" src="<?= ($datos[$i]["PerfilUsu"])?$datos[$i]["PerfilUsu"]:"/assets/img/defaultProfile.jpg" ?>" alt="Picture"></div>
                        <h3><?= $datos[$i]["NombreUsu"] ?> <?= $datos[$i]["ApellidoUsu"] ?></h3>
                        <p><?= $datos[$i]["Descripcion"] ?></p>
                    </div>
                </div>

                </div>

            <?php
                    endfor ;
            endif ; 

            ?>
            </div>

            <div class="row">

                <div class="col"></div>
                <div class="col">

                    <ul class="pagination d-flex justify-content-center">

                        <?php if($pagina != 1): ?>

                            <li class="page-item">

                                <form action="./search.php">
                                    <button class="page-link bg-input">
                                        <input type="hidden" name="pagina" value="<?= htmlspecialchars(($pagina-1)) ?>">
                                        <span aria-hidden="true">&laquo;</span>
                                    </button>
                                </form>
                            </li>

                        <?php endif ; ?>

                        <li class="page-item"><a class="page-link bg-input"><?= $pagina ?></a></li>

                        <?php if($pagina != $total): ?>
                            <li class="page-item ">
                                <form action="./search.php" method="get">
                                    <button class="page-link bg-input">
                                        <input type="hidden" name="pagina" value="<?= htmlspecialchars(($pagina+1)) ?>">
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