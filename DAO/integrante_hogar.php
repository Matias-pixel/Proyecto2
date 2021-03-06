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
       public function obtener_id_hogar($numero){

        $id_hogar;
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        if(!$this->conexion){
            die('Error al conectarse');
        }
        $sql = "SELECT integrante_hogar.id_hogar_fk
                FROM usuario 
                INNER JOIN integrante_hogar ON usuario.id = integrante_hogar.usuario_id_fk
                INNER JOIN hogar on integrante_hogar.id_hogar_fk = hogar.id
                WHERE usuario.id = '$numero'";
        $result = mysqli_query($this->conexion,$sql);
        
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
                $id_hogar =  $row['id_hogar_fk'];
            }
            return $id_hogar;
            
        
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
        $hogar = $id_hogar;
       }

       public function agregarIntegrante($tipo_i,$parentesco,$usuario,$hogar_id){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO integrante_hogar (tipo_integrante,parentesco_integrante,fecha_registro,estado,usuario_id_fk,id_hogar_fk) VALUES (?,?,?,?,?,?)");
        $stml->bind_param("sssiii",$tipo_i,$parentesco,$hoy,$estado,$usuario,$hogar_id);
        $hoy = date("Y-m-d H:i:s"); 
        $estado = 1;
        $stml->execute();
       }

       public function cambiarEstado($id){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("UPDATE usuario SET estado_usuario = ? where id = ?");
        $stml->bind_param("ii",$nuevo,$id);
        $nuevo = 2;
        $stml->execute();
       }

       

    


    }

