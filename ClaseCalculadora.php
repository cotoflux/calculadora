<?php

    class ClaseCalculadora{

        private $Operando1;
        private $Operando2;

        public function __construct($Operando1, $Operando2)
        {
            $this->Operando1 = $op1;
            $this->Operando2 = $op2;
        }

        public function __destruct(){
            
        }

        public function getOperando1()
        {
            return($this->Operando1);
        }

        public function setOperando2($valor)
        {
            $this->Operando1=$valor;
        }

        public function getOperando2()
        {
            return($this->Operando2);
        }

        public function setOperando2($valor)
        {
            $this->Operando2=$valor;
        }

        public function __set($propiedad,$valor)
        {
            echo("<p>La propiedad que intenta modificar no existe</p>");
        }

        public function __get($propiedad)
        {
            echo("<p>La propiedad de la que intenta");
            echo("obtener el valor no existe</p>")
        }

        public function Suma()
        {
            $resultado=$this->getOperando1()."+" .$this->getOperando2() ."=";
            $resultado.=$this->getOperando1()+$this->getOperando2();
            return($resultado);
        }

        public function Resta()
        {
            $resultado=$this->getOperando1()."-" .$this->getOperando2() ."=";
            $resultado.=$this->getOperando1()-$this->getOperando2();
            return($resultado);
        }
    }