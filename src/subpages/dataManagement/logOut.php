<?php 

    session_start() ;

    // Deleting user
    $_SESSION = [] ;

    // Ending the session
    session_destroy() ;

    header("location: /") ;


?>