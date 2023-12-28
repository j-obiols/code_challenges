<?php


function is_anagrama($string1, $string2)
{
     
    if(!is_string($string1) OR !is_string($string2)){
        return "Invalid data";
    }
    
    $string1 = strtolower(prepareString($string1));
    $string2 = strtolower(prepareString($string2));

    if(strlen($string1) != strlen($string2) OR strcmp($string1, $string2) == 0) {
        return false;
    }

    $array1 = str_split($string1);
    $array2 = str_split($string2);

    if(count(array_diff($array1, $array2)) == 0) {
        return true;
    } else {
        return false;
    }   
}



function prepareString($string)
{

    $string = str_replace(
        array(" ", ",", ".", "!", "?"),
        array("", "", "", "", ""),
        $string
    );

    $string = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$string
	);

    $string = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$string
	);

    $string = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$string
	);

    $string = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$string
	);

    $string = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$string
	);

    return $string; 
}