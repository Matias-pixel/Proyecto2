<?php
    include("../DAO/conexion.php");
    

    if(isset($_REQUEST["btn_enviar"])){
       
        $rut = $_REQUEST["txt_rut"];
        $contra = $_REQUEST["pws_contra"];
        
        $sql = "SELECT * FROM usuario where rut = '$rut' AND contrasena = '$contra'";
    
        $resultado = $con->query($sql);

        $row = $resultado->fetch_assoc();

        if($row['rut'] == $rut && $row['contrasena'] == $contra){

            session_start();
            $_SESSION['integrante'] = $rut;
            $_SESSION['id_integrante'] = $row['id'];
            $cargo = $row['cargo_directivo_id_fk'];
            if ($cargo == 2) {
                header("location: ../vistas/PerfilMaestro.html");
            }elseif($cargo == 3 ){
                header("location: ../vistas/PerfilAdministrador.php");
            }elseif($cargo == 1){
                header("location: ../vistas/PerfilVecino.html");
            }elseif($cargo == 4){
                header("location: ../vistas/PerfilSecretario.php");
            }

           
        }else{
           header("location: ../html/login.php");

        }


        

        
    }


  

?>