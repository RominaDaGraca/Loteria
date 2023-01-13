<?php
 
function leer_fichero($fichero = "otro.txt")
{ 
    $numeros=array();
    $file = fopen($fichero, "r");
    while (!feof($file)){ 
        $num=fgets($file);
        $numeros[]=$num;
        foreach($numeros as $key => $element) {
            if($element === false) {
                unset($numeros[$key]);
            }
        }    
} 
    fclose($file); 
    return $numeros;
 }

//var_dump (leer_fichero("numeros.txt"));

?>