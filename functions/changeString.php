<?php  
class ChangeString
{
	function build($cadena){
		//Creo un arreglo con los valores que va a buscar y reemplazar
		$search = array("a" => "b", "b" => "c", "c" => "d", "d" => "e", "e" => "f", "f" =>"g", "g" =>"h", "h" =>"i", "i"=>"j", "j"=>"k","k" => "l","l" => "m","m" => "n","n" => "ñ","ñ" => "o","o" => "p","p" => "q","q" => "r","r" => "s","s" => "t","t" => "u","u" => "v","v" => "w","w" => "x","x" => "y","y" => "z","z" => "a","A" => "B", "B" => "C", "C" => "D", "D" => "E", "E" => "F", "F" =>"G", "G" =>"H", "H" =>"I", "I"=>"J", "J"=>"K","K" => "L","L" => "M","M" => "N","N" => "Ñ","Ñ" => "O","O" => "P","P" => "Q","Q" => "R","R" => "S","S" => "T","T" => "U","U" => "V","V" => "W","W" => "X","X" => "Y","Y" => "Z","Z" => "A");
		
		//Sustituyo los valores previamente definidos
		$cadena=strtr($cadena, $search);

		//Retorno el valor
		return $cadena;
	}
}

?>
