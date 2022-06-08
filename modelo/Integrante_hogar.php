<?php
    class Integrante_hogar 
    {
        private $id;
        private $id_integrante_fk;
        private $tipo_integrante;
        private $parentesco_integrante;
        private $id_hogar_fk;
        private $estado_integrante_hogar;

        public function __construct($id,$tipo_integrante,$parentesco_integrante,$id_hogar_fk,$estado_integrante_hogar,$id_integrante_fk){
            $this->id = $id;
            $this->tipo_integrante = $tipo_integrante;
            $this->parentesco_integrante = $parentesco_integrante;
            $this->id_hogar_fk = $id_hogar_fk;
            $this->estado_integrante = $estado_integrante_hogar;
            $this->id_integrante_fk = $id_integrante_fk;


        }

        public function getId(){
            return $this->id;
        }

        public function getId_integrante_fk(){
            return $this->id_integrante_fk;
        }

        public function getTipo_integrante(){
            return $this->tipo_integrante;
        }

        public function getParentesco_integrante(){
            return $this->parentesco_integrante;
        }

        public function getId_hogar_fk(){
            return $this->id_hogar_fk;
        }

        public function getEstado_integrante(){
            return $this->estado_integrante;
        }

        
    }
    

?>