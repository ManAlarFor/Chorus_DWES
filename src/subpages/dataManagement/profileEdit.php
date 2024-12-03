<?php 

    session_start() ;
    require_once "../../classes/Usuario.php" ;

    $usuario = unserialize($_SESSION["_usuario"]) ;

    $visible = "d-none" ;

    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    if(!empty($_POST)):

        $id         = $_POST["id"] ;
        $correo     = $_POST["correo"] ;
        $imagen     = $_POST["imagen"] ;
        $nombre     = $_POST["nombre"] ;
        $apellido   = $_POST["apellido"] ;
        $edad       = $_POST["edad"] ;
        $descrip    = $_POST["descrip"] ;
        $funcion    = $_POST["funcion"] ;

        if( $correo && $nombre && $edad && $apellido):

            $finalImagen = (isset($imagen))?$imagen:null;
            $finalDescrip = (isset($descrip))?($sqli->real_escape_string($descrip)):Null;


            // Cambiar los datos del usuario
            $correo     = $sqli->real_escape_string($correo) ;
            $nombre = $sqli->real_escape_string($nombre) ;
            $apellido = $sqli->real_escape_string($apellido) ;
            $edad = $sqli->real_escape_string($edad) ;
            $sql = "UPDATE Usuario
                    SET NombreUsu = '{$nombre}', ApellidoUsu = '{$apellido}', EdadUsu = '{$edad}', CorreoUsu = '{$correo}' ,PerfilUsu = '{$finalImagen}', Descripcion ='{$descrip}'
                    WHERE IdUsu = '{$id}'" ;        

            $sqli->query($sql) ;
            
            $sql = "DELETE FROM usuario_funcion 
                    WHERE IdUsu = '{$id}'" ;
            $sqli->query($sql) ;

            if(!empty($funcion)&&!empty($funcion)&&!($funcion[0]=="")):

                $usuario->setFuncion(null) ;

                for($i = 0 ; $i < count($funcion) ; $i++):

                    $sql = "SELECT IdFuncion FROM Funcion
                            WHERE NombreFuncion = '{$funcion[$i]}'" ;

                    $idFun = $sqli->query(($sql)) ;

                    $idFun = $idFun->fetch_assoc() ;

                    $sql = "INSERT INTO usuario_funcion
                            VALUES ('{$id}', '{$idFun['IdFuncion']}')" ;

                    $sqli->query(($sql)) ;

                endfor ;

            endif ;

            $usuario->setNombre($nombre) ;
            $usuario->setApellido($apellido) ;
            $usuario->setCorreo($correo) ;
            $usuario->setEdad($edad) ;
            $usuario->setDescripcion($finalDescrip) ;
            $usuario->setPerfil($finalImagen) ;
            $usuario->setFuncion($funcion) ;

            $_SESSION["_usuario"] = serialize($usuario) ;

            header("location: /subpages/dataManagement/login.php") ;

        endif ;

        $visible = "" ;

    endif;

    $sql = "SELECT NombreFuncion FROM Funcion" ;

    $datos = $sqli->query($sql) ;

    if ($datos->num_rows > 0):

        $funciones = $datos->fetch_all();

    endif;

    if(isset($_GET["funcion"])): 

        $funcionUsuario = explode(",",$_GET["funcion"]) ;
        
    endif; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Editar Perfil</title>

    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <div class="card position-absolute top-50 start-50 translate-middle"  style="width: 60rem;">
        <div class="card-header bg-titulo text-center">
            <h1>CHORUS - EDITAR PERFIL</h1>
        </div>

        <!-- FORMULARIO DE EDICIÓN DE PERFIL -->
        <form action="./profileEdit.php" method="post" class="p-3 bg-clarito">

            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="row">

                            <div class="col">

                                <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">


                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input type="email" value="<?= $_GET["correo"] ?>" class="form-control bg-input" id="correo" name="correo">
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen (Opcional)</label>
                                    <input type="text" value="<?= ($_GET["imagen"])?$_GET["imagen"]:"" ?>" class="form-control bg-input" id="imagen" name="imagen">
                                </div>

                                <div class="mb-3">
                                    <label for="edad" class="form-label">Edad</label>
                                    <input type="number" value="<?= $_GET["edad"] ?>" class="form-control bg-input" id="edad" name="edad">
                                </div>

                                <div class="mb-3">
                                    <label for="funcion[]" class="form-label">Función</label>
                                    <select class="w-100" class="bg-input" id="funcion" name="funcion[]" multiple>
                                        <option <?= (!isset($funcionUsuario))?"selected":"" ?> value="">Ningún Papel</option>

                                        <?php 

                                            for($i = 0 ; $i < count($funciones) ;$i++):

                                        ?>

                                        <option <?= (isset($funcionUsuario) && in_array($funciones[$i][0], $funcionUsuario))?"selected":"" ?> value="<?= $funciones[$i][0] ?>"><?= $funciones[$i][0] ?></option>

                                        <?php 

                                            endfor ;

                                        ?>

                                    </select>
                                </div>

                            </div>

                            <div class="col">

                                
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" value="<?= $_GET["nombre"] ?>" class="form-control bg-input" id="nombre" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellidos</label>
                                    <input type="text" value="<?= $_GET["apellido"] ?>" class="form-control bg-input" id="apellido" name="apellido">
                                </div>
                                <div class="mb-3">

                                    <div class="row">
                                        <label class="form-label" for="descrip">Descripción (Opcional)</label>
                                    </div>
                                    <div class="row">
                                        <textarea class="bg-input" name="descrip" id="descrip" rows="7" cols="15"><?= ($_GET["descripcion"])?$_GET["descripcion"]:"" ?></textarea>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col"></div>
                            <div class="col">
                                <button class="btn bg-titulo w-100 fs-3">Entrar</button>
                            </div>
                            <div class="col"></div>
                        </div>

                        <div class="row text-center text-danger <?= $visible ?>">
                            <p>Los campos deben estar completos</p>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
</html>