<?php
    class DaoComuna{
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

       public function insertarComuna($nombre,$region){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO comuna (nombre,region,estado) VALUES (?,?,?)");
        $stml->bind_param("ssi",$nombre,$region,$estado);
        $estado= 1;
        $stml->execute();
    
       }

       public function contar($name,$region){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $hay;
        if (!$this->conexion){
            echo "Error al conectarse";
        }else{
          $sql = "SELECT * FROM comuna WHERE nombre = '$name' AND region = '$region'";
          $contador = mysqli_query($this->conexion,$sql);

          if(mysqli_num_rows($contador)>0){
            $hay=1;
          }else{
            $hay=0;
          }
          return $hay;
          
        }
       }
        
    }

?>