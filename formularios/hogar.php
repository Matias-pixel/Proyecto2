<?php 
    require '../DAO/hogar.php';
    $cone = new DaoHogar();
    require '../DAO/integrante_hogar.php';
    $conexion = new DaoIntegrante_Hogar();
    include '../DAO/conexion.php';
    
    if(isset($_REQUEST["btn_crear"])){
        $nombre = $_REQUEST['_nombre_calle'];
        $numeracion = $_REQUEST['_numeracion'];
        $sector_id_fk = $_REQUEST['_sector'];
        $hogar_id_fk;


            
        $existe = "SELECT COUNT(id) FROM hogar WHERE calle = '$nombre' and numeracion= '$numeracion' and sector_id_fk = '$sector_id_fk'";
        $cont = current($con->query($existe)->fetch_assoc());
        
        if ($cont>0) {
            echo "Error: Es posible que el hogar que este intentando ingresar ya se encuentre registrado";

        }else{
            $cone->ingresarHogar($nombre,$numeracion,$sector_id_fk);
            session_start();
            $cone->cambiarEstado_user($_SESSION['id_integrante']);

            $consulta = "SELECT * FROM hogar WHERE calle = '$nombre' and numeracion= '$numeracion' and sector_id_fk = '$sector_id_fk'";
            $obtener = mysqli_query($con,$consulta) or die(mysql_error($con));
            foreach ($obtener as $opciones) {      
                $hogar_id_fk = $opciones['id'];
            }
            $conexion->obtener_id_hogar($hogar_id_fk);
            
            $conexion->crearTabla($_SESSION['id_integrante'],$hogar_id_fk);

        }

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

    
    <title>Formulario Hogar</title>
</head>
<body id="prueba">

    <h1 id="h">Formulario de Hogar</h1>
    <div class="contenedor-con">
                
        
       

        <div class="formulario">
            <h2>Crea un hogar</h2>
                <br>
                <br>
            <form action="hogar.php" method="POST">
                <input type="text" name="_nombre_calle" id="nombre_calle" placeholder="Nombre de la calle:" required>
                <input type="text" name="_numeracion" id="numeracion" placeholder="Numeración del hogar:" required>
                <label for="sector">Sector:</label >
                
                <select name="_sector" id="sector" required>
                    <option value=""></option>
                <?php
                    include '../DAO/conexion.php';
                    $sql = "SELECT id,nombre FROM sector WHERE estado = 1 ORDER BY id";
                    $obtener = mysqli_query($con,$sql) or die(mysql_error($con));
                ?>
                <?php
                    foreach ($obtener as $opciones) {
                        ?>
                        <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre']?></option>
                      
                        <?php
                    }
                ?>
                </select>
                <br><br><br><br><br><br><br><br><br>
                <input type="submit" name="btn_crear" value="Crear hogar">
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