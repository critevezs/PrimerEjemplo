<?php
  //Var_Dump($_GET);
  echo $_GET["nombre"];
  //$numero=8128;
  $numero=$_GET["numero"];
  $suma=0;
  for($i=1;$i<$numero;$i++)
  {
    if($numero%$i==0)
    {
      $suma= $suma + $i;
    
    }
  }
  if ($suma == $numero)
  {
    echo "es numero perfecto";
  }else
  {
    echo "no es numero perfecto";
  }
  



?>