<?php
    class Integrante 
    {
        private $rut;
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $estadoCivil;
        private $numeroContacto;
        private $correoElectronico;
        private $sexo;
        private $etnia;
        private $ocupacion;
        private $discapacidad;
        private $socio;
        private $estadoUsuario;

        public function __construct($rut,$apellido,$nombre,$fechaNacimiento,$estadoCivil,$numeroContacto,$correoElectronico,$sexo,$etnia,$ocupacion,$discapacidad,$socio,$estadoUsuario){

            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->estadoCivil = $estadoCivil;
            $this->numeroContacto = $numeroContacto;
            $this->correoElectronico = $correoElectronico;
            $this->sexo = $sexo;
            $this->etnia = $etnia;
            $this->ocupacion = $ocupacion;
            $this->discapacidad = $discapacidad;
            $this->socio = $socio;
            $this->estadoUsuario = $estadoUsuario;

        }
        

        public function getRut(){
            return $this->rut;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        public function getEstadoCivil(){
            return $this->estadoCivil;
        }

        public function getNumeroContacto(){
            return $this->numeroContacto;
        }

        public function getCorreo(){
            return $this->correoElectronico;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function getEtnia(){
            return $this->etnia;
        }

        public function getOcupacion(){
            return $this->ocupacion;
        }

        public function getDiscapacidad(){
            return $this->discapacidad;
        }

        public function getSocio(){
            return $this->socio;
        }

        public function getEstadoU(){
            return $this->estadoUsuario;
        }

        public function setRut($rut){
            $this->rut = $rut;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        
        public function setFechaNacimiento($fechaNacimiento){
             $this->fechaNacimiento = $fechaNacimiento;
        }

        public function setEstadoCivil($estadoCivil){
            $this->estadoCivil = $estadoCivil;
        }

        public function setnumeroContacto($numeroContacto){
            $this->numeroContacto = $numeroContacto;
        }

        public function setCorreo($correoElectronico){
            $this->correoElectronico = $correoElectronico;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function setEtnia($etnia){
            $this->etnia = $etnia;
        }

        public function setOcupacion($ocupacion){
            $this->ocupacion = $ocupacion;
        }

        public function setDiscapacidad($discapacidad){
            $this->discapacidad = $discapacidad;
        }

        public function setSocio($socio){
            $this->socio = $socio;
        }

        public function setEtadoU($estadoUsuario){
            $this->estadoUsuario = $estadoUsuario;
        }



    }
    
    

?>