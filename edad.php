<?php  
$nombres = $GET["nombre"];
$edades =$GET["edad"];

 if ($edades>17){
 	$va = " eres Mayor de edad";
 	header('Location: Resultado.php');

 	}else {
    $va = " no eres Mayor de edad";
  
 	header('Location: Resultado.php');
	}
?>