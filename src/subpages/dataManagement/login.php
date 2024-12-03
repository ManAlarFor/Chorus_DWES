<?php 

    session_start() ;

    $visible = "d-none" ;

    if(!empty($_SESSION)):

        die(header("location: /")) ;

    elseif(!empty($_POST)):

        $correo= $_POST["correo"] ;
        $contrasena = $_POST["passwd"] ;

        try {

            $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

        } catch(mysqli_sql_exception $excepcion) {

            die() ;

        }

        // Busqueda del usuario
        $correo     = $sqli->real_escape_string($correo) ;
        $contrasena = $sqli->real_escape_string($contrasena) ;
        $sql = "SELECT IdUsu, NombreUsu, ApellidoUsu, CorreoUsu, PerfilUsu, EdadUsu, Descripcion FROM Usuario 
                WHERE CorreoUsu = '{$correo}' AND ContrasenaUsu = '{$contrasena}' ;" ;        

        $datos = $sqli->query($sql) ;

        if ($datos->num_rows > 0):

            require_once "../../classes/Usuario.php";
            $usuario_data = $datos->fetch_assoc();

            $usuario = new Usuario(
                $usuario_data['IdUsu'],
                $usuario_data['NombreUsu'],
                $usuario_data['ApellidoUsu'],
                $usuario_data['CorreoUsu'],
                $usuario_data['PerfilUsu'],
                $usuario_data['EdadUsu'],
                $usuario_data['Descripcion']
            );

            $sql = "SELECT IdFun FROM usuario_funcion 
                    WHERE IdUsu = '{$usuario->id}';" ;     
        $result = $sqli->query($sql);

        // Buscar las funciones del usuario
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

            $usuario->setFuncion($funciones) ;
        } 


            $sqli->close() ;

            // Guardar datos
            $_SESSION["_usuario"] = serialize($usuario) ;

            die(header("location: /")) ;
        endif ;

            $visible = "" ;

    endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - LogIn</title>

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
            <h1>CHORUS - LOGIN</h1>
        </div>

        <!-- FORMULARIO DE INICIO DE SESION -->
        <form action="login.php" method="post" class="p-5 bg-clarito">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control bg-input" id="correo" name="correo">
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label">Contraseña</label>
                <input type="password" class="form-control bg-input" id="passwd" name="passwd">
            </div>

            <div class="row p-3">
                <div class="col"></div>
                <div class="col">
                    <button class="btn bg-titulo w-100 fs-3">Entrar</button>
                </div>
                <div class="col"></div>
            </div>

            <!-- CONTROL DE ERRORES -->
            <div class="row text-center text-danger <?= $visible ?>">
                <p>El usuario buscado no existe</p>
            </div>

            <!-- ENLACE A SIGNIN -->
            <div class="row text-center">
                <p>¿No tienes cuenta? Haz click <a href="./signin.php">aquí</a>.</p>
            </div>
        </form>
    </div>

</body>
</html>