<?php
    require '../DAO/sector.php';
    $con = new DaoSector();
    if(isset($_REQUEST['btn_enviar'])){
        $nombre = $_REQUEST["name"];
        $id_comuna_fk = $_REQUEST['_comuna_fk'];

        $con->IngresarSector($nombre,$id_comuna_fk);


        

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

    
    <title>Formulario Sector</title>
</head>
<body id="prueba">

    <h1 id="h">Formulario de Sector</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Crea un sector</h2>
                <br>
                <br>
            <form action="sector.php" method="POST">
                <input type="text" name="name" id="nombre_sector" placeholder="Nombre del sector:" required>
                
                <label for="_comuna_fk">Seleccione la comuna del sector:</label>
                <select name="_comuna_fk" id="comuna_fk" required>
                    <option value=""></option>

                
              
                <?php
                    include '../DAO/conexion.php';
                    $sql = "SELECT id,nombre,region FROM comuna WHERE estado = 1 ORDER BY id";
                    $obtener = mysqli_query($con,$sql) or die(mysql_error($con));
                    
                ?>
                <?php
                    foreach ($obtener as $opciones) {
                        ?>
                        <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre']." de la región: ".$opciones['region']?></option>
                        <?php
                    }
                    ?>

                ?>

                </select>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <input  name="btn_enviar" type="submit" value="Crear sector">
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