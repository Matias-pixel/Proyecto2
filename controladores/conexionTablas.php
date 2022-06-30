<?php
function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "junta2";

    $con = mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);
    return $con;
   }

?>