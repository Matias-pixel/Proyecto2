<?php
  include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM hogar";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUser.css">
    <title>Tabla usuario</title>
</head>
<body>
    <div id="main-cointener">
    <table>
        <tr>
        <th>ID</th>
        <th>Calle</th>
        <th>Numeracion</th>
        <th>Fecha de creación</th>
        
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['calle']?></td>
    <td><?php echo $mostrar['numeracion']?></td>
    <td><?php echo $mostrar['f_creacion']?></td>
    
</tr>
<?php } ?>
</table>
</div>
</body>
</html>