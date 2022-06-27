<?php
    class DaoTipoDocumento{
       private $user = "root";
       private $pass = "";
       private $server = "localhost";
       private $db = "junta2";
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
           
            return $conexion;

        }
       }

       public function desconectarBD(){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        if($conexion == null){
            echo 'Usted no esta conectado a la BD';
        }else {
            $conexion->close();
            echo "Desconectado de la BD";
        }
       }

       public function insertar($nombre){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO tipo_documento (nombre,estado) VALUES (?,?)");
        $stml->bind_param("si",$nombre,$estado);
        $estado= 1;
        $stml->execute();

    
       }

       public function contar($name){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $hay;
        if (!$this->conexion){
            echo "Error al conectarse";
        }else{
          $sql = "SELECT * FROM tipo_documento where nombre = '$name'";
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