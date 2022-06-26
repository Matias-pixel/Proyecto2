<?php
    class DaoSolicitudDocumento{
       private $user = "root";
       private $pass = "";
       private $server = "localhost";
       private $db = "provar";

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

       public function ingresarSolicitud($comentario,$folio,$nombre_retira,$usuario,$tipo_documento){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO solicitud_documento (fecha_pedido,fecha_entrega,comentario,folio,nombre_retira,estado,usuario_id_fk,tipo_documento_id_fk) VALUES (?,?,?,?,?,?,?,?)");
        $stml->bind_param("sssssiii", $fecha_pedido,$fecha_entrega,$comentario,$folio,$nombre_retira,$estado, $usuario,$tipo_documento );
        $estado= 1;
        $fecha_pedido = date('Y-n-d H:i:s');
        $fecha_entrega =null;
        $stml->execute();
       }



    


    }


        
    

?>