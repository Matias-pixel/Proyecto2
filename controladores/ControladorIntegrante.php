<?php
    require "../modelo/Integrante.php";

   
        #presidente, secretario, tesorero o  vecino
       $integrante1 = new Integrante("111","matias","marchant","06/15","soltero","123456","matias@gmail.com","masculino","nose","ocupacion","ninguna","notiene","activo","presidente");
        $integrante2 = new Integrante("222","daniel","soto","06/15","casado","123456","matias@gmail.com","masculino","nose","ocupacion","ninguna","notiene","activo","secretario");
        $integrante3 = new Integrante("333","esteban","salomon","06/15","casado","123456","matias@gmail.com","masculino","nose","ocupacion","ninguna","notiene","activo","vecino");
     
        session_start();
        
        $integrantes = array();
        
        array_push($integrantes, $integrante1);
        array_push($integrantes, $integrante2);
        array_push($integrantes, $integrante3);

        

        $_SESSION["integrantes"] = array();
        $_SESSION["integrantes"] = $integrantes;
        

        



       
    
   
   
    

?>