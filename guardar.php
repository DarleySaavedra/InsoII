<?php
	$con=mysql_connect('localhost','root','','RESTAURANTE') or die('Error en la conexion servidor');
	$sql="INSERT INTO articulo VALUES('".$_POST["categoria"]."','".$_POST["nombre"]."','".$_POST["descripcion"]."','".$_POST["precio"].")";
	$resultado=mysql_query($con,$sql) or die ('Error en el query database');
	mysql_close($con);

?>
