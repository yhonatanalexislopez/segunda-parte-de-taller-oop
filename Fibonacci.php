<?php

class Fibonacci{

    private $valor;

    public function _construct(){
         $this->valor=0;


    }
    public function setValor($numero){
        $this->valor = $numero;

    }
    public function getValor(){
        return $this->valor;
    }

    public function calcularfibonaccipara(){
        $a=0;
        $b=1;

        for($i=1; $i <= $this->getValor(); $i++){
                echo $a . " ";
                $c = $a + $b;
                $a = $b;
                $b = $c;

        }
    }


}




?>