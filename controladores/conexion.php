<?php
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "provar";

    $conex = new mysqli($server,$user,$pass,$db);

    if($conex->connect_error){
        die("FALLO NO PUEDE SER ALO".$conex->connect_error);
    }





?>