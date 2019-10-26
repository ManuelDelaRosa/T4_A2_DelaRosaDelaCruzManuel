<?php

$dato = $_POST['caja_decimal']; 
	echo "Numero decimal $dato <br>";
	echo"Numero binario ". decbin($dato)."<br>";	 
	echo"Numero octal ". decoct($dato)."<br>";	
	echo"Numero Hexadecimal ". dechex($dato)."<br>";	 

?>