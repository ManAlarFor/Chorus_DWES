<?php 

    session_start() ;
    require_once "../../classes/Usuario.php" ;

    // Deleting user
    $usuario = unserialize($_SESSION["_usuario"]) ;

    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    // Eliminar publicacion
    $sql = "DELETE FROM Usuario
            WHERE IdUsu = {$usuario->id}" ;        

    $sqli->query($sql) ;

    die(header("location: /subpages/dataManagement/logOut.php")) ;

?>