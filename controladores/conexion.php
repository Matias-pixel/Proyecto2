<?php

function conectar(){

    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "juntavecinos";
    $con = mysqli_conect($server,$user,$pass) or die ("E R R O R".mysql_error());
    mysql_select_db($db, $con);

    return $con; 

}


?>