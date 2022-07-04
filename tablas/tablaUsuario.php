<?php
    include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM usuario";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla usuario</title>
</head>
<body>
    <br>
    <div style="text-align:center">
    <table>
        <tr>
        <th>id</th>
        <th>rut</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>fecha de nacimiento</th>
        <th>estado civil</th>
        <th>numero</th>
        <th>correo</th>
        <th>sexo</th>
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['rut']?></td>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['apellido']?></td>
    <td><?php echo $mostrar['f_nacimiento']?></td>
    <td><?php echo $mostrar['e_civil']?></td>
    <td><?php echo $mostrar['numero']?></td>
    <td><?php echo $mostrar['correo']?></td>
    <td><?php echo $mostrar['sexo']?></td>
    
</tr>
<?php } ?>
</table>
</div>
</body>
</html>