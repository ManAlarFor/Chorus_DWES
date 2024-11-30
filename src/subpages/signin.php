<?php 

    session_start() ;

    $visible = "d-none" ;

    if(!empty($_SESSION)):

        die(header("location: /")) ;

    elseif(!empty($_POST)):

        $correo= $_POST["correo"] ;
        $contrasena = $_POST["passwd"] ;
        $imagen= $_POST["imagen"] ;
        $nombre= $_POST["nombre"] ;
        $apellido= $_POST["apellido"] ;
        $edad= $_POST["edad"] ;
        $descrip= $_POST["descrip"] ;


        try {

            $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

        } catch(mysqli_sql_exception $excepcion) {

            die() ;

        }
        $finalImagen = (isset($imagen))?($sqli->real_escape_string($imagen)):Null;
        $finalDescrip = (isset($descrip))?($sqli->real_escape_string($descrip)):Null;


        $correo     = $sqli->real_escape_string($correo) ;
        $contrasena = $sqli->real_escape_string($contrasena) ;
        $nombre = $sqli->real_escape_string($nombre) ;
        $apellido = $sqli->real_escape_string($apellido) ;
        $edad = $sqli->real_escape_string($edad) ;
        $sql = "INSERT INTO Usuario(NombreUsu, ApellidoUsu, EdadUsu, CorreoUsu, ContrasenaUsu, PerfilUsu, Descripcion)
                VALUES ('{$nombre}', '{$apellido}', '{$edad}', '{$correo}', '{$contrasena}', '{$imagen}', '{$descrip}');" ;        

        $datos = $sqli->query($sql) ;

        die(header("location: /subpages/login.php")) ;

        $visible = "" ;

    endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Sign In</title>

    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="shortcut icon" href="../assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <div class="card position-absolute top-50 start-50 translate-middle"  style="width: 60rem;">
        <div class="card-header bg-titulo text-center">
            <h1>CHORUS - SIGN IN</h1>
        </div>
        <form action="signin.php" method="post" class="p-5 bg-clarito">

            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="row">

                            <div class="col">

                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input type="email" class="form-control bg-input" id="correo" name="correo">
                                </div>
                                <div class="mb-3">
                                    <label for="passwd" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control bg-input" id="passwd" name="passwd">
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen (Opcional)</label>
                                    <input type="text" class="form-control bg-input" id="imagen" name="imagen">
                                </div>

                            </div>

                            <div class="col">

                                
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control bg-input" id="nombre" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control bg-input" id="apellido" name="apellido">
                                </div>
                                <div class="mb-3">
                                    <label for="edad" class="form-label">Edad</label>
                                    <input type="number" class="form-control bg-input" id="edad" name="edad">
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="mb-3">

                                <div class="row">
                                    <label for="descrip">Descripción</label>
                                </div>
                                <div class="row">
                                    <textarea class="bg-input" name="descrip" id="descrip" rows="2"></textarea>
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
                            <p>El usuario buscado no existe</p>
                        </div>

                        <div class="row text-center">
                            <p>¿Tienes cuenta? Haz click <a href="./login.php">aquí</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
</html>