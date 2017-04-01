<?php 
	class clearPar 
	{
		function build($cadena)
		{
			$mensaje='';

			//verifico que la cadena contenga sólo paréntesis
			if (strpos($cadena, "(")===false or strpos($cadena, ")")===false) {
				$mensaje="Debe ingresar sólo paréntesis";
			}else{
				//Elimino los espacios en blanco de la cadena
				$cadena=str_replace(" ", "", $cadena);
				//Determino la logitud de la cadena
				$longitud=strlen($cadena);
				$nuevaCadena='';
				//Defino el parámetro de búsqueda
				$buscar="(";

				//Recorro la cadena para buscar parejas
				for ($i=0; $i < $longitud ; $i++) { 
					if ($cadena[$i]==$buscar) {
						
						$nuevaCadena=$nuevaCadena.$cadena[$i];
						
						if ($buscar=="(") {
							$buscar=")";
						}else{
							$buscar="(";
						}
					}
				}
				if (strlen($nuevaCadena)>1) {
					$mensaje=$nuevaCadena;
				}
			}
			return $mensaje;
		}
	}
?>