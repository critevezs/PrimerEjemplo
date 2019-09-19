

<!DOCTYPE html>
<html>
<body>


<h2> Listado de Usuarios</h2>

<ol>
	<?php
$miArchivo = fopen("usuarios.txt", "r");
while(!feof($miArchivo)) 
{
  $objeto =json_decode(fgets($miArchivo));
  if($objeto->Nombre == $_GET["Nombre"])
  {
  	
  }
}



fclose($miArchivo);

?>
  
</ol> 

</body>
</html>


