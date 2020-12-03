<?php

if(isset($_POST["btncalcular"])){



require_once "Fibonacci.php";
require_once "Factorial.php";

$factorial=new Factorial();

$fibonacci = new Fibonacci();

$numero =$_POST["txtnumero"];


$fibonacci->setValor($numero);
$factorial->setValor($numero);

$fibonacci->calcularfibonaccipara();
echo "la factorial de numero correspondido es ". $numero ."es" . $factorial->calcular();


}else{
  echo "acceso no balido.";
}


?>