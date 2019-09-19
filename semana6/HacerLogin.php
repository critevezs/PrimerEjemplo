<?php
 $MiObjeto = new stdClass();
 $MiObjeto->Nombre =$_GET ["Nombre"];
 $MiObjeto->Apellido =$_GET ["Apellido"];

 $archivo=fopen('usuarios.txt', "a");
 fwrite($archivo,json_encode($MiObjeto)."\n");
 fclose($archivo);

 

 ?>