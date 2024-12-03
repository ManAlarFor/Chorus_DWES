<?php

require_once "../../classes/Usuario.php"; ;

session_start() ;
$usuario = unserialize($_SESSION["_usuario"]) ;

$visible = "d-none" ;


if(!empty($_POST)):

    $id= $_POST["id"] ;
    $titulo= $_POST["titulo"] ;
    $contenido = $_POST["contenido"] ;
    $imagen = $_POST["imagen"] ;

    if (!empty($titulo) && !empty($contenido)):

        $finalImagen = (isset($imagen))?$imagen:Null;

        try {

            $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

        } catch(mysqli_sql_exception $excepcion) {

            die() ;

        }

        if (!isset($usuario->id) || empty($usuario->id)) {
            die('Usuario no válido');
        }

        $titulo     = $sqli->real_escape_string($titulo) ;
        $contenido = $sqli->real_escape_string($contenido) ;
        $imagen = $sqli->real_escape_string($imagen) ;

        // Modificar el portfolio
        $sql = "UPDATE portfolio
                SET TituloPublic = '{$titulo}', TextoPublic = '{$contenido}',ImagenPublic = '{$finalImagen}'
                WHERE IdPublic = '{$id}'" ;  

        $sqli->query($sql) ;

        die(header("location: /subpages/profile.php")) ;

    endif ;

        $visible = "" ;

endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chorus - Añadir Publicación</title>

<link rel="stylesheet" href="/assets/css/login.css">
<link rel="stylesheet" href="/assets/css/fonts.css">
<link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<div class="card position-absolute top-50 start-50 translate-middle"  style="width: 40rem;">
    <div class="card-header bg-titulo text-center">
        <h1>CHORUS</h1>
    </div>

    <!-- FORMULARIO DE EDITAR PUBLICACIÓN -->
    <form action="portfolioEdit.php" method="post" class="p-5 bg-clarito">

    <div class="container">

        <div class="row">

            <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">

            <div class="col">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control bg-input" id="titulo" name="titulo" value="<?= (isset($_GET["titulo"]))?$_GET["titulo"]:"" ?>" required>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen (Opcional)</label>
                    <input type="text" class="form-control bg-input" id="imagen" name="imagen" value="<?= (isset($_GET["imagen"]))?$_GET["imagen"]:"" ?>">
                </div>
            </div>

            <div class="col">

                <div class="row">
                    <label for="contenido">Contenido</label>
                </div>
                <div class="row">
                    <textarea name="contenido" id="contenido" rows="5" cols="10" class="m-2 bg-input" required><?= (isset($_GET["contenido"]))?$_GET["contenido"]:"" ?></textarea>
                </div>

            </div>
        </div>


        <div class="row p-3">
            <div class="col"></div>
            <div class="col">
                <button class="btn bg-titulo w-100 fs-3">Modificar</button>
            </div>
            <div class="col"></div>
        </div>

        <!-- CONTROL DE ERRORES -->
        <div class="text-center text-danger <?= $visible ?>">
            <p>Los campos Título y Contenido deben estar llenos</p>
        </div>

    </div>

    </form>
</div>

</body>
</html>
