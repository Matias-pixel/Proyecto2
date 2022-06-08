<?php

    
  require "../modelo/Integrante.php";
    	
  session_start();

  $integrantes = array();

  $integrantes = $_SESSION["integrantes"];

   echo count($_SESSION["integrantes"]);

    foreach($integrantes as $i){
        
        $nombre;
        if($i->getNombre() == "matias"){
            $nombre = $i->getNombre();
            echo $nombre;
        }
       
     
        
        
        

    }


    
   
    
    

    

  

?>