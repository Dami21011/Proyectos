<?php
    
    class Persona {
        private $DNI;
        private $nombre;
        private $email;

        public function __construct($d,$n,$e){
            $this->DNI = $d;
            $this->nombre = $n;
            $this->email = $e;
        }

        public function __getDNI(){
            return $this->DNI;
        }
        public function __getNombre(){
            return $this->nombre;
        }
        public function __getEmail(){
            return $this->email;
        }
        public function __setDNI($d){
            $this->DNI = $d;
        }
        public function __setNombre($n){
            $this->nombre = $n;
        }
        public function __setEmail($e){
            $this->email = $e;
        }

        public function Mostrar(){
            echo "<p>DNI: ".$this->__getDNI()." - Nombre: ".$this->__getNombre()." -  Email: ".$this->__getEmail()."</p>";
        }
    }

?>