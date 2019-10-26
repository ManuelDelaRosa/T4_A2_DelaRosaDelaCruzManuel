<?php

	$dato = $_POST['caja_cadena']; 
	$letra = $_POST['caja_caracter']; 
	
	echo "La cadena es $dato <br>";
	
	/*echo"Numero octal ". decoct($dato)."<br>";	
	echo"Numero Hexadecimal ". dechex($dato)."<br>";*/

	function prim($cadena,$posicion){
		return $cadena{$posicion};
	}	 

	
		$cad=$dato;
	$cad=strtoupper($cad);
	 $cont=0;
	 $cara;
for ( $i = 0; $i < strlen($dato); $i++) {
	//$cara=$cad.charAt(i);
	$cara=prim($cad,$i);
	if ($cara=='A'||$cara=='E'||$cara=='I'||$cara=='O'||$cara=='U') {
		
		$cont++;
	}
}
 echo("Total de vocales ".$cont);


function consonantes($d){
	$cad=$d;
	$cad=strtoupper($cad);
	$cont=0;
	$cara;
for ($i = 0; $i < strlen($cad); $i++) {
	$cara=prim($cad,$i);
	if ($cara=='A'||$cara=='E'||$cara=='I'||$cara=='O'||$cara=='U') {
		
		
	}else{
		if (($cara >= 'A' && $cara <= 'Z'&& $cara!='A')||($cara >= 'A' && $cara <= 'Z'&& $cara!='E')||($cara >= 'A' && $cara <= 'Z'&& $cara!='I')||($cara >= 'A' && $cara <= 'Z'&& $cara!='O')||($cara >= 'A' && $cara <= 'Z'&& $cara!='U')) {
			$cont++;
		}
		
	}
}
echo " <br> Total de consonantes ".$cont;


}//funcion consonantes

consonantes($dato);

function caracter($cad, $let){
	$cad=strtoupper($cad);
	$let=strtoupper($let);
	$cont=0;
	$cara;
for ($i = 0; $i < strlen($cad); $i++) {
	$cara=prim($cad,$i);
	if ($cara==$let) {
		
		$cont++;
	}
}
echo " <br> Total de $let encontradas ".$cont;

}//caracter buscado

caracter($dato,$letra);


echo " <br> Cadena loca ";
function cadenaLoca($cad){
	$cad=strtoupper($cad);
	$loca;
	$cara;
for ($i = 0; $i < strlen($cad); $i++) {
	$cara=prim($cad,$i);
	if ($i% 2 == 0) {
		$cara=strtoupper($cara);
		echo $cara;
		//$loca+=$cara;
	}else{
		$cara=strtolower($cara);
		echo $cara;
		//$loca.$cara;
	}

}
//echo " <br> Cadena loca ".$loca;

}
cadenaLoca($dato);

?>