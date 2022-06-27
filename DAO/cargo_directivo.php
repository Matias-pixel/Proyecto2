<?php
    class DaoCargo_directivo{
       private $user = "root";
       private $pass = "";
       private $server = "localhost";
       private $db = "junta2";
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

       public function insertarCargo($nombre){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO acta_reunion (nombre_cargo,fecha_inicio,fecha_fin,estado) VALUES (?,?,?,?)");
        $stml->bind_param("sssi",$nombre,$hora,$null,$estado);
        $estado= 1;
        $hora = date('Y-n-d H:i:s');
        $null = NULL;
        $stml->execute();
    
       }



    }


?>