<?php
    include("conexion.php");
    session_start();

    if(isset($_REQUEST["txt_rut"])){
       
        $rut = $_REQUEST["txt_rut"];
        $contra = $_REQUEST["pws_contra"];
        
        $sql = "SELECT * FROM usuario where rut = '$rut' AND password = '$contra'";
    
        $resultado = $conex->query($sql);

        $row = $resultado->fetch_assoc();

        if($row['rut'] == $rut && $row['password'] == $contra){
            $_SESSION['nombre'] = $rut;
            header("location: ../vistas/vistaGeneral.html");
        }else{
            header("location: ../html/login.php");
        }

    }

  

?>