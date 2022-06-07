<?php
    class Hogar 
    {
        private $id;
        private $calle;
        private $numeracion;
        private $id_sector;

        private function __construct($id,$calle,$numeracion,$id_sector){
            $this->id = $id;
            $this->calle = $calle;
            $this->numeracion = $numeracion;
            $this->id_sector = $id_sector;
        }


        public function getId(){
            return $this->id;
        }

        public function getCalle(){
            return $this->calle;

        }

        public function getNumeracion(){
            return $this->id_sector;

        }

        public function setId($id){
            $this->id = $id;
        }

        public function setCalle($calle){
            $this->calle = $calle;
        }

        public function setNumeracion($numeracion){
            $this->numeracion = $numeracion;

        }

        public function setId_sector($id_sector){
            $this->id_sector =$id_sector;
        }
    }
    

?>