<?php
    require '../DAO/integrante_hogar.php';
    $con = new DaoIntegrante_Hogar();

    if(isset($_REQUEST['btn_ingresar'])){
        $integrante = $_REQUEST['_integrante'];
        $tipo_integrante = $_REQUEST['_tipo_integrante'];
        $parentesco = $_REQUEST['_parentesco'];
        session_start();

        $con->agregarIntegrante($tipo_integrante,$parentesco,$integrante,$_SESSION['id_hogar']);
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

    
    <title>Asignación de integrante</title>
</head>
<body id="prueba">
    <h1 id="h">Formulario de asignación de integrante</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Agrega un integrante a tu hogar</h2>
                <br>
                <br>
            <form action="agregar_integrante.php" method="POST">
                
                <label for="_integrante">Seleccione el integrante:</label>
                <select name="_integrante" id="">
                    <option value=""></option>
                    <?php
                    include '../DAO/conexion.php';
                    $sql = "SELECT id,nombre FROM usuario WHERE estado = 1 and estado_usuario = 0 ORDER BY id";
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
               
                <label for="_tipo_integrante">Seleccione el tipo de integrante:</label> 
               <select name="_tipo_integrante" id="">
                    <option value=""></option>
                    <option value="sanguineo">consanguinidad</option>
                    <option value="legal">Vía legal</option>
                </select>
               
                <label for="_parentesco">Seleccione el parentesco con respecto al jefe de hogar</label>
                <select name="_parentesco" id="parentesco">
                    <option value=""></option>
                    <option value="conyuge">Cónyuge</option>
                    <option value="hijo/a">Hijo/a</option>
                    <option value="padre">Padre</option>
                    <option value="madre">Madre</option>
                    <option value="ninguna">Sin relación</option>
                </select>
                <br><br><br><br><br><br><br>
                <input type="submit" name="btn_ingresar" value="Agregar integrante">
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