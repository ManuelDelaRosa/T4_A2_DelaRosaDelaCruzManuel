<?php

$dato = $_POST['caja_decimal']; 
	echo "operacion $dato <br>";
	
	//echo"Numero binario ". decbin($dato)."<br>";	 
		 

		 function prim($cadena,$posicion){
		return $cadena{$posicion};
	}



	
function operacion($d){
	$cara;
	$num1=0;
	$num2=0;
	$op;
	$var=0;
	
for ($i = 0; $i < strlen($d); $i++) {
	$cara=prim($d,$i);
	if (($cara=='0'||$cara=='1'||$cara=='2'||$cara=='3'||$cara=='4'||$cara=='5'||$cara=='6'||$cara=='7'||$cara=='8'||$cara=='9')&&$var==0) {

		$num1=$num1.$cara;
		
		//echo "Numero for". $num1;
		
	}else if($cara=='+'||$cara=='-'||$cara=='*'||$cara=='/'){
			$op=$cara;
			$var=1;
			
		
		
	}else{
		$num2=$num2.$cara;
	}

	}///for


		$res=0;
	if ($op=='+') {
		$res=$num1+$num2;
	}else if($op=='-') {
		$res=$num1-$num2;
	}
	else if($op=='*') {
		$res=$num1*$num2;
	}else if($op=='/') {
		$res=$num1/$num2;
	}
echo  "numero 1: ".$num1."<br>";
echo  "operador: ".$op."<br>";
echo  "numero 2: ".$num2."<br>";
echo  "Resultado: ".$res."<br>";



}//funcion consonantes


operacion($dato);
?>