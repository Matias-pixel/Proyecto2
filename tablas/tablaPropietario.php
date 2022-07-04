<?php
    include("../controladores/conexionTablas.php");
    $con=conectar();

   $sql="SELECT * FROM hogar WHERE propietario = 'si' OR propietario ='no' ORDER BY `hogar`.`propietario` DESC;";
    $query=mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/tablaUsuario.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Tabla propietario</title>
</head>
<body>
    <br>
<h2 style='text-align:center'>PROPIETARIO</h2>
<br>
<div style="text-align:center">
    <table>
        <tr>
        <th>id</th>
        <th>calle</th>
        <th>numeracion</th>
        <th>fecha de creacion</th>
        
        <th>propietario</th>

</tr>
<?php
while ($mostrar=mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['calle']?></td>
    <td><?php echo $mostrar['numeracion']?></td>
    <td><?php echo $mostrar['f_creacion']?></td>
    
    <td><?php echo $mostrar['propietario']?></td>

</tr>
<?php } ?>
</table>
</div>
<br>
<div>
<div class="buttons">
<button onclick="tablaVotantes()">Ver Votantes</button> 
<button onclick="tablaEtarios()">Ver grupo etario</button>
</div>
<script src="../js/redireccion.js"></script>
</div>


</body>
</html>