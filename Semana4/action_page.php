<?php
 echo"sunombre es".$_GET['Nombre'];

 $archivo=fopen('usuarios.txt', "a");
 	fwrite($archivo,$_GET['Nombre']."\n");
















?>



