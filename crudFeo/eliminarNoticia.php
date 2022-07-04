<?php
    require '../DAO/noticia.php';
    $con = new DaoNoticia();
    if(isset($_REQUEST['btn_ingresar'])){
        
        $id = $_REQUEST['id_noticia'];

        $con->eliminar($id);

        echo 'Noticia eliminada correctamente!';


    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" >  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">

    
    <title>Eliminar Noticia</title>
</head>
<body id="prueba">
    <h1 id="h">Eliminar Noticia</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Selecciona el número de la noticia</h2>
                <br>
                <br>
            <form action="eliminarNoticia.php" method="POST">
                <label for="integrante">Número</label>
                <br>
                <select name="id_noticia" id="integrante" required>
                    <option value=""></option>
                    <?php
                    include '../DAO/conexion.php';
                    session_start();
                    $usuario_id = $_SESSION['id_integrante'];
                    $sql = "SELECT id, titulo FROM noticia WHERE estado = 1 AND usuario_id_fk = '$usuario_id' ORDER BY id";
                    $obtener = mysqli_query($con,$sql) or die(mysql_error($con));
                     ?>
                    <?php
                    foreach ($obtener as $opciones) {
                        ?>
                        <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['id'].'   '.$opciones['titulo']?></option>
                      
                        <?php
                    }
                    ?>
                </select>
                <br><br><br><br><br><br><br><br><br><br>
                <br><br><br>
                <input type="submit" name="btn_ingresar" value="Eliminar">
            </form>
            
            
        </div>
        <div class="der">
            <h2>Información de contacto</h2>
            <p><span class="material-icons-outlined">location_on</span> Los Fresnos, San Pedro, Rancagua, O'Higgins 
                <br><br>
                <span class="material-icons-outlined">call</span> Telefono. +569 38526985 
                <br><br>
                <span class="material-icons-outlined">email</span> Administracion@gmail.com 
                <br><br> 
                <span class="material-icons-outlined">email</span> asistente@gmail.com</p>
       
        </div>
</div>
    
</body>
</html>