<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
<a href="index.html" id="regresa">REGRESAR A LA PAGINA PRINCIPAL</a>
<form action="procesa.php" method="post" id="datos">
<h4 > DATOS DEL VISITANTE</h4>
<br>
<label id="parrafo">
 Nombre:
 <input required type="text" name="nombre" id="nombre">
</label>
<br><br>
<label id="parrafo">
 Apellido:
 <input required type="text" name="apellido" id="apellido">
</label>
<br><br>
<label id="parrafo">
 Correo Electronico:
 <br><br>
 <input required type="email" name="correo" id="correo" pattern=".+@globex\.com" size="30">
</label>
<br><br>
<label id="parrafo">
    ¿Cómo nos calificas?:
    <br><br>
    <input required type="radio" id="cali" name="cali" value="">Bueno
    <input required type="radio" id="cali" name="cali" value="">Malo
    <input required type="radio" id="cali" name="cali" value="">Regular
</label>
<br><br>
<label id="parrafo">
    Opiniones: 
    <br><br>
    <textarea name="opinion" id="opinion" cols="31" rows="5" required></textarea>
</label>

<br><br>

<div id="cajaB">
    <input type="submit" id="boton" value="Agregar">
</div>

</form>

<br>
<a href="MENU.HTML"></a>
<!--<form id ="form2" action="mostrar.php" method="post">


<div id="area">
<input type="submit" id="mostrar" value="Lista de calificaciones">
 
</div>-->


</form>

</body>
</html>