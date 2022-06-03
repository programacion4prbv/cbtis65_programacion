<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$cali=$_POST["cali"];
$opinion=$_POST["opinion"];

$array=array("nombre"=>$nombre,
"apellido"=>$apellido,"correo"=>$correo,"cali"=>$cali,
"opinion"=>$opinion);



$archivo="datos.json";


if (file_exists(($archivo))){
    $contenido=file_get_contents($archivo);
    $datos=json_decode($contenido,true);
    array_push($datos,$array);
    file_put_contents($archivo,json_encode($datos));

}else{
   $datos=array();
   array_push($datos,$array);
   $archivoab=fopen($archivo,"w");
   fwrite($archivoab,json_encode($datos));
   fclose($archivoab);
}


header("location:index.php");