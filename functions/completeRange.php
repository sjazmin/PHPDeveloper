<?php 
class completeRange 
{
	function build($cadena){
		$mensaje='';
		//Verifico que hay algo escrito.
		if (strlen(trim($cadena))>0) {
			//Verifico si la cadena contine caracteres diferente a la coma para.

			if (strpos($cadena, ";") === false and strpos($cadena, "-") === false and strpos($cadena, "_") === false and strpos($cadena, ".") === false and strpos($cadena, "*") === false and strpos($cadena, "/") === false) {
				
				//Verifico si la cadena contiene al menos una coma.
				if (strpos($cadena, ",")>=0) {
					//Verifico si la cadena contiene corchetes, para luego quitarlos
					if (strpos($cadena, "[")>=0 or strpos($cadena, "]")>=0) {
						$cambiar=array("[","]");
						$cadena=str_replace($cambiar,"", $cadena);
					}
					//Creo un arreglo con cada expresión separada por comas.
					$cadena = explode(",",$cadena);

					//Elimino los espacios en blanco de cada expresión.
					$cadena = array_map('trim', $cadena);
					echo is_int($cadena);
					
					//Valido si la cadena tiene letras
					$tieneLetras;

					foreach ($cadena as $prueba) {
						if (ctype_alpha($prueba)) {
							$tieneLetras=true;
							break;
						}else{
							$tieneLetras=false;
						}
					}

					if (!$tieneLetras) {

						//obtengo el máximo y el mínimo valor para crear la serie
						$min=min($cadena);

						//Valido si el mínimo valor es un entero positivo
						if ($min<=0) {
							$mensaje="Sólo debe ingresar números positivos";
						}else{
							$max=max($cadena);
							$mensaje="[";
							for ($i=$min; $i < $max +1 ; $i++) { 
								if ($i==$max) {
									$mensaje=$mensaje.$i."]";
								}else{
								$mensaje=$mensaje.$i.",";
								}
							}
						}
					}else{
						$mensaje="La cadena no puede contener letras.";
					}
					

				}else{
					$mensaje="Escriba una serie válida.";
				}
			}else{
				
				$mensaje="Debe separar los números por comas.";
			}
		}

		return $mensaje;
	}
}
?>