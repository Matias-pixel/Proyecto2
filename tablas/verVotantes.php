<?php
    include("../controladores/conexionTablas.php");
    $con=conectar();
    $sql="SELECT * FROM usuario WHERE vota = 'si'";
    $query=mysqli_query($con, $sql);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <title>Tabla Usuarios votantes</title>
</head>
<body>
    <br>
    <h2 style='text-align:center'>Personas Votantes</h2>
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
        <th>discapacidad</th>
        <th>Votante</th>

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
    <td><?php echo $mostrar['vota']?></td>

    
</tr>
<?php } ?>
</table>
</div>
<div class="buttons">
<button onclick="tablaEtarios()">Ver grupo etario</button> 
<button onclick="tablaArrendatarios()">Arrendatarios</button>
</div>
<script src="../js/redireccion.js"></script>
</body>
</html>