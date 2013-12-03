<?php
/* se cra la conexion entre la base de datos y php donde a la
 conexion le entr por parametro direccion el ususiario y la 
 contraseña y la base de datos le entra una base dde datps */
$conexion=mysql_connect("localhost","root","")or die("Error en conexion") ;
$bd=mysql_select_db("progra") or die("Error en la base de datos");
return($conexion);
return($bd);

 ?>