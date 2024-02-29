<?php
        
function palindromo($palabra)
{
    $minusculas = explode(" ", strtolower($palabra)); //Convertimos la cadena a minusculas
    $nuevo="";
    foreach($minusculas as $m)
    {
        trim($m); //Eliminamos los espacios en blanco
        $nuevo .= $m; 
    }
    
    if($nuevo == strrev($nuevo))
    {
        return "Es Palindromo";
    }
    else {
        return "No es";
    }
}

$palabra="reconocer";
echo palindromo($palabra);

?>