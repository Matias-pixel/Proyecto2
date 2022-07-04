<?php
    class DaoNoticia{
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

       public function ingresarNoticia($titulo,$tipo,$cuerpo,$usuario){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO noticia (titulo,tipo,fecha_hora,cuerpo,estado,usuario_id_fk) VALUES (?,?,?,?,?,?)");
        $stml->bind_param("ssssii", $titulo,$tipo,$hora,$cuerpo,$estado,$usuario);
        $estado= 1;
        $hora = date('Y-n-d H:i:s');
        $stml->execute();
       }

       public function existe(){
        $id = $_SESSION['id_integrante'];
        
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        if(!$this->conexion){
            die('Error al conectarse');
        }
        $sql = "SELECT * FROM noticia WHERE usuario_id_fk ='$id'";
        $result = mysqli_query($this->conexion,$sql);
        
        if(mysqli_num_rows($result)>0){
            return 1;
        }


    }

    public function eliminar($numero){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("UPDATE noticia SET estado = ? where id = ?");
        $stml->bind_param("ii",$nuevo,$numero);
        $nuevo = 0;
        $stml->execute();
       }
    }


        
    

?>