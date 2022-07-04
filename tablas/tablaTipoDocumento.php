<?php
  include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM tipo_documento";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla Tipo Documento</title>
</head>
<body>
    <br>
    <div id="main-cointener">
    <table>
        <tr>
        <th>ID</th>
        <th>Nombre</th>


</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['nombre']?></td>


</tr>
<?php } ?>
</table>
</div>
</body>
</html>