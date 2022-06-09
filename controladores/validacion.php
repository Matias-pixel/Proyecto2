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
            $rol = $row['rol'];
            if ($rol == "presidente") {
                header("location: ../vistas/vistaGeneral.html");
            }elseif($rol == "secretario" || $rol == "tesorero" ){
                header("location: ../vistas/vistaAdmin.html");
            }elseif($rol == "vecino"){
                header("location: ../vistas/vistaV.html");
            }

           
        }else{
           header("location: ../html/login.php");
        }


        

        
    }


  

?>