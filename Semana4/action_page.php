<?php
 echo"sunombre es".$_GET['Nombre'];

 
 	
 	$MiObjeto = new stdClass();
 	$MiObjeto->Nombre = "Cristian";
 	$MiObjeto->Apellido = "Nuñez";

 	var_dump(json_encode($MiObjeto));

 	$archivo=fopen('usuarios.txt', "a");
 	fwrite($archivo,json_encode($MiObjeto));
 	fclose($archivo);



 	

















?>



