<?php

function conectar(){

    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "juntavecinos";

    $conex = new msqli($server,$user,$pass,$db);

    if($conex->connect_errno){
        die("FALLO NO PUEDE SER ALO".$conex->connect_errno);
    }


}


?>