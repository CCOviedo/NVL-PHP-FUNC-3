<?php
function contadorVocales($cadena):bool{
	if ((substr_count(strtolower($cadena), 'a')) > 0 &&
	(substr_count(strtolower($cadena), 'e')) > 0 &&
	(substr_count(strtolower($cadena), 'i')) > 0 &&
	(substr_count(strtolower($cadena), 'o')) > 0 &&
	(substr_count(strtolower($cadena), 'u')) > 0){
		
		echo "LA PALABRA CONTIENE LAS 5 VOCALES";
		return true;
	}else{
		echo "NO CONTIENE TODAS LAS VOCALES";
		return false;
	}
}

contadorVocales('murcielago');
?>