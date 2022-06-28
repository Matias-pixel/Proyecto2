<?php
    require '../DAO/acta_reunion.php';
    $con = new DaoActaReunion();
    if(isset($_REQUEST['btn_enviar'])){
        $nombre = $_REQUEST['titulo'];
        $tipo_reunion = $_REQUEST['_tipo_reunion'];
        $razon = $_REQUEST['razon'];
        session_start();
        $directivo = $_SESSION['integrante'];
       
        $fecha = $_REQUEST['fecha_acta'];

        $con->insertarActa($nombre,$tipo_reunion,$razon,$fecha,$directivo);
        session_abort();
        
        


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

    
    <title>Formulario Acta de reunion</title>
</head>
<body id="prueba">
    <h1 id="h">Formulario de Acta de Reunión</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Crea un acta de reunión</h2>
                <br>
                <br>
            <form action="acta_reunion.php" method="POST">
                <input type="text" name="titulo" id="titulo" placeholder="Titulo del acta:">
                <input type="text" name="_tipo_reunion" id="tipo" placeholder="Ingrese el tipo de reunion">
                <textarea name="razon" id="" cols="30" rows="10"></textarea>
                <label for="fecha_acta">Fecha del acta:</label>
                <br>
                <input type="datetime-local" name="fecha_acta" id="fecha_acta" placeholder="fecha acta">
                <br><br>

                <input type="submit" value="Crear acta" name="btn_enviar">
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