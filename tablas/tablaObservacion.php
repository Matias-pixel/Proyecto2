<?php
  include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM observacion";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUser.css">
    <title>Tabla noticia</title>
</head>
<body>
    <div id="main-cointener">
    <table>
        <tr>
        <th>ID</th>
        <th>Comentario</th>
        <th>Fecha</th>
        <th>Ticket</th>
       
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['comentario']?></td>
    <td><?php echo $mostrar['fecha_hora']?></td>
    <td><?php echo $mostrar['ticket_id_fk']?></td>
   
</tr>
<?php } ?>
</table>
</div>
</body>
</html>