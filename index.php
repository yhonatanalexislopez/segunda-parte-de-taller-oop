<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=divice-width,initial-scale=1.0">
      
      <title>procedimienctos</title>
</head>
<body>

<form name="form1" method="POST" action="calcular.php">

<p>ingresa un numero fibonacci y factorial y mucho mas</p>
<p><input type="text" name="txtnumero" id="txtnumero"></p>
<p><input type = "submit" name="btncalcular" value="calcular"></p>
</form>

<form name=form1 method="POST" action="resultado.php">
      <p>numero 1: <input type= "number" id="txtnumero1"name="txtnumero1"> </p>
       <p>numero 2: <input type= "number" id="txtnumero2"name="txtnumero2"> </p>
      <p>numero 3: <input type= "number" id="txtnumero3"name="txtnumero3"> </p>
      <input type = "submit" name="btnproceder" value="proceder">


</form>

</body>
</html>