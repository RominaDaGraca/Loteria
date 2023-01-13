<?php
include("index.php");
function escribir_fichero($fichero = "otro.txt", $numero="")
{
    $file = fopen($fichero, "a");
    fwrite($file, $numero . PHP_EOL);
    fclose($file);
}

escribir_fichero("numeros.txt", 1234);

?>