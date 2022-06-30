<?php
    class DaoIntegrante_Hogar{
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

       public function crearTabla($usuario,$id_hogar){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO integrante_hogar (tipo_integrante,parentesco_integrante,fecha_registro,estado,usuario_id_fk,id_hogar_fk) VALUES (?,?,?,?,?,?)");
        $stml->bind_param("sssiii",$tipo_i,$parentesco,$hoy,$estado,$usuario,$id_hogar);
        $tipo_i = "jefe de hogar";
        $parentesco = "jefe de hogar";
        $hoy = date("Y-m-d H:i:s"); 
        $estado = 1;
        $stml->execute();
       }

    


    }

