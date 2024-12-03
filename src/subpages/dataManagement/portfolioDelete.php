<?php


    try {

        $sqli = new mysqli("chorus_db", "root", "", "chorus_db") ;            

    } catch(mysqli_sql_exception $excepcion) {

        die() ;

    }

    // Eliminar publicacion
    $sql = "DELETE FROM portfolio
            WHERE IdPublic = {$_GET['id']}" ;        

    $sqli->query($sql) ;

    die(header("location: /subpages/displaying/profile.php")) ;

?>