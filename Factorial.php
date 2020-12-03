<?php

class Factorial{

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

public function calcular(){

    $factorial=1;

    for($i=1; $i<=$this->getValor(); $i++){
              $factorial=$factorial*$i;
     }

     return $factorial;
}

}


?>