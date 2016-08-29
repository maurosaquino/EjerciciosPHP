<!DOCTYPE html>
<html>
<head>
	<title>Formulario de entrada del dato</title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

  <body>
  <div id="div1">
  </div>
  

  <form method="post" action="Formulario1.php"> 
  <p id= "f1">
  Ingrese sus datos
  <br>
  Nombre: 
  <input id = "f2" type="text" name="nombre"> 
  <br> 
  Apellido:
  <input id = "f2" name="apellido"></input> 
  <br>
  DNI:
  <input id = "f2" typle='text' name="dni">
  <br>
  Es usted Plus? (SI/NO):
  <select id = "f2" name="esPlus"> 
  <option id = "f2" value="SI">SI</option> 
  <option id = "f2" value="NO">NO</option>
  <br>  
  <input id="f3" type="submit" value="Aceptar"> 
  </p>
  </form>


<?php

?>


</body>
</html>