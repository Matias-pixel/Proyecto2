<?php
    include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM usuario WHERE discapacidad != 'ninguna'";
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
<h2 style='text-align:center'>Personas discapacitadas</h2>
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
        <th>discapacidad</th>
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
    <td><?php echo $mostrar['discapacidad']?></td>
    
</tr>
<?php } ?>
</table>
</div>
<br>
<div>
    <a href="verVotantes.php">Ver votantes</a>
</div>


</body>
</html>