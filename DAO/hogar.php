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
        $stml->execute();
       }

       public function existe(){
        session_start();

        $id = $_SESSION['id_integrante'];
        
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        if(!$this->conexion){
            die('Error al conectarse');
        }
        $sql = "SELECT * FROM integrante_hogar WHERE integrante_if_fk ='$id'";
        $result = mysqli_query($this->conexion,$sql);
        
        if(mysqli_num_rows($result)>0){
            return 1;
        }
    }
        
    }
?>