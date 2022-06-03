<link rel="stylesheet" href="estilos.css">
<?php

$archivo="datos.json";
if (file_exists(($archivo))){
    $contenido=file_get_contents($archivo);
    $datos=json_decode($contenido,true);
}else{
    die();
}
 
?>

<table>
  <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Materia</th>
      <th>Calif. 1</th>
      <th>Calif. 2</th>
      <th>Calif. 3</th>
      <th>Final</th>
  </tr>

  <?php
    $promg=0;
    foreach($datos as $dato){
        $prom=($dato["calificaciones"]["cal1"]+
        $dato["calificaciones"]["cal2"]+
        $dato["calificaciones"]["cal3"])/3;
        
        $prom=number_format($prom,1);
        
        $promg+=$prom;


    ?>
      <tr>
          <td><?php echo $dato["nombre"] ?> </td>
          <td><?php echo $dato["apellido"] ?> </td>
          <td><?php echo $dato["materia"] ?> </td>
          <td class="cal"><?php echo $dato["calificaciones"]["cal1"] ?> </td>
          <td class="cal"><?php echo $dato["calificaciones"]["cal2"] ?> </td>
          <td class="cal"><?php echo $dato["calificaciones"]["cal3"] ?> </td>
          <td><?php echo $prom ?> </td>
      </tr>

    <?php
    }
     $promg=$promg/count($datos);
  ?>
  <tr>
    <tfoot>
      <td colspan="7" id="promedio"><?php echo "Promedio General = ${promg}" ?></td>
    </tfoot>
  </tr>


</table>



