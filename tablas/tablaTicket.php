<?php
  include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM ticket";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla ticket</title>
</head>
<body>
    <br>
    <div id="main-cointener">
    <table>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Motivo</th>
        <th>Fecha</th>
        <th>Estado del ticket</th>
        <th>Integrante id</th>
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['motivo']?></td>
    <td><?php echo $mostrar['fecha_hora']?></td>
    <td><?php echo $mostrar['estado_ticket']?></td>
    <td><?php echo $mostrar['integrante_id_fk']?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>