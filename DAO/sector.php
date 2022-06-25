<?php
 
    class DaoSector{
       private $user = "root";
       private $pass = "";
       private $server = "localhost";
       private $db = "provar";
       private $conexion;

       //CONSTRUCTOR VACIO
       

       public function __construct(){

       }

       //CONEXION A LA BD

       public function conectarBD(){
        $conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);

        if($conexion->connect_error){
            die('La conexion con la BD falló');

        }else{
            echo "La conexion fue un exito";

        }
       }

       public function desconectarBD(){
        if($conexion == null){
            echo 'Usted no esta conectado a la BD';
        }else {
            $conexion->close();
            echo "Desconectado de la BD";
        }
       }

       public function IngresarSector($nombre,$id){
            $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
            $stml = $this->conexion->prepare("INSERT INTO sector (nombre,estado,comuna_id_fk) VALUES (?,?,?)");
            $stml->bind_param("sii",$nombre,$estado,$id);
            $estado= 1;
            $stml->execute();


       }





    


    }


        
    

?>