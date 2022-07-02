<?php
    session_start();
    unset($_SESSION['id_integrante']);
    unset($_SESSION['integrante']);
    session_abort();
    header("location: ../html/seccionNoticias.html");
    

?>