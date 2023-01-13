<?php
include("leer.php");
$oculto=false;
if (isset($_POST["numero"])){
    $resultado_busqueda=false;
    $numeros=leer_fichero("numeros.txt");
    $num=$_POST["numero"];
    for ($i=0; $i < count($numeros) ; $i++) { 
         if ($num==$numeros[$i]) {
         $resultado_busqueda=true;
         $oculto=true;
         break;
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria Frutas Nieves</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="img/LOGOTIPO.png" alt="">
    </header>
<div id="contenedor" class="contenedor">
    <div id="login">
        <form id="loginform" action="" method="post">
            <label for="">Loteria Navidad</label>
            <input type="text" name="numero" id="" placeholder="Numero Loteria">
            <button type="submit" title="ingresar" name="accion" value="Combrobar numero" class="<?php $oculto?'oculto':'';?>">Comprobar</button> 
            <?php
            if (isset($resultado_busqueda)) {
                if ($resultado_busqueda) {
                     
                }else{
            echo '<button type="submit" title="ingresar" name="registrar">Registrar Numero</button>';
}

}
?>
        </form>
    </div>
</div>
<?php
if (isset($resultado_busqueda)) {
    if ($resultado_busqueda) {
        echo "<p>El numero ya existe!</p>";
    }else{
    echo "<p>El numero no existe </p>";
}

}
?>
</body>
</html>