<?php
    
    class Estudiante extends Persona{
        private $numExpediente;

        public function __construct($d,$n,$e,$NumE){
            parent::__construct($d,$n,$e);
            $this->numExpediente = $NumE;
        }

        public function __getnumExpediente(){
            return $this->numExpediente;
        }

        public function __setnumExpediente($nE){
            $this->numExpediente = $nE;
        }

        public function Mostrar(){
            echo "<p>".parent::Mostrar()."Nº Expediente: ".$this->__getnumExpediente()."</p>";
        }
    }

?>