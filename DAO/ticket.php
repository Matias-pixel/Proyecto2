<?php
class DaoTicket{
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

    public function insertarTicket($nombre,$motivo,$integrante){


        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO ticket (nombre,motivo,fecha_hora,estado_ticket,integrante_id_fk) VALUES (?,?,?,?,?)");
        $stml->bind_param("ssssi",$nombre,$motivo,$hora,$estado,$integrante);
        $estado= 1;
        $hora = date('Y-n-d H:i:s');
        $stml->execute();
    
    }


}

?>