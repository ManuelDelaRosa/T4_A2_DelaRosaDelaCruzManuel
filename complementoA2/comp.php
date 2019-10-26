<?php

$dato = $_POST['caja_decimal']; 
	echo "Numero decimal $dato <br>";
	
	echo"Numero binario ". decbin($dato)."<br>";	 
		 

		 function prim($cadena,$posicion){
		return $cadena{$posicion};
	}



	
function complemento($d){
	$bin=decbin($d);

	$cara;
	$cad="";
for ($i = 0; $i < strlen($bin); $i++) {
	$cara=prim($bin,$i);
	if ($cara==1) {

		$cad=$cad."0";
		//$cara=0;
		//echo $cara;
		
	}else{
			$cad=$cad."1";
			//$cara=1;
		//echo $cara;
		
		
	}

	}///for

	$c2="";
	$c;
	$con=1;
	/*
	for ($i = strlen($cad); $i >0; $i--) {
		$c=prim($cad,$i);
		$con=prim($cad,$i-1);

		if ($c==0 &&$con==1) {

		$c2=$c2."1";
		$con==0;
		//echo $cara
		
	} elseif ($c==1 &&$con==0){
			$c2=$c2."1";
			//$con==1;
	}else{
		$c2=$c2.$c;
	}
	

	}*/

//echo " <br> Total de consonantes ".$cont;
echo  "<br>Complemento A1: ".$cad;



}//funcion consonantes


complemento($dato);
?>