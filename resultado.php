<?php


$numero1=$_POST["txtnumero1"];
$numero2=$_POST["txtnumero2"];
$numero3=$_POST["txtnumero3"];

$suma = $numero1+$numero2+$numero3;

echo "<br><br>la suma de estos valores es : " . $suma;

$resta = $numero1-$numero2-$numero3;

echo "<br><br>la resta de estos valores es : " . $resta;

$multiplicacion = $numero1*$numero2*$numero3;

echo "<br><br>la multiplicacion de los balores es : " . $multiplicacion;

$divicion =$numero1/$numero2/$numero3;

echo "<br><br>la divicion de los valores es : " . $divicion;


if($numero1>$numero2){
    echo "<br><br>el mayor es el numero1 . con valor :". $numero1;
}else{
    echo "<br><br>el menor es el numero1 .con valor :" . $numero1;
}
if($numero1>$numero3){
    echo "<br><br>el mayor es el numero1 . con valor :". $numero1;
}else{
    echo "<br><br>el menor es el numero1 .con valor :" . $numero1;
}
if($numero3>$numero2){
    echo "<br><br>el mayor es el numero3 . con valor :". $numero3;
}else{
    echo "<br><br>el menor es el numero3 .con valor :" . $numero3;
}
if($numero3>$numero1){
    echo "<br><br>el mayor es el numero3 . con valor :". $numero3;
}else{
    echo "<br><br>el menor es el numero3 .con valor :" . $numero3;
}
if($numero2>$numero3){
        echo "<br><br>el mayor es numero2 .con valor :" .$numero2;
}else{
    echo "<br><br>es el menor es numero2 .con valor :" .$numero2;
}
if($numero2>$numero1){
    echo "<br><br>el mayor es numero2 .con valor :" .$numero2;
}else{
echo "<br><br>es el menor es numero2 .con valor :" .$numero2;
}






?>