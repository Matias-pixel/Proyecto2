<?php
    session_start();
    unset($_SESSION['id_integrante']);
    unset($_SESSION['integrante']);
   
    header("location: ../html/seccionNoticias.html");
    

?>