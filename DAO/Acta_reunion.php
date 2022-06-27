<?php
    class DaoActaReunion{
       private $user = "root";
       private $pass = "";
       private $server = "localhost";
       private $db = "junta2";

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

        public function insertarActa($titulo,$tipo,$razon,$fecha,$cargo){
            $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
            $stml = $this->conexion->prepare("INSERT INTO acta_reunion (titulo_acta,tipo,razon_reunion,fecha_acta,estado,cargo_directivo_id_fk) VALUES (?,?,?,?,?,?)");
            $stml->bind_param("ssssii",$titulo,$tipo,$razon,$fecha,$estado,$cargo);
            $estado= 1;
            $stml->execute();
    
       }

    


    }


        
    

?>