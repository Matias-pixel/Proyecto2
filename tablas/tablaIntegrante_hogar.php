<?php
  include("../controladores/conexionTablas.php");
    require '../DAO/integrante_hogar.php';
    $conexion = new DaoIntegrante_Hogar();
    session_start();

    $num = $conexion->obtener_id_hogar($_SESSION['id_integrante']);


    $con=conectar();
    $sql="SELECT usuario.nombre, integrante_hogar.tipo_integrante, integrante_hogar.parentesco_integrante, hogar.calle
    FROM usuario
    INNER JOIN integrante_hogar on integrante_hogar.usuario_id_fk = usuario.id
    INNER JOIN hogar on integrante_hogar.id_hogar_fk = hogar.id
    WHERE integrante_hogar.id_hogar_fk = '$num'";
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
        <th>Nombre</th>
        <th>Tipo de integrante</th>
        <th>Tipo de parentesco</th>
        <th>hogar</th>

        
</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['tipo_integrante']?></td>
    <td><?php echo $mostrar['parentesco_integrante']?></td>
    <td><?php echo $mostrar['calle']?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>