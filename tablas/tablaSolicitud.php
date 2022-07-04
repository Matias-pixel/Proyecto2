<?php
  include("../controladores/conexionTablas.php");
  require '../DAO/solicitud_documento.php';
  $conexion = new DaoSolicitudDocumento();
  $numero = $conexion->existe();
  $con=conectar();


    if($numero > 0){
        $id = $_SESSION['id_integrante'];
        $sql="SELECT * FROM solicitud_documento WHERE usuario_id_fk = '$id' AND estado = 1";
        $query=mysqli_query($con, $sql); 
      }else{
        die('No hay datos');
    }

       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla Solicitud de Documentos</title>
</head>
<body>
    <br>
    <div id="main-cointener">
    <table>
        <tr>
        <th>Folio</th>
        <th>Nombre de quien retira</th>
        <th>Fecha de la solicitud</th>
        <th>Estado</th>

     
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['folio']?></td>
    <td><?php echo $mostrar['nombre_retira']?></td>
    <td><?php echo $mostrar['fecha_pedido']?></td>
    <td><?php echo $mostrar['estado_entrega']?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>