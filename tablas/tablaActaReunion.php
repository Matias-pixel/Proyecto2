<?php
  include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM acta_reunion";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla acta reunion</title>
</head>
<body>
    <br>
    <div id="main-cointener">
    <table>
        <tr>
        <th>ID</th>
        <th>Titulo de acta</th>
        <th>razon_reunion</th>
        <th>fecha_acta</th>
        
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['titulo_acta']?></td>
    <td><?php echo $mostrar['razon_reunion']?></td>
    <td><?php echo $mostrar['fecha_acta']?></td>
    
</tr>
<?php } ?>
</table>
</div>
</body>
</html>