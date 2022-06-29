<?php
    class DaoHogar{
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
       
       public function ingresarHogar($calle,$numeracion,$sector_id_fk){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO hogar (calle,numeracion,f_creacion,estado,sector_id_fk) VALUES (?,?,?,?,?)");
        $stml->bind_param("sssii", $calle,$numeracion,$hoy,$estado,$sector_id_fk);
        $estado= 1;
        $hoy = date("Y-m-d H:i:s"); 
        $stml->execute();
       }

       public function cambiarEstado_user($id_usuario){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("UPDATE usuario SET estado_usuario = ? where id = ?");
        $stml->bind_param("ii",$nuevo,$id_usuario);
        $nuevo = 1;
       }

       public function crearHogar_integrante($usuario,$id_hogar){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO integrante_hogar (tipo_integrante,parentesco_integrante,fecha_registro,estado,usuario_id_fk,id_hogar_fk) VALUES (?,?,?,?,?,?)");
        $stml->bind_param("sssiii",);
        $tipo_i = "jefe de hogar";
        $parentesco = "jefe de hogar";
        $hoy = date("Y-m-d H:i:s"); 
        $estado = 1;

       }


    


    }


        
    

?>