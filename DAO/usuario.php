<?php
    class DaoUsuario{
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

       public function insertarUsuario($rut,$contra,$nombre,$apellido,$nacimiento,$civil,$numero,$correo,$sexo,$etnia,$ocupacion,$discapacidad,$vota){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("INSERT INTO usuario (rut,contrasena,nombre,apellido,f_nacimiento,e_civil,numero,correo,sexo,etnia,ocupacion,discapacidad,estado,estado_usuario,vota,cargo_directivo_id_fk) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stml->bind_param("ssssssssssssiisi",$rut,$contra,$nombre,$apellido,$nacimiento,$civil,$numero,$correo,$sexo,$etnia,$ocupacion,$discapacidad,$estado,$estado_usuario,$vota,$cargo_directivo);
        $estado= 1;
        $cargo_directivo = 1;
        $estado_usuario = 0;
        $stml->execute();
    
       }

       public function cambiarCargo($nombre,$cargo){
        $this->conexion = new mysqli($this->server,$this->user,$this->pass,$this->db);
        $stml = $this->conexion->prepare("UPDATE usuario SET cargo_directivo_id_fk = ? where nombre = ?");
        $stml->bind_param("is",$cargo,$nombre);
        $stml->execute();
       }



    }


?>