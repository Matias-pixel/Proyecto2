<?php
    class DaoSolicitudDocumento{
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

       public function ingresarSolicitud($comentario,$folio,$nombre_retira,$usuario,$tipo_documento){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO solicitud_documento (fecha_pedido,fecha_entrega,comentario,folio,nombre_retira,estado,estado_entrega,usuario_id_fk,tipo_documento_id_fk) VALUES (?,?,?,?,?,?,?,?,?)");
        $stml->bind_param("sssssisii", $fecha_pedido,$fecha_entrega,$comentario,$folio,$nombre_retira,$estado_entrega,$estado, $usuario,$tipo_documento );
        $estado= 1;
        $fecha_pedido = date('Y-n-d H:i:s');
        $fecha_entrega =null;
        $estado_entrega = 'pendiente';
        $stml->execute();
       }

       public function existe(){
        session_start();
        $id = $_SESSION['id_integrante'];
        
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        if(!$this->conexion){
            die('Error al conectarse');
        }
        $sql = "SELECT * FROM solicitud_documento WHERE usuario_id_fk ='$id'";
        $result = mysqli_query($this->conexion,$sql);
        
        if(mysqli_num_rows($result)>0){
            return 1;
        }
    }



    


    }


        
    

?>