<?php
    session_start();
  include("../controladores/conexionTablas.php");
  require '../DAO/noticia.php';
  $conexion = new DaoNoticia();
  $numero = $conexion->existe();

  if($numero > 0){
    $con=conectar();
    $id = $_SESSION['id_integrante'];
    $sql="SELECT * FROM noticia WHERE usuario_id_fk = '$id' AND estado = 1";
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
    <link rel="stylesheet" href="../stilos/tablaUser.css">
    <title>Tabla noticia</title>
</head>
<body>
    <div id="main-cointener">
    <table>
        <tr>
        <th>Numero</th>
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Cuerpo noticia</th>
</tr>
<button onclick='tablaNoticia()'>EliminarNoticia</button>

<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['titulo']?></td>
    <td><?php echo $mostrar['tipo']?></td>
    <td><?php echo $mostrar['fecha_hora']?></td>
    <td><?php echo $mostrar['cuerpo']?></td>
</tr>
<?php } ?>
</table>
</div>
<script src="../js/redireccion.js"></script>
</body>
</html>